<?php


namespace KkErpService\RpcUtils\Kernel\Server;


class HttpServer extends \Hyperf\JsonRpc\HttpServer
{
    protected function initRequestAndResponse($request, $response): array
    {
        $request->header['content-type'] = 'application/rpc';
        return parent::initRequestAndResponse($request, $response);
    }
}