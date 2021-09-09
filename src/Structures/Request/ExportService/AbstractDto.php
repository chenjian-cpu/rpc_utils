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
namespace KkErpService\RpcUtils\Structures\Request\ExportService;

class AbstractDto
{
    /**
     * 调用方唯一识别id.
     * @var string
     */
    public $appId;

    /**
     * 基础服务-用户服务 用户id.
     * @var string
     */
    public $userId;
}
