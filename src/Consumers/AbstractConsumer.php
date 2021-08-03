<?php
/**
 * This file is part of Terp.
 *
 * @link     http://terp.kkguan.com
 * @license  http://192.168.30.119:10080/KKERP/erp
 */
namespace KkErpService\RpcUtils\Consumers;

use Hyperf\RpcClient\AbstractServiceClient;

class AbstractConsumer extends AbstractServiceClient
{
    protected $protocol = 'jsonrpc';

    protected function request(string $method, array $params, ?string $id = null)
    {
        // todo 记录请求

        return $this->__request($method, $params, $id);
        // todo 处理返回异常
    }
}
