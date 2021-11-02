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
namespace KkErpService\RpcUtils\Structures\Request\Terp\Order\DistributionOrder;

use KkErpService\RpcUtils\Structures\QueryDTO;

/**
 * 直接调拨单搜索.
 *
 * @property array $ids        ID集
 * @property int   $syncStatus 推送状态
 */
class SearchRequestDTO extends QueryDTO
{
}
