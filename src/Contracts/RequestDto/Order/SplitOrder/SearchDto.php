<?php

declare(strict_types=1);

namespace KkErpService\RpcUtils\Contracts\RequestDto\Order\SplitOrder;

use KkErpService\RpcUtils\Contracts\RequestDto\PaginateDto;

class SearchDto extends PaginateDto
{

    /**
     * @var int|null
     */
    public $lastId;

    /**
     * @var array|null
     */
    public $md5;

    /**
     * @var array|null
     */
    public $orderType;

    /**
     * @var string|null
     */
    public $createAuth;

    /**
     * @var array|null
     */
    public $ids;

    /**
     * @var array|null
     */
    public $ignoreIds;

    /**
     * @var string|null
     */
    public $type;
}