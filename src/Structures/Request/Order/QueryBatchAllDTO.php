<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace KkErpService\RpcUtils\Structures\Request\Order;

use KkErpService\RpcUtils\Structures\AbstractDTO;

class QueryBatchAllDTO extends AbstractDTO
{
    /**
     * 类型.
     * @var array
     */
    public $type;

    /**
     * 状态
     * @var array
     */
    public $status;

    /**
     * 仓库ID.
     * @var string
     */
    public $warehouseId;

    /**
     * 商品ID.
     * @var string
     */
    public $specificationId;

    /**
     * 开始时间.
     * @var string
     */
    public $startDate;

    /**
     * 结束时间.
     * @var string
     */
    public $finishDate;
}
