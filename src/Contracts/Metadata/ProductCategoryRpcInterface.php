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
namespace KkErpService\RpcUtils\Contracts\Metadata;

use KkErpService\RpcUtils\Structures\Request\Metadata\BatchDTO;
use KkErpService\RpcUtils\Structures\Request\Metadata\GoodsDTO;
use KkErpService\RpcUtils\Structures\Request\Metadata\SearchDTO;
use KkErpService\RpcUtils\Structures\Request\Metadata\StoreDTO;
use KkErpService\RpcUtils\Structures\Request\Metadata\UpdateDTO;

interface ProductCategoryRpcInterface
{
    /**
     * 列表.
     */
    public function index(SearchDTO $searchDTO): array;

    /**
     * 详情.
     * @param int $id 详情id
     */
    public function show(int $id): array;

    /**
     * 新增.
     */
    public function store(StoreDTO $storeDTO): array;

    /**
     * 更新.
     *
     * @param int $id 更新id
     */
    public function update(int $id, UpdateDTO $updateDTO): array;

    /**
     * 批量创建或更新.
     */
    public function batch(BatchDTO $batchDTO): array;

    /**
     * 根据商品查询税收编码.
     */
    public function getTaxCodeByGoods(GoodsDTO $goodsDTO): array;
}
