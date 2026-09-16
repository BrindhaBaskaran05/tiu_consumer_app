<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
#$routes->get('/', 'Home::index');
$routes->get('/', function () {
    return redirect()->to('/login');
});

$routes->get('/register', 'AuthController::register');
$routes->post('/register', 'AuthController::store');
$routes->get('/logout', 'AuthController::logout');

$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::authenticate');

$routes->get('/dashboard', 'DashboardController::index', ['filter' => 'auth']);