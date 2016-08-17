<?php
use Slim\{App, Container};
use Slion\{Run, Pack};

$run = $GLOBALS['run'];
/* @var $run \Slion\Run */
$run->add('app', __DIR__)

    ->setup(35, function(string $root) {
        $settings   = $this->settings();

        // 使用slion的autoload
        $this->importLibrary("$root/classes");

        // php ini
        $this->phpIniReady($settings['php_ini']['setup'] ?? [],
            $settings['php_ini']['check'] ?? []);

        // Pack 设置
        Pack::setSettings($settings['pack']);
    }, 'base prepare')

    ->setup(35, function(string $root) {
        $container  = $this->container();
        $settings   = $this->settings();

        // 配置
        $container->get('config')->addScene($settings['config']['scene'],
            "$root/config",
            $settings['config']['default']);

        // 语言
        $container->get('dict')->addScene($settings['lang'], "$root/i18n");

        // 日志
        $container->get('logger')->setDirectory($settings['logger']['dir']);
        $container->get('logger')->setEmail($settings['logger']['email']);
    }, 'utils settings')

    ->setup(45, function(string $root) {
        require "$root/helpers.php";
    }, 'load helpers')

    ->setup(200, function(string $root) {
        require "$root/dependencies.php";
        require "$root/hooks.php";
        require "$root/middleware.php";
        require "$root/routes.php";
    }, 'load dependencies & app boot');