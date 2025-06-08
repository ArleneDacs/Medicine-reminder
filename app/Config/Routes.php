<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Medicine::index');
$routes->get('/medicine', 'Medicine::index');
$routes->get('/medicine/add', 'Medicine::add');
$routes->post('/medicine/save', 'Medicine::save');
$routes->get('/medicine/view/(:any)', 'Medicine::view/$1');
$routes->get('/medicine/edit/(:any)', 'Medicine::edit/$1');
$routes->post('/medicine/update/(:any)', 'Medicine::update/$1');
$routes->get('/medicine/delete/(:any)', 'Medicine::delete/$1');
$routes->get('/medicine/markTaken/(:any)', 'Medicine::markTaken/$1');
$routes->get('/medicine/history', 'Medicine::history');
$routes->get('/medicine/search', 'Medicine::search');

