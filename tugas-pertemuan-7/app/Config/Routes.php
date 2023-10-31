<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'Form::index');
$routes->post('form/submit', 'Form::submit');



$routes->get('register', 'Register::index');
$routes->post('register/process', 'Register::process');




$routes->get('/ilham', 'Home::ilham');
