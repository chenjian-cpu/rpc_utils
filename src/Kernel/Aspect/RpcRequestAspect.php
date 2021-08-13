<?php
/**
 * This file is part of Terp.
 *
 * @link     http://terp.kkguan.com
 * @license  http://192.168.30.119:10080/KKERP/erp
 */
namespace KkErpService\RpcUtils\Kernel\Aspect;

use Hyperf\Contract\StdoutLoggerInterface;
use Hyperf\Di\Aop\AbstractAspect;
use Hyperf\Di\Aop\ProceedingJoinPoint;
use Hyperf\Utils\Context;
use KkErpService\RpcUtils\Kernel\Constants\ContextId;
use Psr\Container\ContainerInterface;

class RpcRequestAspect extends AbstractAspect
{
    public $classes = [
        'Hyperf\RpcClient\ServiceClient::__request',
    ];

    /**
     * @var StdoutLoggerInterface
     */
    protected $logger;

    public function __construct(ContainerInterface $container)
    {
        $this->logger = $container->get(StdoutLoggerInterface::class);
    }

    public function process(ProceedingJoinPoint $proceedingJoinPoint)
    {
        $startTime = microtime(true);

        $proceedingJoinPoint->arguments['keys']['id'] = $this->_getId();
        try {
            $content = $proceedingJoinPoint->process();
        } catch (\Throwable $throwable) {
            throw new \Exception($throwable->getMessage());
        } finally {
            if (isset($throwable)) {
                $content = [
                    'code' => $throwable->getCode(),
                    'message' => '[rpc请求异常]' . $throwable->getMessage(),
                ];
            }
            [$method, $params, $id] = $proceedingJoinPoint->getArguments();
            $this->log($id, $method, $params, $content, $startTime);
        }

        return $content;
    }

    /**
     * 记录日志.
     */
    protected function log(string $id, string $method, $args, $content, float $startTime): bool
    {
        if (!is_string($args)) {
            $args = json_encode($args, JSON_UNESCAPED_UNICODE);
        }
        if (!is_string($content)) {
            $content = json_encode($content, JSON_UNESCAPED_UNICODE);
        }

        $message = sprintf('[%s] [RPC请求日志] [本次耗时]%s [RPC方法]%s [请求参数]%s [响应结果]%s', $id, get_elapsed_time($startTime), $method, $args, $content);

        $this->logger->info($message);

        return true;
    }

    private function _getId(): ?string
    {
        if (Context::has(ContextId::RPC_REQUEST_ID)) {
            return Context::get(ContextId::RPC_REQUEST_ID);
        }

        $id = $this->_setId();

        Context::set(ContextId::RPC_REQUEST_ID, $id);

        return $id;
    }

    private function _setId(): string
    {
        return uniqid('rpc_');
    }
}
