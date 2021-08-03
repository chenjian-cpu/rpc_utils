<?php
/**
 * This file is part of Terp.
 *
 * @link     http://terp.kkguan.com
 * @license  http://192.168.30.119:10080/KKERP/erp
 */
namespace KkErpService\RpcUtils\Consumers\Terp;

use KkErpService\RpcUtils\Consumers\AbstractConsumer;
use KkErpService\RpcUtils\Contracts\Terp\SplitPurchaseOrderRpcInterface;

class SplitPurchaseOrderRpcConsumer extends AbstractConsumer implements SplitPurchaseOrderRpcInterface
{
    protected $serviceName = 'SplitPurchaseOrderRpc';

    public function getPushSplits(int $limit = 1)
    {
        return $this->request(__FUNCTION__, func_get_args());
    }
}
