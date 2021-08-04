<?php
/**
 * This file is part of Terp.
 *
 * @link     http://terp.kkguan.com
 * @license  http://192.168.30.119:10080/KKERP/erp
 */
namespace KkErpService\RpcUtils\Consumers;

use Hyperf\Contract\StdoutLoggerInterface;
use Hyperf\RpcClient\AbstractServiceClient;
use Hyperf\Utils\Context;
use KkErpService\RpcUtils\Kernel\Exceptions\InvalidArgumentException;
use KkErpService\RpcUtils\Kernel\Exceptions\RequestException;
use Psr\Container\ContainerInterface;

class AbstractConsumer extends AbstractServiceClient
{
    /**
     * @var StdoutLoggerInterface
     */
    protected $logger;

    /**
     * @var string
     */
    protected $interface;

    public function __construct(ContainerInterface $container)
    {
        $this->logger = $container->get(StdoutLoggerInterface::class);
        empty($this->serviceName) && $this->_smartSetServiceName();
        empty($this->interface) && $this->_smartSetInterface();
        parent::__construct($container);
    }

    public function __call($name, $arguments)
    {
        if (!method_exists($this->interface, $name)) {
            throw new InvalidArgumentException("{$name} not found in {$this->interface}");
        }

        return $this->request($name, $arguments);
    }

    protected function request(string $method, array $params)
    {
        $startTime = microtime(true);

        try {
            return $this->__request($method, $params, $this->_getId());
        } catch (\Throwable $throwable) {
            throw new RequestException($throwable->getMessage());
        } finally {
            if (isset($throwable)) {
                $content = [
                    'code' => $throwable->getCode(),
                    'message' => '[rpc请求异常]' . $throwable->getMessage(),
                ];
            }
            $this->log($method, $params, $content, $startTime);
        }
    }

    /**
     * 记录日志.
     */
    protected function log(string $method, $args, $content, float $startTime): bool
    {
        if (!is_string($args)) {
            $args = json_encode($args, JSON_UNESCAPED_UNICODE);
        }
        if (!is_string($content)) {
            $content = json_encode($content, JSON_UNESCAPED_UNICODE);
        }

        $message = sprintf('[RPC请求日志] [本次耗时]%s [RPC方法]%s [请求参数]%s [响应结果]%s', get_elapsed_time($startTime), $method, $args, $content);

        if (Context::has('request_guid')) {
            $message = '[' . Context::get('request_guid') . '] ' . $message;
        }

        $this->logger->info($message);

        return true;
    }

    private function _smartSetInterface()
    {
        $classPath = get_called_class();
        $classPath = str_replace('Consumers', 'Contracts', $classPath);
        $classPath = str_replace('Consumer', 'Interface', $classPath);

        $this->interface = $classPath;
    }

    private function _smartSetServiceName()
    {
        $className = class_basename(get_called_class());
        $this->serviceName = str_replace('Consumer', '', $className);
    }

    private function _getId(): ?string
    {
        return Context::get('request_guid');
    }
}
