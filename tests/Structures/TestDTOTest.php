<?php
/**
 * This file is part of Terp.
 *
 * @link     http://terp.kkguan.com
 * @license  http://192.168.30.119:10080/KKERP/erp
 */
namespace KkErpService\RpcUtils\Test\Structures;

use KkErpService\RpcUtils\Structures\TestDTO;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class TestDTOTest extends TestCase
{
    public function testConstruct()
    {
        $properties = [
            'id' => 1,
            'order_no' => '单号',
        ];

        $dto = $this->_getDto($properties);

        $this->assertEquals(1, $dto->id);
        $this->assertEquals('单号', $dto->orderNo);
    }

    public function testMake()
    {
        $dto = TestDTO::make([
            'id' => 1,
        ]);

        $this->assertEquals(1, $dto->id);

        $dto->addProperties([
            'id' => 2,
        ]);

        $this->assertEquals(2, $dto->id);
    }

    public function testSet()
    {
        $dto = $this->_getDto();

        $dto->orderNo = 'orderNo';
        $this->assertEquals('orderNo', $dto->orderNo);

        $dto->order_no = 'order_no';
        $this->assertEquals('order_no', $dto->orderNo);
    }

    public function testGet()
    {
        $dto = $this->_getDto();
        $dto->orderNo = 'orderNo';

        $this->assertEquals('orderNo', $dto->orderNo);
        $this->assertEquals('orderNo', $dto->order_no);

        unset($dto->orderNo);
        $this->assertNull($dto->orderNo);
    }

    public function testIsset()
    {
        $dto = $this->_getDto();
        $dto->id = 1;
        $this->assertTrue(isset($dto->id));
        $this->assertTrue(!isset($dto->orderNo));

        $dto = $this->_getDto();
        $dto->orderNo = 'orderNo';
        $this->assertTrue(isset($dto->orderNo));
        $this->assertTrue(!isset($dto->id));
    }

    public function testToString()
    {
        $dto = $this->_getDto();
        $dto->orderNo = 'orderNo';

        $this->assertEquals('{"order_no":"orderNo"}', sprintf('%s', $dto));
    }

    public function testAddProperties()
    {
        $properties = [
            'id' => 1,
        ];

        $dto = $this->_getDto($properties);

        $this->assertEquals(1, $dto->id);
        $this->assertNull($dto->orderNo);

        $dto->addProperties([
            'orderNo' => '单号',
        ]);

        $this->assertEquals('单号', $dto->orderNo);
    }

    public function testGetAttributes()
    {
        $dto = $this->_getDto();
        $attributes = $dto->getAttributes();

        $this->assertTrue(in_array('orderNo', $attributes, true));
        $this->assertFalse(in_array('id', $attributes, true));

        $dto->id = 1;
        $attributes = $dto->getAttributes();
        $this->assertTrue(in_array('id', $attributes, true));
    }

    public function testToArray()
    {
        $dto = $this->_getDto();
        $this->assertEmpty($dto->toArray());

        $dto->id = 1;
        $this->assertArrayHasKey('id', $dto->toArray());
        $this->assertArrayNotHasKey('order_no', $dto->toArray());

        $dto->orderNo = 'orderNo';
        $this->assertArrayHasKey('order_no', $dto->toArray());
        unset($dto->id);
        $this->assertArrayNotHasKey('id', $dto->toArray());

        $dto = $this->_getDto();
        $dto->id = 1;
        $dto->list[] = TestDTO::make([
            'id' => 2,
            'order_no' => 'order',
        ]);
        $this->assertArrayHasKey('list', $dto->toArray());
    }

    public function testToJson()
    {
        $dto = $this->_getDto();
        $this->assertEquals('[]', $dto->toJson());

        $dto->orderNo = '单号';
        $this->assertEquals('{"order_no":"单号"}', $dto->toJson());
    }

    private function _getDto(array $properties = []): TestDTO
    {
        return new TestDTO($properties);
    }
}
