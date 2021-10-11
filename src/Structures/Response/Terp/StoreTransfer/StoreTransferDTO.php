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
namespace KkErpService\RpcUtils\Structures\Response\Terp\StoreTransfer;

use KkErpService\RpcUtils\Structures\AbstractDTO;

/**
 * WMS订单记录.
 *
 * @property int    $id         ID
 * @property int    $type       单据类型
 * @property string $orderNo    单号
 * @property int    $syncStatus 同步状态
 * @property int    $errTimes   错误次数
 * @property string $createTime 创建时间
 * @property string $createAuth 创建人
 */
class StoreTransferDTO extends AbstractDTO
{
}
