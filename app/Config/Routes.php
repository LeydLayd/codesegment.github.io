<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Controller::index');

$routes->get('/', 'Controller::acerca');

$routes->get('/progreso', 'Controller::progreso');

$routes->get('/noticias', 'Controller::noticias');

$routes->get('/cursos', 'Controller::cursos');


/* Controlador Login */
$routes->get('/Login', 'Logins::Log');

$routes->get('/Login', 'Logins::Sign');

