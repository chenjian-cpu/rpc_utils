<?php

declare(strict_types=1);
/**
 * 本文件属于KK馆版权所有，泄漏必究。
 * This file belong to KKGUAN, all rights reserved.
 */

namespace KkErpService\RpcUtils\Contracts\RequestDto;

use ReflectionClass;
use ReflectionException;
use ReflectionProperty;
use RuntimeException;
use function get_class;
use function is_array;
use function is_string;

abstract class AbstractBaseObject implements InterfaceBaseDto
{
    /**
     * 下划线转成驼峰命名,默认小驼峰
     *
     * @param string $string 要转换的字符串
     * @param bool $firstUp  是否首字母大写,默认否
     */
    private function stringToHump(string $string, bool $firstUp = false): string
    {
        $humpString = implode(
            '',
            array_map('ucfirst', explode('_', $string))
        );

        return $firstUp ? $humpString : lcfirst($humpString);
    }

    /**
     * 驼峰命名转下划线
     *
     * @param string $string 要转换的字符串
     */
    private function stringToLine(string $string): string
    {
        $replaceString = preg_replace_callback('/([A-Z])/', function ($matches) {
            return '_' . strtolower($matches[0]);
        }, $string);

        return trim(preg_replace('/_{2,}/', '_', $replaceString), '_');
    }

    /**
     * 转换数组key成下划线
     * @param array $array
     * @return array
     */
    private function arrayToLine(array $array): array
    {
        $convert = [];
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $convert[is_string($key) ? $this->stringToLine($key) : $key] = $this->arrayToLine($value);
            } else {
                $convert[is_string($key) ? $this->stringToLine($key) : $key] = $value;
            }
        }

        return $convert;
    }

    /**+
     * 转换数组key成驼峰
     * @param array $array
     * @return array
     */
    protected function arrayToHump(array $array): array
    {
        $convert = [];
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $convert[is_string($key) ? $this->stringToHump($key) : $key] = $this->arrayToHump($value);
            } else {
                $convert[is_string($key) ? $this->stringToHump($key) : $key] = $value;
            }
        }

        return $convert;
    }

    public function __isset($name): bool
    {
        $getter = 'get' . $this->stringToHump($name, true);
        if (method_exists($this, $getter)) {
            return $this->$getter() !== null;
        }

        return false;
    }

    public function __get($name)
    {
        $nameToHump = $this->stringToHump($name, true);
        $getter = 'get' . $nameToHump;
        if (method_exists($this, $getter)) {
            // read property, e.g. getName()
            return $this->$getter();
        }
        if (method_exists($this, 'set' . $nameToHump)) {
            throw new RuntimeException('Getting write-only property: ' . get_class($this) . '::' . $name);
        }

        throw new RuntimeException('Getting unknown property: ' . get_class($this) . '::' . $name);
    }

    public function __set($name, $value)
    {
        $nameToHump = $this->stringToHump($name, true);
        $setter = 'set' . $nameToHump;
        if (method_exists($this, $setter)) {
            // set property
            $this->$setter($value);

            return;
        }
        if (method_exists($this, 'get' . $nameToHump)) {
            throw new RuntimeException('Setting read-only property: ' . get_class($this) . '::' . $name);
        }

        throw new RuntimeException('Setting unknown property: ' . get_class($this) . '::' . $name);
    }

    public function loopAttributeToArray(array &$attributes): array
    {
        foreach ($attributes as $key => $attribute) {
            $attribute instanceof InterfaceBaseDto && $attributes[$key] = $attribute->toArray();
            is_array($attribute) && $attributes[$key] = $this->loopAttributeToArray($attributes[$key]);
        }
        return $attributes;
    }

    /**
     * @throws ReflectionException if the class does not exist.
     */
    public function attributes(int $filter = ReflectionProperty::IS_PUBLIC): array
    {
        $class = new ReflectionClass($this);
        $names = [];
        foreach ($class->getProperties($filter) as $property) {
            if (!$property->isStatic()) {
                $names[] = $property->getName();
            }
        }

        return $names;
    }

    public function setAttributes(?array $values = null): void
    {

        if ($values !== null) {
            foreach ($values as $property => $value) {
                if (is_numeric($property)) {
                    continue;
                }

                $setter = 'set' . $this->stringToHump($property, true);

                if (method_exists($this, $setter)) {
                    $this->$setter($value);
                } elseif (property_exists($this, $property)) {
                    $this->$property = $value;
                }
            }
        }
    }

    public function getAttributes(array $names = null, array $except = []): array
    {
        $values = [];
        if ($names === null) {
            try {
                $names = $this->attributes();
            } catch (ReflectionException $e) {
                throw new RuntimeException('Reflection exception throw!');
            }
        }
        // remove the excepted attributes
        !empty($except) && $names = array_diff($names, $except);

        foreach ($names as $name) {
            $values[$name] = $this->$name;
        }

        return $values;
    }

    public function getAttributesToHump(array $names = null, array $except = []): array
    {
        return $this->arrayToHump($this->getAttributes($names, $except));
    }

    public function getAttributesToLine(array $names = null, array $except = []): array
    {
        return $this->arrayToLine($this->getAttributes($names, $except));
    }

    public function toArray(): array
    {
        $attributes = $this->getAttributes();
        return $this->loopAttributeToArray($attributes);
    }

    public function __toString()
    {
        return $this->toJson();
    }

    public function toHumpArray(): array
    {
        return $this->arrayToHump($this->toArray());
    }

    public function toLineArray(): array
    {
        return $this->arrayToLine($this->toArray());
    }

    public function toJson($options = JSON_UNESCAPED_UNICODE): string
    {
        $json = json_encode($this->toLineArray(), $options);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new RuntimeException(json_last_error_msg(), 500);
        }

        return $json;
    }

}