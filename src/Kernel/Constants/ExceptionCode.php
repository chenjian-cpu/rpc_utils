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
namespace KkErpService\RpcUtils\Kernel\Constants;

class ExceptionCode
{
    /**
     * rpc请求异常.
     */
    const REQUEST = 2000;

    /**
     * 无效的参数.
     */
    const INVALID_ARG = 2001;

    /**
     * 系统未定义错误.
     */
    const ERROR = 9999;
}
