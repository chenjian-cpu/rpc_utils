<?php

declare(strict_types=1);
/**
 * This file is part of the KKGUAN Service.
 *
 * (c) KKGUAN Service <>
 *
 * 本文件属于KK馆版权所有，泄漏必究。
 * This file belong to KKGUAN, all rights reserved.
 */
namespace KkErpService\RpcUtils\Kernel\Component;

use Hyperf\Contract\IdGeneratorInterface;
use Hyperf\Contract\NormalizerInterface;
use Hyperf\Contract\StdoutLoggerInterface;
use Hyperf\Di\MethodDefinitionCollectorInterface;
use Hyperf\RpcClient\AbstractServiceClient;
use Hyperf\RpcClient\Exception\RequestException;
use Hyperf\Utils\Arr;
use Hyperf\Utils\Serializer\SimpleNormalizer;
use Psr\Container\ContainerInterface;

/**
 * 重写 \Hyperf\RpcClient\ServiceClient::class.
 */
class ServiceClient extends AbstractServiceClient
{
    /**
     * @var MethodDefinitionCollectorInterface
     */
    protected $methodDefinitionCollector;

    /**
     * @var string
     */
    protected $serviceInterface;

    /**
     * @var StdoutLoggerInterface
     */
    protected $logger;

    /**
     * @var NormalizerInterface
     */
    private $normalizer;

    public function __construct(ContainerInterface $container, string $serviceName, string $protocol = 'jsonrpc-http', array $options = [])
    {
        $this->serviceName = $serviceName;
        $this->protocol = $protocol;
        $this->setOptions($options);
        parent::__construct($container);
        $this->normalizer = $container->get(SimpleNormalizer::class);
        $this->methodDefinitionCollector = $container->get(MethodDefinitionCollectorInterface::class);
        $this->logger = $container->get(StdoutLoggerInterface::class);
    }

    protected function __request(string $method, array $params, ?string $id = null)
    {
        $startTime = microtime(true);

        $id = get_rpc_request_id();
        try {
            $content = $this->request($method, $params, $id);
        } catch (\Throwable $throwable) {
            throw new \Exception($throwable->getMessage());
        } finally {
            if (isset($throwable)) {
                $content = [
                    'code'    => $throwable->getCode(),
                    'message' => '[rpc_request_error]' . $throwable->getMessage(),
                    'file'    => $throwable->getFile(),
                    'line'    => $throwable->getLine(),
                ];
            }
            $this->log($id, $method, $params, $content, $startTime);
        }

        return $content;
    }

    public function __call(string $method, array $params)
    {
        return $this->__request($method, $params);
    }

    protected function request(string $method, array $params, ?string $id = null)
    {
        if ($this->idGenerator instanceof IdGeneratorInterface && ! $id) {
            $id = $this->idGenerator->generate();
        }
        $response = $this->client->send($this->__generateData($method, $params, $id));
        if (! is_array($response)) {
            throw new RequestException('Invalid response.');
        }

        $response = $this->checkRequestIdAndTryAgain($response, $id);
        if (array_key_exists('result', $response)) {
            $type = $this->methodDefinitionCollector->getReturnType($this->serviceInterface, $method);
            if ($type->allowsNull() && null === $response['result']) {
                return null;
            }

            return $this->normalizer->denormalize($response['result'], $type->getName());
        }

        if ($code = $response['error']['code'] ?? null) {
            $error = $response['error'];
            // Denormalize exception.
            $class = Arr::get($error, 'data.class');
            $attributes = Arr::get($error, 'data.attributes', []);
            if (isset($class) && class_exists($class) && $e = $this->normalizer->denormalize($attributes, $class)) {
                if ($e instanceof \Throwable) {
                    throw $e;
                }
            }

            // Throw RequestException when denormalize exception failed.
            throw new RequestException($error['message'] ?? '', $code, $error['data'] ?? []);
        }

        throw new RequestException('Invalid response.');
    }

    protected function setOptions(array $options): void
    {
        $this->serviceInterface = $options['service_interface'] ?? $this->serviceName;

        if (isset($options['load_balancer'])) {
            $this->loadBalancer = $options['load_balancer'];
        }
    }

    protected function log(string $id, string $method, $args, $content, float $startTime): bool
    {
        if (! is_string($args)) {
            $args = json_encode($args, JSON_UNESCAPED_UNICODE);
        }
        if (! is_string($content)) {
            $content = json_encode($content, JSON_UNESCAPED_UNICODE);
        }

        $message = sprintf('[%s] [RPC请求日志] [本次耗时]%s [RPC方法]%s [请求参数]%s [响应结果]%s', $id, get_elapsed_time($startTime), $method, $args, $content);

        $this->logger->info($message);

        return true;
    }
}
