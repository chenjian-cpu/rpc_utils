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
namespace KkErpService\RpcUtils\Structures\Request\Terp\Order\WmsOrderRecord;

use KkErpService\RpcUtils\Structures\QueryDTO;

/**
 * WMS订单记录搜索.
 *
 * @property array $type         单据类型
 * @property array $returnStatus 回推订单状态
 * @property int   $syncStatus   同步状态
 */
class SearchRequestDTO extends QueryDTO
{
}
