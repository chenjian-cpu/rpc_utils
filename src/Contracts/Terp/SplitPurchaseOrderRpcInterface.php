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
    /**
     * 获取拆单推送数据
     *
     * @param string $type 推送系统类型(order-service;k3;)
     * @param string $createAuth 创建人
     * @param array $orderType 单据类型(1:分销购销单;2:跨仓调拨单;3:标准销售单;)
     * @param string $md5 md5
     * @param int $limit 限制条数
     * @return array
     */
    public function getPushSplits(string $type, string $createAuth = '', array $orderType = [], string $md5 = '', int $limit = 20): array;

    public function getPushSplitByIdTest(TestParameter $testParameter): TestDTO;
}
