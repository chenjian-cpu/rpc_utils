<?php
/**
 * This file is part of Terp.
 *
 * @link     http://terp.kkguan.com
 * @license  http://192.168.30.119:10080/KKERP/erp
 */
namespace KkErpService\RpcUtils\Test\Kernel;

use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class FunctionTest extends TestCase
{
    /**
     * @test
     */
    public function getElapsedTime()
    {
        $start = microtime(true) - 1;
        $diff = get_elapsed_time($start);
        $this->assertEquals(1000, $diff);
    }

    /**
     * @test
     */
    public function stringToHump()
    {
        $str = 'hello_world';
        $this->assertEquals('helloWorld', string_to_hump($str));
        $this->assertEquals('HelloWorld', string_to_hump($str, true));
    }

    /**
     * @test
     */
    public function stringToLine()
    {
        $str = 'HelloWorld';
        $this->assertEquals('hello_world', string_to_line($str));

        $str = 'helloWorld';
        $this->assertEquals('hello_world', string_to_line($str));
    }

    /**
     * @test
     */
    public function arrayKeyToLine()
    {
        $arr = [
            'HelloWorld' => [
                'Hello' => 1,
            ],
        ];

        $expected = [
            'hello_world' => [
                'hello' => 1,
            ],
        ];
        $this->assertEquals($expected, array_key_to_line($arr));
    }

    /**
     * @test
     */
    public function arrayKeyToHump()
    {
        $arr = [
            'hello_world' => [
                'hello' => 1,
            ],
        ];

        $expected = [
            'helloWorld' => [
                'hello' => 1,
            ],
        ];
        $this->assertEquals($expected, array_key_to_hump($arr));

        $expected = [
            'HelloWorld' => [
                'Hello' => 1,
            ],
        ];
        $this->assertEquals($expected, array_key_to_hump($arr, true));
    }
}
