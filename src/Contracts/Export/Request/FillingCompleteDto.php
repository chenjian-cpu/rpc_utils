<?php

namespace KkErpService\RpcUtils\Contracts\Export\Request;

class FillingCompleteDto extends AbstractDto
{
    /**
     * @var string 导出任务号
     */
    public $taskNo;

    /**
     * 预计填充总数
     * @var
     */
    public $preFillTotal;
}