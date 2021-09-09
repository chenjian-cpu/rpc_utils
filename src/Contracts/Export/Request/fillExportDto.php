<?php

namespace KkErpService\RpcUtils\Contracts\Export\Request;

class fillExportDto extends AbstractDto
{
    /**
     * @var string 导出任务号
     */
    public $taskNo;

    /**
     * 数据排序,服务会从0-N写入excel
     *
     * @var int
     */
    public $sort;

    /**
     * 导入的数据,一维数组
     *
     * @example [1,"张三","女"]
     * @var array
     */
    public $items;
}