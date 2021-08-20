<?php


namespace KkErpService\RpcUtils\test\Structures\RequestDto\Order\SplitPurchaseOrder;


use KkErpService\RpcUtils\Structures\RequestDto\Order\SplitPurchaseOrder\SearchDTO;
use PHPUnit\Framework\TestCase;

class SearchDTOTest extends TestCase
{
    public function testDTO()
    {
        $dto = new SearchDTO();
        $dto->md5 = 'md5';

        $attributes = $dto->getAttributes();
        var_dump($attributes);
    }
}