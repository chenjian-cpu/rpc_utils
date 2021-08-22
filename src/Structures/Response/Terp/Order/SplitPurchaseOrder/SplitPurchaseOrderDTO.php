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
 */
class SplitPurchaseOrderDTO extends AbstractDTO
{
    /**
     * @var int ID
     */
    public $id;

    /**
     * @var string 单号
     */
    public $orderNo;

    /**
     * @var int 单据服务ID
     */
    public $orderServiceId;

    /**
     * @var int 单据类型
     */
    public $orderType;

    /**
     * @var string MD5
     */
    public $md5;

    /**
     * @var int 状态
     */
    public $status;

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
