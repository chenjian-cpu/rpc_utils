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
namespace KkErpService\RpcUtils\Structures\Response\Terp\Order\AuditOrder;

use KkErpService\RpcUtils\Structures\AbstractDTO;

/**
 * 审核订单数据.
 *
 * @property int    $id         ID
 * @property int    $orderType  单据类型
 * @property int    $orderNo  单据号
 * @property int    $status     状态
 * @property string $createTime 创建时间
 * @property string $createAuth 创建人
 */
class AuditOrderDTO extends AbstractDTO
{
}
