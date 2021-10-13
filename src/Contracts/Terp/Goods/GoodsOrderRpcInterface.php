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
namespace KkErpService\RpcUtils\Contracts\Terp\Goods;

use KkErpService\RpcUtils\Structures\Request\Terp\Goods\GoodsOrder\GoodsNumbersRequestDTO;
use KkErpService\RpcUtils\Structures\Response\Terp\Goods\GoodsOrder\ChangeStockRecordGoodsNumbersResponseDTO;

interface GoodsOrderRpcInterface
{
    /**
     * 通过商品编码查询是否生成形态转换单.
     */
    public function getChangeStockRecordNumbers(GoodsNumbersRequestDTO $goodsNumbersDTO): ChangeStockRecordGoodsNumbersResponseDTO;
}
