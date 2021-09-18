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
namespace KkErpService\RpcUtils\Constants\Terp\Order\SplitOrder;

class Status
{
    //keyword from \Kkguan\ErpService\AuditOrderService
    //审核状态
    /**
     * 未审核
     * @var int
     */
    const STATUS_UNREVIEWED = 0;

    /**
     * 已审核
     * @var int
     */
    const STATUS_AUDITED = 1;

    /**
     * 已提交
     * @var int
     */
    const STATUS_SUBMITTED = 2;

}
