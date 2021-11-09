<?php

namespace KkErpService\RpcUtils\Constants\Terp\Order\DistributionOrder;

class SyncStatus
{
    /**
     * 作废
     */
    const INVALID = -1;

    /**
     * 未推送
     */
    const PENDING = 0;

    /**
     * 推送成功
     */
    const FINISHED = 1;
}