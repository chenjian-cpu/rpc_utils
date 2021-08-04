<?php
/**
 * This file is part of Terp.
 *
 * @link     http://terp.kkguan.com
 * @license  http://192.168.30.119:10080/KKERP/erp
 */
namespace KkErpService\RpcUtils\Kernel\Exceptions;

use KkErpService\RpcUtils\Kernel\Constants\ExceptionCode;

class RpcUtilsException extends \Exception
{
    public function __construct($message = '', $code = ExceptionCode::ERROR, \Throwable $previous = null)
    {
        $message .= '【rpc-utils error】';

        parent::__construct($message, $code, $previous);
    }
}
