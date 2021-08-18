<?php

declare(strict_types=1);

namespace KkErpService\RpcUtils\Contracts\RequestDto;

interface InterfaceBaseDto extends InterfaceBaseObject
{
    /**
     * @param array $var
     * @return static
     */
    public static function make(array $var);

    public function validated(array $data): array;

    public function rules(): array;

    public function messages(): array;

    public function attributeLabels(): array;
}