<?php
/**
 * @author andares
 */
define('IN_TEST', 1);

// 定义应用目录并载入composer
const APP_ROOT = __DIR__ . DIRECTORY_SEPARATOR . '..';
require __DIR__ . '/../vendor/autoload.php';
$app = $GLOBALS['app'];
require __DIR__ . '/../src/dependencies.php';

Slion\Test::init();