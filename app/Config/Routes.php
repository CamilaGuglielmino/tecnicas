<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('noticias', 'Noticias::index');


//$routes->resource('usuario', ['placeholder' => '(:num)', 'except' => 'show']);



