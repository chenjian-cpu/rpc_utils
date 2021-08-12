<?php
/**
 * This file is part of Terp.
 *
 * @link     http://terp.kkguan.com
 * @license  http://192.168.30.119:10080/KKERP/erp
 */
namespace KkErpService\RpcUtils\Contracts\Terp;

interface WmsOrderRecordRpcInterface
{
    /**
     * 获取需要下推销售出库单数据.
     *
     * @param bool  $isPushK3  是否推送K3
     * @param int   $limit     限制条数
     * @param array $select    查询字段
     * @param array $ignoreIds 忽略的id
     */
    public function getPushOutStocks(bool $isPushK3 = false, int $limit = 0, array $select = [], array $ignoreIds = []): array;

    /**
     * @param string $orderNo 单号
     * @param array  $select  查询字段
     */
    public function getInfoByOrderNo(string $orderNo = '', array $select = []): array;
}
