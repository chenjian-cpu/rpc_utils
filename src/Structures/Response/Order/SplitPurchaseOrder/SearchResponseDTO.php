<?php
/**
 * This file is part of Terp.
 *
 * @link     http://terp.kkguan.com
 * @license  http://192.168.30.119:10080/KKERP/erp
 */
namespace KkErpService\RpcUtils\Structures\Response\Order\SplitPurchaseOrder;

use KkErpService\RpcUtils\Structures\AbstractDTO;

class SearchResponseDTO extends AbstractDTO
{
    /**
     * @var SplitPurchaseOrderDTO[]
     */
    public $list;
}
