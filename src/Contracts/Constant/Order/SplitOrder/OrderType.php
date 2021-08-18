<?php

declare(strict_types=1);


namespace KkErpService\RpcUtils\Contracts\Constant\Order\SplitOrder;

class OrderType
{

    /**
     * 购销单
     */
    const PURCHASE_ORDER = 1;

    /**
     * 调拨单
     */
    const TRANSFER_ORDER = 2;

    /**
     * 销售单
     */
    const SALES_ORDER = 3;

}