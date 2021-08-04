<?php

declare(strict_types=1);
/**
 * This file is part of Terp.
 *
 * @link     http://terp.kkguan.com
 * @license  http://192.168.30.119:10080/KKERP/erp
 */
namespace KkErpService\RpcUtils;

use Hyperf\Contract\NormalizerInterface;
use Hyperf\Utils\Serializer\Serializer;
use Hyperf\Utils\Serializer\SerializerFactory;
use KkErpService\RpcUtils\Consumers\Terp\SplitPurchaseOrderRpcConsumer;
use KkErpService\RpcUtils\Contracts\Terp\SplitPurchaseOrderRpcInterface;
use KkErpService\RpcUtils\Kernel\Middlewares\JsonRpcHttpMiddleware;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                // 自定义consumer
                SplitPurchaseOrderRpcInterface::class => SplitPurchaseOrderRpcConsumer::class,

                // 支持对象的序列化和反序列化
                NormalizerInterface::class => new SerializerFactory(Serializer::class),
            ],
            'middlewares' => [
                'jsonrpc-http' => [
                    JsonRpcHttpMiddleware::class,
                ],
            ],
        ];
    }
}
