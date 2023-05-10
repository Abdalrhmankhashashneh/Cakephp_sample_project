<?php
use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::defaultRouteClass(DashedRoute::class);
Router::scope('/', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'Website', 'action' => 'index', 'index']);
    $routes->connect('/about', ['controller' => 'Website', 'action' => 'about', 'about']);
    $routes->connect('/services', ['controller' => 'Website', 'action' => 'services', 'services']);
    $routes->connect('/login', ['controller' => 'Website', 'action' => 'login', 'login']);
});
