<?php
use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return function (RouteBuilder $routes): void {
 
    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function (RouteBuilder $builder): void {
   
        $builder->connect('/', ['controller' => 'Khachhang', 'action' => 'index']);

      
        $builder->connect('/pages/*', 'Pages::display');

        $builder->fallbacks();
    });
};
