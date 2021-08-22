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
namespace KkErpService\RpcUtils\Structures\Response;

use KkErpService\RpcUtils\Structures\AbstractDTO;

/**
 * 通用返回DTO.
 */
class CommonResponseDTO extends AbstractDTO
{
    /**
     * @var bool 是否成功
     */
    protected $success = true;

    /**
     * @var string 消息内容
     */
    protected $message = '';

    /**
     * @var array 数据结果
     */
    protected $data = [];

    public function setSuccess(bool $success): CommonResponseDTO
    {
        $this->success = $success;
        return $this;
    }

    public function setMessage(string $message): CommonResponseDTO
    {
        $this->message = $message;
        return $this;
    }

    public function setData(array $data): CommonResponseDTO
    {
        $this->data = $data;
        return $this;
    }

    public function isSuccess(): bool
    {
        return $this->success ?? true;
    }

    public function getMessage(): string
    {
        return $this->message ?? '';
    }

    public function getData(): array
    {
        return $this->data ?? [];
    }
}
