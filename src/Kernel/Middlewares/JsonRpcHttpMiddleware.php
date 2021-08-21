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
namespace KkErpService\RpcUtils\Kernel\Middlewares;

use Hyperf\Contract\StdoutLoggerInterface;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class JsonRpcHttpMiddleware implements MiddlewareInterface
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * @var StdoutLoggerInterface
     */
    protected $logger;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->logger = $container->get(StdoutLoggerInterface::class);
    }

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $startTime = microtime(true);

        try {
            $response = $handler->handle($request);
            $responseContent = $response->getBody()->getContents();
            return $response;
        } catch (\Throwable $throwable) {
            throw $throwable;
        } finally {
            if (isset($throwable)) {
                $responseContent = [
                    'code'    => $throwable->getCode(),
                    'message' => '[rpc_response_error]' . $throwable->getMessage(),
                ];
            }
            $requestContent = $request->getAttribute('data');
            $ip = $request->getServerParams()['remote_addr'] ?? '';
            $this->log($requestContent, $responseContent, $ip, $startTime);
        }
    }

    /**
     * 记录日志.
     */
    protected function log($args, $content, string $ip, float $startTime): bool
    {
        $id = $args['id'] ?? '';
        if (! is_string($args)) {
            $args = json_encode($args, JSON_UNESCAPED_UNICODE);
        }
        if (! is_string($content)) {
            $content = json_encode($content, JSON_UNESCAPED_UNICODE);
        }

        $message = sprintf('[%s] [RPC响应日志] [本次耗时]%s [请求ip]%s [请求参数]%s [响应结果]%s', $id, get_elapsed_time($startTime), $ip, $args, $content);

        $this->logger->info($message);

        return true;
    }
}
