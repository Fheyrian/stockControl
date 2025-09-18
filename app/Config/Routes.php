<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// $routes->get('/stockControl/public', 'Home::index');

$routes->get('login', 'Auth::login');
$routes->post('auth/attemptLogin', 'Auth::attemptLogin');
$routes->get('auth/logout', 'Auth::logout');


// Admin area
$routes->group('admin', ['filter' => 'admin'], function($routes) {
    $routes->get('dashboard', 'AdminController::dashboard');
});

// User area
$routes->group('user', ['filter' => 'user'], function($routes) {
    $routes->get('dashboard', 'UserController::dashboard');
});
