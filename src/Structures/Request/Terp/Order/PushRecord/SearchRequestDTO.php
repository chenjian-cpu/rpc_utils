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
namespace KkErpService\RpcUtils\Structures\Request\Terp\Order\PushRecord;

use KkErpService\RpcUtils\Structures\QueryDTO;

/**
 * 铺货单单搜索.
 *
 * @property int $apiType    推送API类型
 * @property int $pushStatus 推送状态
 */
class SearchRequestDTO extends QueryDTO
{
}
