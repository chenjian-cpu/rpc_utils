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
namespace KkErpService\RpcUtils\Contracts\Terp\StoreTransfer;


use KkErpService\RpcUtils\Structures\Request\Terp\Order\StoreTransfer\SearchRequestDTO;
use KkErpService\RpcUtils\Structures\Response\Terp\StoreTransfer\SearchResponseDTO;

/**
 * 门店调拨接口.
 */
interface StoreTransferRpcInterface
{
    public function search(SearchRequestDTO $searchRequestDTO): SearchResponseDTO;
}
