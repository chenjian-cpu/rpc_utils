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
