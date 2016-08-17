<?php
use Slim\{App, Container};
use Slion\{Run, Pack};

$run = $GLOBALS['run'];
/* @var $run \Slion\Run */
$run->add('app', __DIR__)

    ->setup(100, function(string $root) {
        $container  = $this->container();
        $settings   = $this->settings();

        // 配置
        $container->get('config')->addScene($settings['config']['scene'],
            "$root/config",
            $settings['config']['default']);

        // 语言
        $container->get('dict')->addScene($settings['lang'], "$root/i18n");
    }, 'utils settings')

    ->setup(110, function(string $root) {
        require "$root/helpers.php";
        require "$root/dependencies.php";
        require "$root/hooks.php";
    }, 'loads & package booted');