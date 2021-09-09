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
namespace KkErpService\RpcUtils\Structures\Request\ExportService;

class fillExportDto extends AbstractDto
{
    /**
     * @var string 导出任务号
     */
    public $taskNo;

    /**
     * 数据排序,服务会从0-N写入excel.
     *
     * @var int
     */
    public $sort;

    /**
     * 导入的数据,一维数组.
     *
     * @example [1,"张三","女"]
     * @var array
     */
    public $items;
}
