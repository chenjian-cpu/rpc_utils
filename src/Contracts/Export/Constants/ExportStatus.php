<?php

namespace KkErpService\RpcUtils\Contracts\Export\Constants;

class ExportStatus
{
    /**
     * 任务初始化
     */
    public const INITIALIZE = 1;

    /**
     * 填充数据中
     */
    public const FILLING = 2;

    /**
     * 任务异常
     */
    public const ERROR = 3;

    /**
     * 填充完成
     */
    public const FILLED = 4;

    /**
     * 导出任务完成
     */
    public const COMPLETE = 5;

    /**
     * 导出任务已取消
     */
    public const CANCELED = 0;

    public static function zh()
    {
        return [
            self::INITIALIZE => '初始化',
            self::FILLING => '填充中',
            self::ERROR => '异常',
            self::FILLED => '填充完成',
            self::COMPLETE => '已完成',
            self::CANCELED => '已取消',
        ];
    }
}
