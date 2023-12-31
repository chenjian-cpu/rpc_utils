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
namespace KkErpService\RpcUtils\Structures\Request\Terp\Order\SplitPurchaseOrder;

use KkErpService\RpcUtils\Structures\QueryDTO;

/**
 * 采购单搜索.
 *
 * @property string $md5        md5值
 * @property int    $status     单据状态
 * @property array  $orderType  单据类型
 * @property string $createAuth 创建人
 * @property array  $ids        ID集
 */
class SearchRequestDTO extends QueryDTO
{
}
