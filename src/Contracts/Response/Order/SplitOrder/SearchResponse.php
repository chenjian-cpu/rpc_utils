<?php

declare(strict_types=1);

namespace KkErpService\RpcUtils\Contracts\Response\Order\SplitOrder;

use KkErpService\RpcUtils\Contracts\Response\AbstractResponse;
use KkErpService\RpcUtils\Contracts\Response\Order\SplitOrder\Structure\SplitOrderStructure;

class SearchResponse extends AbstractResponse
{

    /**
     * @var int
     */
    public $lastId;

    /**
     * @var SplitOrderStructure[]
     */
    public $list;

}