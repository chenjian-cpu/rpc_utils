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
namespace KkErpService\RpcUtils\test\Structures\Request\Amqp;

use KkErpService\RpcUtils\Structures\Request\Amqp\AmqpCallbackRequestDTO;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class AmqpCallbackRequestDTOTest extends TestCase
{
    public function testPush()
    {
        $dto1 = $this->_getDto();
        $dto1->params = ['order_no' => 'TPA001'];
        $dto2 = $this->_getDto(['params' => ['order_no' => 'TPA001']]);

        $this->assertEquals($dto1->params, $dto2->params);
    }

    private function _getDto(array $properties = []): AmqpCallbackRequestDTO
    {
        return new AmqpCallbackRequestDTO($properties);
    }
}
