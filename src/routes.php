<?php
// Routes

// TODO 这里要改成用Dispatcher路由的页面显示
$app->get('/', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");
    return $this->renderer->render($response, 'index.phtml', $args);
});


// restful api
$app->get('/rest/{category}/{name}/{ids:.*}', function ($request, $response, $args) {
    $dispatcher = new \Slion\Http\Dispatcher('Rest', $this, $request, $response);
    return $dispatcher->route('get', 'main', [
        $args['category'],
        $args['name'],
        $request->getAttribute('ids'),
    ]);
})->setName('rest');
