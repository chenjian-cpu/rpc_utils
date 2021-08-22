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
namespace KkErpService\RpcUtils\Structures\Response\Terp\Order\WmsOrderRecord;

use KkErpService\RpcUtils\Structures\AbstractDTO;

/**
 * WMS订单记录.
 */
class WmsOrderRecordDTO extends AbstractDTO
{
    /**
     * @var int ID
     */
    public $id;

    /**
     * @var int 单据类型
     */
    public $orderType;

    /**
     * @var string 单号
     */
    public $orderNo;

    /**
     * @var int 同步状态
     */
    public $syncStatus;

    /**
     * @var int 错误次数
     */
    public $errTimes;

    /**
     * @var string 创建时间
     */
    public $createTime;

    /**
     * @var string 创建人
     */
    public $createAuth;
}
