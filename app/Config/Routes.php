<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Auth::index');
$routes->get('/login', 'Auth::index');
$routes->post('/auth', 'Auth::auth');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/logout', 'Auth::logout');

// User Acounts routes

$routes->get('/users', 'Users::index');
$routes->post('users/save', 'Users::save');
$routes->get('users/edit/(:segment)', 'Users::edit/$1');
$routes->post('users/update', 'Users::update');
$routes->delete('users/delete/(:num)', 'Users::delete/$1');
$routes->post('users/fetchRecords', 'Users::fetchRecords');

// Student routes
$routes->get('/student', 'Student::index');
$routes->post('student/save', 'Student::save');
$routes->get('student/edit/(:segment)', 'Student::edit/$1');
$routes->post('student/update', 'Student::update');
$routes->delete('student/delete/(:num)', 'Student::delete/$1');
$routes->post('student/fetchRecords', 'Student::fetchRecords');

//parent routes
$routes->get('/parent', 'Parents::index');
$routes->post('parent/save', 'Parents::save');
$routes->get('parent/edit/(:segment)', 'Parents::edit/$1');
$routes->post('parent/update', 'Parents::update');
$routes->delete('parent/delete/(:num)', 'Parents::delete/$1');
$routes->post('parent/fetchRecords', 'Parents::fetchRecords');

$routes->get('/parent', 'ParentTable::index');
$routes->post('parent/save', 'ParentTable::save');
$routes->get('parent/edit/(:segment)', 'ParentTable::edit/$1');
$routes->post('parent/update', 'ParentTable::update');
$routes->delete('parent/delete/(:num)', 'ParentTable::delete/$1');
$routes->post('parent/fetchRecords', 'ParentTable::fetchRecords');

// Logs routes for admin
$routes->get('/log', 'Logs::log');