<?php

declare(strict_types=1);

namespace KkErpService\RpcUtils\Contracts\Response\Order\SplitOrder\Structure;

use KkErpService\RpcUtils\Contracts\Response\AbstractResponse;

class SplitOrderStructure extends AbstractResponse
{

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $orderType;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $createAuth;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $pushK3Status;

    /**
     * @var int
     */
    public $errTimes;

}