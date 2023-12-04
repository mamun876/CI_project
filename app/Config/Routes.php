<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AdminHome::index');
$routes->get('/products', 'Product::index');
$routes->get('/products/create', 'Product::create');
$routes->post('/products/store', 'Product::store');

