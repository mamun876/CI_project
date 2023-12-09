<?php

use App\Controllers\CategoryController;
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

//categfory routes
$routes->get('category', 'CategoryController::index'); //category list
$routes->get('category/create', 'CategoryController::create'); //category entry form
$routes->post('category/store', 'CategoryController::store'); //category save
$routes->get('category/edit/(:num)', 'CategoryController::edit/$1'); //category edit form
$routes->post('category/update/(:num)', 'CategoryController::update/$1'); //category edit 
$routes->get('category/delete/(:num)', 'CategoryController::delete/$1'); //category delete

