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

class OrderType
{
    /**
     * 购销单.
     */
    const PURCHASE_ORDER = 1;

    /**
     * 调拨单.
     */
    const TRANSFER_ORDER = 2;

    /**
     * 销售单.
     */
    const SALES_ORDER = 3;
}
