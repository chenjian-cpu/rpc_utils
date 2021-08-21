<?php
/**
 * This file is part of Terp.
 *
 * @link     http://terp.kkguan.com
 * @license  http://192.168.30.119:10080/KKERP/erp
 */
namespace KkErpService\RpcUtils\Structures\Request\Terp\Order\SplitPurchaseOrder;

use KkErpService\RpcUtils\Structures\QueryDTO;

/**
 * 采购单搜索.
 *
 * @property string $md5        md5值
 * @property int    $status     单据状态
 * @property array  $orderType  单据类型
 * @property string $createAuth 创建人
 */
class SearchRequestDTO extends QueryDTO
{
}
