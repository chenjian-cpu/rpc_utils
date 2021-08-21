<?php
/**
 * This file is part of Terp.
 *
 * @link     http://terp.kkguan.com
 * @license  http://192.168.30.119:10080/KKERP/erp
 */
namespace KkErpService\RpcUtils\Test\Structures\Request\Terp\Order\SplitPurchaseOrder;

use KkErpService\RpcUtils\Structures\Request\Terp\Order\SplitPurchaseOrder\SearchRequestDTO;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class SearchDTOTest extends TestCase
{
    public function testDTO()
    {
        $md5 = md5('md5');
        $orderType = [1, 3];
        $createAuth = '创建人';

        $dto = new SearchRequestDTO();
        $dto->md5 = $md5;
        $dto->orderType = $orderType;
        $dto->createAuth = $createAuth;

        $this->assertEquals($dto->md5, $md5);
        $this->assertEquals($dto->orderType, $orderType);
        $this->assertEquals($dto->createAuth, $createAuth);
    }
}
