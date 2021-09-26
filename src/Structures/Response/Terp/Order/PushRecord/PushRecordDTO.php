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
namespace KkErpService\RpcUtils\Structures\Response\Terp\Order\PushRecord;

use KkErpService\RpcUtils\Structures\AbstractDTO;

/**
 * 铺货单数据.
 *
 * @property string $orderNo    单据编号
 * @property string $data       单据数据
 * @property int    $serverID   服务器编号
 * @property int    $apiType    推送API类型
 * @property int    $pushStatus 推送状态
 */
class PushRecordDTO extends AbstractDTO
{
}
