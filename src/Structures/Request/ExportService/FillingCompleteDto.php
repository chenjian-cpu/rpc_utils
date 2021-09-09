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

class FillingCompleteDto extends AbstractDto
{
    /**
     * @var string 导出任务号
     */
    public $taskNo;

    /**
     * 预计填充总数.
     * @var
     */
    public $preFillTotal;
}
