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
namespace KkErpService\RpcUtils\Constants\Terp\Order\WmsOrderRecord;

class SyncStatus
{
    /**
     * 已作废
     */
    const CANCEL = -1;

    /**
     * 需同步到第三方系统
     */
    const PENDING = 0;

    /**
     * 需同步到金蝶.
     */
    const NEED_TO_K3 = 1;

    /**
     * 流程成功
     */
    const SUCCESS = 2;

    /**
     * 暂不推送
     */
    const NO_PUSH = 3;
}
