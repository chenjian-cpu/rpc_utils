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
 * 商品分类修改.
 *
 * @property string $created_auth 创建人
 * @property string $updated_auth 修改人
 * @property string $audited_auth 审核人
 * @property string $created_at   创建时间
 * @property string $updated_at   修改时间
 * @property string $audited_at   审核时间
 * @property int    $is_deleted   是否删除1.是  0.否
 * @property string $name         分类名
 * @property string $value        分类值
 * @property int    $sequence     排序
 * @property int    $current_id   当前ID,和数据库不一样,es会自动维护一个id
 * @property int    $parent_id    父ID
 * @property int    $status       是否显示 0否 1是
 * @property string $language     语言
 * @property int    $level        层级
 * @property string $path         该类目所有父类目 id
 * @property string $tax_code     税收编码
 */
class UpdateDTO extends AbstractDTO
{
}
