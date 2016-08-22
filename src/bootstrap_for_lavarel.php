<?php
$run = $GLOBALS['run'];
/* @var $run \Slion\Run */
$run->add('app', __DIR__)
    ->setup(5, function(string $root) {
        $this->skip(20);
        $this->skip(30);
        $this->skip(60);
    })

    ->setup(100, function(string $root) {
        $container  = $this->container();
        $settings   = $this->settings();

        // 配置
        $base_dir = realpath(dirname(__DIR__) . '/../../..');
        $container->get('config')
            ->addScene('lavarel', "$base_dir/config/slion");
    }, 'utils settings')

    ->setup(110, function(string $root) {
        require "$root/helpers.php";
    }, 'loads & package booted');