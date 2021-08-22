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

use Hyperf\Contract\NormalizerInterface;
use Hyperf\Utils\Serializer\Serializer;
use Hyperf\Utils\Serializer\SerializerFactory;
use KkErpService\RpcUtils\Kernel\Aspect\RpcRequestAspect;
use KkErpService\RpcUtils\Kernel\Middlewares\JsonRpcHttpMiddleware;
use Hyperf\JsonRpc\JsonRpcPoolTransporter;
use Hyperf\JsonRpc\JsonRpcTransporter;
use Hyperf\JsonRpc\HttpServer;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                // 支持对象的序列化和反序列化
                NormalizerInterface::class => new SerializerFactory(Serializer::class),

                // 基于连接池的 Transporter
                JsonRpcTransporter::class => JsonRpcPoolTransporter::class,

                // 增加 header
                HttpServer::class => Kernel\Server\HttpServer::class,
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
