<?php
/**
 * This file is part of Terp.
 *
 * @link     http://terp.kkguan.com
 * @license  http://192.168.30.119:10080/KKERP/erp
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
