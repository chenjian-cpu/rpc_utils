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
namespace KkErpService\RpcUtils\Structures\Request\Terp\Order\SplitOrder;

use KkErpService\RpcUtils\Structures\QueryDTO;

/**
 * 拆单搜索.
 */
class SearchRequestDTO extends QueryDTO
{
    /**
     * @var int 最后ID
     */
    public $lastId;

    /**
     * @var string MD5
     */
    public $md5;

    /**
     * @var array 单据类型
     */
    public $orderType;

    /**
     * @var string 创建人
     */
    public $createAuth;

    /**
     * @var array ID集
     */
    public $ids;

    /**
     * @var int 单据状态
     */
    public $status;
}
