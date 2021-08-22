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
namespace KkErpService\RpcUtils\Kernel\Exceptions;

use KkErpService\RpcUtils\Kernel\Constants\ExceptionCode;

class SystemException extends RpcUtilsException
{
    public function __construct($message = '', $code = ExceptionCode::ERROR)
    {
        parent::__construct($message, $code);
    }
}
