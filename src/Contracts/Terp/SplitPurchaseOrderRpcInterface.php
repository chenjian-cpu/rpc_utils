<?php
/**
 * This file is part of Terp.
 *
 * @link     http://terp.kkguan.com
 * @license  http://192.168.30.119:10080/KKERP/erp
 */
namespace KkErpService\RpcUtils\Contracts\Terp;

use KkErpService\RpcUtils\Kernel\Parameters\TestParameter;
use KkErpService\RpcUtils\Structures\TestDTO;

interface SplitPurchaseOrderRpcInterface
{
    public function getPushSplits(int $limit = 1): array;

    public function getPushSplitByIdTest(TestParameter $testParameter): TestDTO;
}
