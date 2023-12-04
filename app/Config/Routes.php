<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AdminHome::index');
$routes->get('/products', 'Product::index');
$routes->get('/products/create', 'Product::create');
$routes->post('/products/store', 'Product::store');
$routes->get('/products/delete/(:num)', 'Product::delete/$1');
$routes->get('/products/edit/(:num)', 'Product::edit/$1');

