<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AdminHome::index', ['filter'=>'authGuard']);
$routes->get('/products', 'Product::index');
$routes->get('/products/create', 'Product::create');
$routes->post('/products/store', 'Product::store');
$routes->get('/products/delete/(:num)', 'Product::delete/$1');
$routes->get('/products/edit/(:num)', 'Product::edit/$1');
$routes->post('/products/update/(:num)', 'Product::update/$1');

// signin/signup
$routes->get('signup', 'SignupController::index');

$routes->match(['get','post'],'signup/store', 'SignupController::store');
$routes->get('signin', 'SigninController::index');
$routes->post('login', 'SigninController::login');
$routes->get('signout', 'SigninController::logout');

