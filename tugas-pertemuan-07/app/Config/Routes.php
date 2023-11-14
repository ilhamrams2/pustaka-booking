<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

$routes->get('/', 'SiswaController::index');

$routes->get('/siswa/create', 'SiswaController::create');

$routes->post('/siswa/store', 'SiswaController::store');
$routes->get('/siswa/data-siswa', 'SiswaController::store');
