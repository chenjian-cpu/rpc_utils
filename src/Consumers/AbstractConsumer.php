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
use Psr\Container\ContainerInterface;

class AbstractConsumer extends AbstractServiceClient
{
    /**
     * @var StdoutLoggerInterface
     */
    private $logger;

    public function __construct(StdoutLoggerInterface $logger, ContainerInterface $container)
    {
        $this->logger = $logger;
        parent::__construct($container);
    }

    protected function request(string $method, array $params)
    {
        // 记录开始时间
        $startTime = microtime(true);

        $content = $this->__request($method, $params, $this->_getId());

        $this->log($method, $params, $content, $startTime);

        return $content;
    }

    /**
     * 记录日志.
     */
    protected function log(string $method, $args, $content, $startTime = null): bool
    {
        if (! is_string($args)) {
            $args = json_encode($args, JSON_UNESCAPED_UNICODE);
        }
        if (! is_string($content)) {
            $content = json_encode($content, JSON_UNESCAPED_UNICODE);
        }

        $message = sprintf('[RPC日志] [本次耗时]%s [RPC方法]%s [请求参数]%s [响应结果]%s', $this->_getElapsedTime($startTime), $method, $args, $content);

        if (Context::has('request_guid')) {
            $message = '[' . Context::get('request_guid') . '] ' . $message;
        }

        $this->logger->info($message);

        return true;
    }

    private function _getElapsedTime($start): float
    {
        return round((microtime(true) - $start) * 1000, 2);
    }

    private function _getId(): ?string
    {
        return Context::get('request_guid');
    }
}
