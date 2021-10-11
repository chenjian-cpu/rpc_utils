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

namespace KkErpService\RpcUtils\Constants\Terp\StoreTransfer;

class Status
{
    /**
     * 作废.
     */
    const INVALID = -1;

    /**
     * 保存.
     */
    const SAVE = 0;

    /**
     * 提交
     */
    const COMMIT = 1;

    /**
     * 审核
     */
    const AUDIT = 2;
    /**
     * 审核中
     */
    const AUDITING = 3;


}
