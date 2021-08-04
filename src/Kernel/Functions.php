<?php
/**
 * This file is part of Terp.
 *
 * @link     http://terp.kkguan.com
 * @license  http://192.168.30.119:10080/KKERP/erp
 */
if (!function_exists('get_elapsed_time')) {
    /**
     * 计算耗时.
     * @param float $start 开始时间
     */
    function get_elapsed_time(float $start): float
    {
        return round((microtime(true) - $start) * 1000, 2);
    }
}
