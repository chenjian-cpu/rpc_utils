<?php

namespace KkErpService\RpcUtils\Contracts\Export;

use KkErpService\RpcUtils\Contracts\Export\Request\CreateExportDto;
use KkErpService\RpcUtils\Contracts\Export\Request\fillExportDto;
use KkErpService\RpcUtils\Contracts\Export\Request\FillingCompleteDto;
use KkErpService\RpcUtils\Contracts\Export\Request\GetExportStatusDto;
use KkErpService\RpcUtils\Contracts\Export\Request\GetViewDto;

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
     * 完成数据填充
     */
    public function fillingComplete(FillingCompleteDto $fillExportDto): bool;

    /**
     * 获取导出任务状态
     */
    public function getExportStatus(GetExportStatusDto $exportStatusDto): array;

    /**
     * 获取可视化链接
     */
    public function getView(GetViewDto $getViewDto): string;
}