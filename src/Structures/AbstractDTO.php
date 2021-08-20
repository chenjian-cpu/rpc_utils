<?php
/**
 * This file is part of Terp.
 *
 * @link     http://terp.kkguan.com
 * @license  http://192.168.30.119:10080/KKERP/erp
 */
namespace KkErpService\RpcUtils\Structures;

use ReflectionClass;
use ReflectionProperty;

abstract class AbstractDTO
{
    public function __set($name, $value)
    {
        $name = string_to_hump($name);
        $this->{$name} = $value;
    }

    public function __get($name)
    {
        $name = string_to_hump($name);
        return $this->{$name};
    }

    public function __toString()
    {
        return $this->toJson();
    }

    public function getAttributes(): array
    {
        var_dump($this);
        $class = new ReflectionClass($this);
        var_dump($class);
        $attributes = [];
//        var_dump($class->getDocComment());
        foreach ($class->getProperties(ReflectionProperty::IS_PUBLIC) as $property) {
            if (!$property->isStatic()) {
                $attributes[] = $property->getName();
            }
        }
        return $attributes;
    }

    public function toArray(): array
    {
        $attributes = $this->getAttributes();

        $array = [];
        foreach ($attributes as $attribute) {
            $array[$attribute] = $this->{$attribute};
        }

        return array_key_to_line($array);
    }

    public function toJson(): string
    {
        return json_encode($this->toArray(), JSON_UNESCAPED_UNICODE);
    }
}
