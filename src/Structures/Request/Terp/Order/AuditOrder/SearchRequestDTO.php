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
namespace KkErpService\RpcUtils\Structures\Request\Terp\Order\AuditOrder;

use KkErpService\RpcUtils\Structures\QueryDTO;

/**
 * 审核订单搜索.
 *
 * @property int    $id     最后ID
 * @property array  $orderType  单据类型
 * @property array  $ids        ID集
 * @property int    $status     单据状态
 */
class SearchRequestDTO extends QueryDTO
{
}
