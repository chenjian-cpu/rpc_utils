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
namespace KkErpService\RpcUtils\Kernel\Component;

class HttpServer extends \Hyperf\JsonRpc\HttpServer
{
    protected function initRequestAndResponse($request, $response): array
    {
        $request->header['content-type'] = 'application/rpc';
        return parent::initRequestAndResponse($request, $response);
    }
}
