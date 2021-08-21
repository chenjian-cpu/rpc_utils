<?php
/**
 * This file is part of Terp.
 *
 * @link     http://terp.kkguan.com
 * @license  http://192.168.30.119:10080/KKERP/erp
 */
namespace KkErpService\RpcUtils\Contracts\Amqp;

use KkErpService\RpcUtils\Structures\Request\Amqp\AmqpPushRequestDTO;
use KkErpService\RpcUtils\Structures\Response\CommonResponseDTO;

interface AmqpRpcInterface
{
    /**
     * 队列消息回调.
     * @param  string $type   类型，关联 producer.配置
     * @param  string $uri    回调地址
     * @param  string $method 回调方法
     * @param  array  $params 回调参数
     * @return bool   是否成功
     */
    public function callback(string $type, string $uri, string $method, array $params): bool;

    public function push(AmqpPushRequestDTO $amqpPushRequestDTO): CommonResponseDTO;
}
