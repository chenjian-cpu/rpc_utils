<?php

namespace KkErpService\RpcUtils\Contracts\Export\Request;

class GetExportStatusDto extends AbstractDto
{
    /**
     * 导出任务号
     * @var string
     */
    public $taskNo;

    /**
     * 导出任务名称
     * @var string
     */
    public $exportName;
}