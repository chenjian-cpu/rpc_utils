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
namespace KkErpService\RpcUtils\Structures;

use KkErpService\RpcUtils\Kernel\Exceptions\SystemException;
use ReflectionClass;
use ReflectionProperty;

abstract class AbstractDTO
{
    private $_setParameters = [];

    public function __construct(array $properties = [])
    {
        if (! empty($properties)) {
            $this->addProperties(array_key_to_hump($properties));
        }
    }

    public function __set($name, $value)
    {
        if (! isset($this->{$name})) {
            throw new SystemException('请先定义类属性，暂不支持动态属性');
        }

        $name = string_to_hump($name);
        $this->{$name} = $value;
        $this->_setParameters[$name] = $value;
    }

    public function __get($name)
    {
        $name = string_to_hump($name);
        return $this->{$name} ?? null;
    }

    public function __isset($name): bool
    {
        return ! is_null($this->{$name});
    }

    public function __unset($name)
    {
        unset($this->{$name}, $this->_setParameters[$name]);
    }

    public function __toString()
    {
        return $this->toJson();
    }

    public static function make(array $properties = [])
    {
        return new static($properties);
    }

    public function addProperties(array $properties)
    {
        foreach ($properties as $name => $value) {
            if (is_numeric($name)) {
                continue;
            }
            ! is_null($value) && $this->{$name} = $value;
        }
    }

    public function getAttributes(): array
    {
        $class = new ReflectionClass($this);
        $attributes = [];
        foreach ($class->getProperties(ReflectionProperty::IS_PUBLIC) as $property) {
            if (! $property->isStatic()) {
                $attributes[] = $property->getName();
            }
        }

        return array_merge($attributes, array_keys($this->_setParameters));
    }

    public function toArray(): array
    {
        $attributes = $this->getAttributes();

        $array = [];
        foreach ($attributes as $attribute) {
            isset($this->{$attribute}) && $array[$attribute] = $this->{$attribute};
        }
        $array = array_key_to_line($array);

        return $this->_loopObjectToArray($array);
    }

    public function toJson(): string
    {
        return json_encode($this->toArray(), JSON_UNESCAPED_UNICODE);
    }

    private function _loopObjectToArray(array &$array): array
    {
        foreach ($array as $key => $value) {
            $value instanceof AbstractDTO && $array[$key] = $value->toArray();
            is_array($value) && $array[$key] = $this->_loopObjectToArray($array[$key]);
        }
        return $array;
    }
}
