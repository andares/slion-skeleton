<?php
return [
    'libraries' => [ // 需要通过autoload导入的目录
        __DIR__ . '/classes',
    ],
    'php_ini'   => [
        'assert.exception'  => 1,
    ],
    'tracy'     => [
        'is_prod'       => null, // 设置 null 时跟 displayErrorDetails 配置走
        'max_depth'     => 6,
        'max_length'    => 100,
    ],
    'utils'     => [
        'logger'    => [
            __DIR__ . '/../logs',
            null, // 严重错误时发邮件
        ],
        'config'    => [
            __DIR__ . '/config',
            'dev',
            'default',
        ],
        'dict'      => [
            __DIR__ . '/i18n',
            'zh_CN.utf8',
        ],
    ],
];
