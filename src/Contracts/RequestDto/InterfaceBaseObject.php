<?php

declare(strict_types=1);
/**
 * 本文件属于KK馆版权所有，泄漏必究。
 * This file belong to KKGUAN, all rights reserved.
 */

namespace KkErpService\RpcUtils\Contracts\RequestDto;

interface InterfaceBaseObject
{
    public function attributes(): array;

    public function getAttributes(array $names = null, array $except = []): array;

    public function setAttributes(array $values): void;

    public function toArray(): array;
}