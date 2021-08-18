<?php

declare(strict_types=1);


namespace KkErpService\RpcUtils\Contracts\Terp\Order;


use KkErpService\RpcUtils\Contracts\RequestDto\Order\SplitOrder\SearchDto;
use KkErpService\RpcUtils\Contracts\Response\Order\SplitOrder\SearchResponse;

interface SplitOrderRpcInterface
{

    public function search(SearchDto $searchDto) : SearchResponse;

}