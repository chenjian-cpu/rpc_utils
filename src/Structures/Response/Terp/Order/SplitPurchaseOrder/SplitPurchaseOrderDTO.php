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
namespace KkErpService\RpcUtils\Structures\Response\Terp\Order\SplitPurchaseOrder;

use KkErpService\RpcUtils\Structures\AbstractDTO;

/**
 * 采购订单拆单数据.
 *
 * @property int    $id             ID
 * @property string $orderNo        单号
 * @property int    $orderServiceId 单据服务ID
 * @property int    $orderType      单据类型
 * @property string $md5            MD5
 * @property int    $status         状态
 * @property int    $errTimes       错误次数
 * @property string $createTime     创建时间
 * @property string $createAuth     创建人
 */
class SplitPurchaseOrderDTO extends AbstractDTO
{
}
