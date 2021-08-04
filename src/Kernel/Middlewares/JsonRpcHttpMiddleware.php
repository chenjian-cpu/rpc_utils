<?php
/**
 * This file is part of Terp.
 *
 * @link     http://terp.kkguan.com
 * @license  http://192.168.30.119:10080/KKERP/erp
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
            $response->getBody()->rewind();
            return $response;
        } catch (\Throwable $throwable) {
            throw $throwable;
        } finally {
            if (isset($throwable)) {
                $responseContent = [
                    'code' => $throwable->getCode(),
                    'message' => '[rpc响应异常]' . $throwable->getMessage(),
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
        if (!is_string($args)) {
            $args = json_encode($args, JSON_UNESCAPED_UNICODE);
        }
        if (!is_string($content)) {
            $content = json_encode($content, JSON_UNESCAPED_UNICODE);
        }

        $message = sprintf('[RPC响应日志] [本次耗时]%s [请求id]%s [请求参数]%s [响应结果]%s', get_elapsed_time($startTime), $args, $ip, $content);

        $this->logger->info($message);

        return true;
    }
}
