<?php

namespace KkErpService\RpcUtils\Contracts\Export\Request;

class AbstractDto
{
    /**
     * 调用方唯一识别id
     * @var string
     */
    public $appId;

    /**
     * 基础服务-用户服务 用户id
     * @var string
     */
    public $userId;
}