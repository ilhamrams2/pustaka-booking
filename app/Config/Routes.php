<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/about', 'Home::about');

$routes->get('/contact', 'Home::contact');

$routes->get('/coba/(:num)/(:num)', 'Latihan1::penjumlahan/$1/$2');
