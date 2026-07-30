<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->group('admin', static function ($routes) {
    $routes->get('employees', 'AdminEmployees::index');
    $routes->get('employees/create', 'AdminEmployees::create');
    $routes->post('employees/store', 'AdminEmployees::store');
    $routes->get('employees/edit/(:num)', 'AdminEmployees::edit/$1');
    $routes->post('employees/update/(:num)', 'AdminEmployees::update/$1');
    $routes->get('employees/delete/(:num)', 'AdminEmployees::delete/$1');
});
