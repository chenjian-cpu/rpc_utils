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
namespace KkErpService\RpcUtils\Structures\Request\Metadata;

use KkErpService\RpcUtils\Structures\AbstractDTO;

/**
 * 商品分类查询.
 *
 * @property string $ids          商品分类IDS，逗号分隔
 * @property int    $current_page 当前页数
 * @property int    $page_size    每页数量（如果不传分页数据，elasticsearch默认返回10条）
 * @property string $sort_asc     根据字段升序排序，目前支持字段 created_at,updated_at
 * @property string $sort_desc    根据字段降序排序，目前支持字段 created_at,updated_at
 */
class SearchDTO extends AbstractDTO
{
}
