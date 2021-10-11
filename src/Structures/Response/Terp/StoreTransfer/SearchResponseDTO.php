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
namespace KkErpService\RpcUtils\Structures\Response\Terp\StoreTransfer;

use KkErpService\RpcUtils\Structures\AbstractDTO;

/**
 * 门店调拨单搜索.
 *
 * @property string $bill_num
 * @property int    $status     单据状态
 * @property array  $type  单据类型
 * @property string $createAuth 创建人
 * @property array  $ids        ID集
 */
class SearchResponseDTO extends AbstractDTO
{
    /**
     * @var StoreTransferDTO[]
     */
    public $list;
}
