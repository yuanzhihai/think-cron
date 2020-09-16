<?php
use zishuo\cron\command\Run;
use zishuo\cron\command\Schedule;
use zishuo\cron\command\MySql;

\think\Console::addDefaultCommands([
    Run::class,
    Schedule::class,
    MySql::class,
]);
if (!function_exists('add_cron')) {

    /**
     * 添加到计划任务
     * @param string $title
     * @param string $task
     * @param array $data
     * @param string $expression
     * @return bool
     */
    function add_cron($title, $task, $data = [], $expression=null)
    {
        return (new MySql)->add_cron($title, $task, $data, $expression);
    }
}
