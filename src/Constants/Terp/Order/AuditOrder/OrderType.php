<?php


namespace KkErpService\RpcUtils\Constants\Terp\Order\AuditOrder;


class OrderType
{
//keyword from \Kkguan\ErpService\AuditOrderService
    //单据类型
    /**
     * 销售订单
     * @var int
     */
    const SALES_ORDER = 1;

    /**
     * 采购订单
     * @var int
     */
    const PURCHASE_ORDER = 2;

    /**
     * 门店调拨通知单
     * @var int
     */
    const STORE_TRANSFER_NOTICE = 3;

    /**
     * 销售退货订单
     * @var int
     */
    const SALES_RETURN_ORDER = 4;

    /**
     * 调拨单
     * @var int
     */
    const TRANSFER = 5;
}