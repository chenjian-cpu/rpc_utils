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

class GetExportStatusDto extends AbstractDto
{
    /**
     * 导出任务号.
     * @var string
     */
    public $taskNo;

    /**
     * 导出任务名称.
     * @var string
     */
    public $exportName;
}
