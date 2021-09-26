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
namespace KkErpService\RpcUtils\Constants\Terp\Order\PushRecord;

class ApiType
{
    /**
     * 同步组织.
     */
    const PUSH_ORG = 1;

    /**
     * 同步门店.
     */
    const PUSH_STORE = 2;

    /**
     * 同步仓库.
     */
    const PUSH_STOCK = 3;

    /**
     * 同步供应商.
     */
    const PUSH_SUPPLIER = 4;

    /**
     * 同步入库单.
     */
    const PUSH_IN_STOCK_ORDER = 5;

    /**
     * 同步价格
     */
    const PUSH_PRICE = 6;

    /**
     * 商品资料.
     */
    const PUSH_GOODS_INFO = 7;

    /**
     * 商品条码
     */
    const PUSH_GOODS_BAR_CODE = 8;

    /**
     * 删除条码
     */
    const DELETE_GOODS_BAR_CODE = 9;

    /**
     * 物料分类.
     */
    const PUSH_GOODS_CLASSIFY = 10;

    /**
     * 商品品牌.
     */
    const PUSH_GOODS_BRAND = 11;

    /**
     * 商品单位.
     */
    const PUSH_GOODS_UNIT = 12;

    /**
     * 盘盈盘亏.
     */
    const PUSH_GAIN_LOSS_ORDER = 13;

    /**
     * 推送初始化库存.
     */
    const PUSH_INIT_STOCK = 14;

    /**
     * 跨境商品分组.
     */
    const PUSH_CROSS_BORDER_GOODS_GROUP = 15;

    /**
     * 跨境商品品牌.
     */
    const PUSH_CROSS_BORDER_GOODS_BRAND = 16;

    /**
     * 跨境供应商资料.
     */
    const PUSH_CROSS_BORDER_SUPPLIER = 17;

    /**
     * 广播卡操作流水.
     */
    const PUSH_ACTION_RECORD = 18;

    /**
     * 物料验收单推送
     */
    const PUSH_ACCEPT_ORDER = 19;
}
