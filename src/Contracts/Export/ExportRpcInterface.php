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
namespace KkErpService\RpcUtils\Contracts\Export;

use KkErpService\RpcUtils\Structures\Request\ExportService\CreateExportDto;
use KkErpService\RpcUtils\Structures\Request\ExportService\fillExportDto;
use KkErpService\RpcUtils\Structures\Request\ExportService\FillingCompleteDto;
use KkErpService\RpcUtils\Structures\Request\ExportService\GetExportStatusDto;
use KkErpService\RpcUtils\Structures\Request\ExportService\GetViewDto;
use KkErpService\RpcUtils\Structures\Response\ExportService\ExportStatusDto;

interface ExportRpcInterface
{
    /**
     * 创建导出任务
     *
     * @return string 任务id
     */
    public function createExport(CreateExportDto $createExport): string;

    /**
     * 填充导出任务
     */
    public function fillExport(fillExportDto $fillExportDto): bool;

    /**
     * 完成数据填充.
     */
    public function fillingComplete(FillingCompleteDto $fillExportDto): bool;

    /**
     * 获取导出任务状态
     */
    public function getExportStatus(GetExportStatusDto $exportStatusDto): ExportStatusDto;

    /**
     * 获取可视化链接.
     */
    public function getView(GetViewDto $getViewDto): string;
}
