<?php
/**
 * This file is part of Terp.
 *
 * @link     http://terp.kkguan.com
 * @license  http://192.168.30.119:10080/KKERP/erp
 */
namespace KkErpService\RpcUtils\Structures\Response\Terp\Order\SplitPurchaseOrder;

use KkErpService\RpcUtils\Structures\AbstractDTO;

/**
 * 采购订单拆单数据.
 *
 * @property int    $id             ID
 * @property string $orderNo        单号
 * @property int    $orderServiceId 单据服务ID
 * @property int    $orderType      单据类型
 * @property string $md5            MD5
 * @property int    $status         状态
 * @property int    $errTimes       错误次数
 * @property string $createTime     创建时间
 * @property string $createAuth     创建人
 */
class SplitPurchaseOrderDTO extends AbstractDTO
{
}
