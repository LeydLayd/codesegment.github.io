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

/* Noticias */

$routes->get('/noticias', 'Controller::noti1');

$routes->get('/noticias', 'Controller::noti2');

$routes->get('/noticias', 'Controller::noti3');

/* Controlador Login */
$routes->get('/Login', 'Logins::Log');

$routes->get('/Login', 'Logins::Sign');

