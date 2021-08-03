<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace KkErpService\RpcUtils;

use KkErpService\RpcUtils\Consumers\Terp\SplitPurchaseOrderRpcConsumer;
use KkErpService\RpcUtils\Interfaces\Terp\SplitPurchaseOrderRpcInterface;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                SplitPurchaseOrderRpcInterface::class => SplitPurchaseOrderRpcConsumer::class,
            ],
        ];
    }
}
