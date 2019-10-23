<?php
/**
 * Created by PhpStorm.
 * User: chenzx
 * Date: 2019-06-07
 * Time: 12:10
 */

use Monolog\Logger;

return [
    'setting' => [
        // 数据库orm配置
        'db'   => [
            'database_type' => 'mysql',
            'database_name' => 'rentshe',
            'server'        => '127.0.0.1',
            'username'      => 'root',
            'password'      => 'Zu.wo.lo123',
            'charset'       => 'utf8',
            'prefix'        => '',
            'logging' => true,
        ],
        // 模版引擎相关配置
        'twig' => [
            'template_path' => ROOT_BASE_PATH . 'app/Views',
            'cache'         => ROOT_BASE_PATH. 'runtime/temp',
            'auto_reload'   => true,
            'debug'         => true
        ],
        'logger' => [
            'name' => 'slim-app',
            'path' => ROOT_BASE_PATH. 'runtime/logs/app.log',
            'level' => Logger::DEBUG,
       ],
    ]

];
