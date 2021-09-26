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
namespace KkErpService\RpcUtils\Contracts\Terp\Order;

use KkErpService\RpcUtils\Structures\Request\Terp\Order\PushRecord\SearchRequestDTO;
use KkErpService\RpcUtils\Structures\Response\Terp\Order\PushRecord\SearchResponseDTO;

/**
 * 铺货单接口.
 */
interface PushRecordRpcInterface
{
    public function search(SearchRequestDTO $searchRequestDTO): SearchResponseDTO;
}
