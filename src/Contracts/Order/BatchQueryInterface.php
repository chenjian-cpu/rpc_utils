<?php

declare(strict_types=1);
/**
 * This file is part of the KKGUAN Order Service.
 *
 * (c) KKGUAN Order Service <>
 *
 * 本文件属于KK馆版权所有，泄漏必究。
 * This file belong to KKGUAN, all rights reserved.
 */
namespace KkErpService\RpcUtils\Contracts\Order;

use KkErpService\RpcUtils\Structures\Request\Order\QueryBatchAllDTO;

interface BatchQueryInterface
{
    /**
     * 查询所有满足条件的批次流水.
     *
     * @return array 结果集
     */
    public function queryAllBatchesFlow(QueryBatchAllDTO $queryBatchAll): array;
}
