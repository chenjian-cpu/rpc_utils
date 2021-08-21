<?php
/**
 * This file is part of Terp.
 *
 * @link     http://terp.kkguan.com
 * @license  http://192.168.30.119:10080/KKERP/erp
 */
namespace KkErpService\RpcUtils\Structures;

class QueryDTO extends AbstractDTO
{
    /**
     * @var int 当前页数
     */
    public $page = 1;

    /**
     * @var int 每页条数
     */
    public $perPage = 10;

    /**
     * @var string[] 查询字段
     */
    public $select = ['*'];

    /**
     * @var int 限制条数，默认不限制
     */
    public $limit = -1;

    /**
     * @var array 忽略的ID
     */
    public $ignoreIds = [];
}
