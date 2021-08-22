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
    /**
     * 作废
     */
    const INVALID = -1;

    /**
     * 未推送
     */
    const PENDING = 0;

    /**
     * 推送成功
     */
    const FINISHED = 1;
}
