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
 * AMQP推送.
 */
class AmqpCallbackRequestDTO extends AbstractDTO
{
    /**
     * @var string 类型，关联producer配置
     */
    public $type;

    /**
     * @var string 回调地址
     */
    public $uri;

    /**
     * @var string 回调方法
     */
    public $method;

    /**
     * @var array 回调参数
     */
    public $params;
}
