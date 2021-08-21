<?php
/**
 * This file is part of Terp.
 *
 * @link     http://terp.kkguan.com
 * @license  http://192.168.30.119:10080/KKERP/erp
 */
namespace KkErpService\RpcUtils\Contracts\Terp\Order;

use KkErpService\RpcUtils\Structures\Request\Order\SplitPurchaseOrder\SearchRequestDTO;
use KkErpService\RpcUtils\Structures\Response\Order\SplitPurchaseOrder\SearchResponseDTO;

/**
 * 采购单接口.
 */
interface SplitPurchaseOrderRpcInterface
{
    public function search(SearchRequestDTO $searchRequestDTO): SearchResponseDTO;
}
