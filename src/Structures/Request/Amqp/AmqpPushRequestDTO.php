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
namespace KkErpService\RpcUtils\Structures\Request\Amqp;

use KkErpService\RpcUtils\Structures\AbstractDTO;

/**
 * Class AmqpPushRequestDTO.
 *
 * @property string $type   类型，关联producer配置
 * @property string $uri    回调地址
 * @property string $method 回调方法
 * @property array  $params 回调参数
 */
class AmqpPushRequestDTO extends AbstractDTO
{
}
