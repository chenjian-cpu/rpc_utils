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

use KkErpService\RpcUtils\Structures\Request\ExportService\CreateExportDTO;
use KkErpService\RpcUtils\Structures\Request\ExportService\fillExportDTO;
use KkErpService\RpcUtils\Structures\Request\ExportService\FillingCompleteDTO;
use KkErpService\RpcUtils\Structures\Request\ExportService\GetExportStatusDTO;
use KkErpService\RpcUtils\Structures\Request\ExportService\GetViewDTO;
use KkErpService\RpcUtils\Structures\Response\ExportService\ExportStatusDTO;

interface ExportRpcInterface
{
    /**
     * 创建导出任务
     *
     * @return string 任务id
     */
    public function createExport(CreateExportDTO $createExport): string;

    /**
     * 填充导出任务
     */
    public function fillExport(fillExportDTO $fillExportDto): bool;

    /**
     * 完成数据填充.
     */
    public function fillingComplete(FillingCompleteDTO $fillExportDto): bool;

    /**
     * 获取导出任务状态
     */
    public function getExportStatus(GetExportStatusDTO $exportStatusDto): ExportStatusDTO;

    /**
     * 获取可视化链接.
     */
    public function getView(GetViewDTO $getViewDto): string;
}
