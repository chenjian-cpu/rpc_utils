<?php

declare(strict_types=1);
/**
 * 本文件属于KK馆版权所有，泄漏必究。
 * This file belong to KKGUAN, all rights reserved.
 */

namespace KkErpService\RpcUtils\Contracts\RequestDto;

use Hyperf\Utils\ApplicationContext;
use Hyperf\Validation\Contract\ValidatorFactoryInterface;
use Hyperf\Validation\ValidationException;

abstract class AbstractBaseDto extends AbstractBaseObject
{
    public function __construct(?array $property = null)
    {
        $property = $this->arrayToHump($property ?? []);
        $property = $this->validated($property);
        $this->setAttributes($property);
    }

    /**
     * @param array $var
     * @return static
     */
    public static function make(array $var)
    {
        return make(static::class, [$var]);
    }

    public function validated(array $data): array
    {
        $rules = $this->rules();

        if (empty($rules)) {
            return $data;
        }

        $validationFactory = ApplicationContext::getContainer()->get(ValidatorFactoryInterface::class);
        $validator = $validationFactory->make($data, $rules, $this->messages(), $this->attributeLabels());
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
        return $validator->validated();
    }

    public function rules(): array
    {
        return [];
    }

    public function messages(): array
    {
        return [];
    }

    public function attributeLabels(): array
    {
        return [];
    }

    // rpc传输时，强制对所有输入的属性进行参数验证
    public function __sleep(): array
    {
        $data = $this->toArray();
        foreach ($data as $key => $value) {
            if ($value === null) {
                unset($data[$key]);
            }
        }
        return array_keys($this->validated($data));
    }
}