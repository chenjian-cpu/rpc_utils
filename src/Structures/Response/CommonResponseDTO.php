<?php
/**
 * This file is part of Terp.
 *
 * @link     http://terp.kkguan.com
 * @license  http://192.168.30.119:10080/KKERP/erp
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
