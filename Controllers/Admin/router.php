<?php
$router = new \Services\Router();

$router->get('/(\d+)' , function ($id) {
    $route = new \Controllers\Radio\DefualtController();
    $route->indexAction($id);
});

$router->get('/(\d+)' , function ($id) {
    $route = new \Controllers\Radio\DefualtController();
    $route->indexAction($id);
});

$router->get('/(\d+)' , function ($id) {
    $route = new \Controllers\Radio\DefualtController();
    $route->indexAction($id);
});
$router->run();