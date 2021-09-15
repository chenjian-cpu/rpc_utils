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
namespace KkErpService\RpcUtils\Structures\Request\Terp\Erp\ErpStore;

use KkErpService\RpcUtils\Structures\QueryDTO;

/**
 *
 * @property int    $isOlKpos     是否上线KPOS(-1:无需上线；0:未上线；1:已上线)
 */
class SearchRequestDTO extends QueryDTO
{
}
