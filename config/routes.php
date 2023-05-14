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
Router::scope('/adminpanel', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'admin', 'action' => 'index']);
    $routes->scope('/users', function ($routes){
       $routes->connect('/',['controller' => 'users', 'action' => 'index']);
       $routes->connect('/edit_users_form/*',['controller' => 'users', 'action' => 'editUserForm']);
       $routes->connect('/edit_users/*',['controller' => 'users', 'action' => 'editUser']);
       $routes->connect('/add_users_form',['controller' => 'users', 'action' => 'addUserForm']);
       $routes->connect('/add_user',['controller' => 'users', 'action' => 'addUser']);
    });
    $routes->connect('/login', ['controller' => 'admin', 'action' => 'login']);
    $routes->connect('/logout', ['controller' => 'admin', 'action' => 'logout']);
});
