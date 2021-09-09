<?php

namespace KkErpService\RpcUtils\Contracts\Export\Request;

class CreateExportDto extends AbstractDto
{

    /**
     * 导出任务名称,服务唯一性
     *
     * @var string
     */
    public $exportName;

    /**
     * excel表头,一维数组
     *
     * @example ["ID","姓名","性别"]
     * @var array
     */
    public $exportHeader;
}