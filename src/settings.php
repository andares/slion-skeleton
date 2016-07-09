<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        'slion' => [
            'libraries' => [ // 需要通过autoload导入的目录
                __DIR__ . '/classes',
            ],
            'tracy'     => [
                'mode'          => null, // 设置 null 时跟 displayErrorDetails 配置走
                'log_dir'       => __DIR__ . '/../logs',
                'max_depth'     => 6,
                'max_length'    => 100,
            ],
            'config'    => [
                'base_dir'  => __DIR__ . '/config',
                'scene'     => 'dev',
                'scene_def' => 'default',
            ],
            'dict'      => [
                'base_dir'  => __DIR__ . '/i18n',
                'lang'      => 'zh_CN.utf8',
            ],
        ],
    ],
];
