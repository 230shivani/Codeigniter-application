<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->post('register', 'AuthController::register');
$routes->post('login', 'AuthController::login');
$routes->post('teachers/create', 'TeacherController::create');
$routes->get('teachers', 'TeacherController::list');

