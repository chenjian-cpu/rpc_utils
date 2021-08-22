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
namespace KkErpService\RpcUtils;

use KkErpService\RpcUtils\Kernel\Aspect\RpcRequestAspect;
use KkErpService\RpcUtils\Kernel\Listener\RegisterProtocolListener;
use KkErpService\RpcUtils\Kernel\Middlewares\JsonRpcHttpMiddleware;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
            ],
            'listeners' => [
                RegisterProtocolListener::class,
            ],
            'middlewares' => [
                'jsonrpc-http' => [
                    JsonRpcHttpMiddleware::class,
                ],
            ],
            'aspects' => [
                RpcRequestAspect::class,
            ],
        ];
    }
}
