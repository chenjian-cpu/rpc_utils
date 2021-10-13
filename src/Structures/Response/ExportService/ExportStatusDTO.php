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
namespace KkErpService\RpcUtils\Structures\Response\ExportService;

use KkErpService\RpcUtils\Structures\Request\ExportService\AbstractDTO;

class ExportStatusDTO extends AbstractDTO
{
    /**
     * 状态code.
     * @var int
     */
    public $statusCode;

    /**
     * 状态名.
     * @var string
     */
    public $statusName;

    /**
     * 文件下载url.
     * @var string
     */
    public $fileUrl;
}
