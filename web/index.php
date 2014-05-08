<?php
require_once __DIR__.'/../vendor/autoload.php'; 

$app = new Silex\Application(); 
$app['debug'] = true;
$app->register(new Silex\Provider\ServiceControllerServiceProvider());

$app['posts.controller'] = $app->share(function() use ($app) {
      return new PostController();
});
$app->get('/posts/{id}', "posts.controller:get");

$app->get('/hello/{name}', function($name) use($app) { 
    return 'Hello '.$app->escape($name); 
}); 

$app->run(); 
