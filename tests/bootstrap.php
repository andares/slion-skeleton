<?php

/**
 * @author andares
 */
define('IN_TEST', 1);

$GLOBALS['settings'] = require __DIR__ . '/../src/settings.php';
// 改本地连接数据库
$GLOBALS['settings']['slion_settings']['config']['scene'] = 'local';

require __DIR__ . '/../vendor/autoload.php';
$run = $GLOBALS['run'];
/* @var $run \Slion\Run */
$run();


