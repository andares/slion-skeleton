<?php
// DIC configuration
$container  = $this->container();

// router
$container['dispatcher'] = function(\Slim\Container $c) {
    return new LionCommon\Http\Dispatcher($this->app());
};

// view renderer
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};

// Service factory for the ORM
$container['db'] = function ($c) {
    return new Slion\DB($c, cf('database/connections'));
};
// touch it
$container->db;
