<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');


// User Routes
$routes->get('/login', 'Login::index');
$routes->match(['get', 'post'], 'register/new', 'Register::new');
$routes->match(['get', 'post'], 'login/auth', 'Login::auth');
$routes->get('dashboard', 'Dashboard::index', ['filter' => 'authGuard']);
$routes->get('logout', 'Logout::logout');
$routes->get('register', 'Register::index');

// Comics Routes
$routes->get('comics', 'Comics::index', ['filter' => 'authGuard']);
$routes->get('comic/(:any)', 'Comics::detail/$1');
$routes->get('comics/modal', 'Comics::modal');
$routes->get('comics/add', 'Comics::add');
$routes->post('comics/save', 'Comics::save');
$routes->get('comics/edit/(:any)', 'Comics::edit/$1');
$routes->post('comics/update/(:any)', 'Comics::update/$1');
$routes->get('comic/DeleteComics', 'Comics::DeleteComics');
$routes->get('comics/DeleteComics/(:any)', 'Comics::DeleteComics/$1');
