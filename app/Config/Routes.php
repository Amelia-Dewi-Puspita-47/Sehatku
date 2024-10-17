<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->setAutoRoute(true);
// $routes->get('/coba', function () {
//     echo 'hello amel';
// });

// $routes->get('/users', 'Admin\Users::index');

