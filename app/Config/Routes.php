<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->resource('futsallist');
$routes->resource('basketlist');
$routes->resource('badminlist');
$routes->resource('gymlist');

$routes->get('/', 'Pages::index');
$routes->get('/news', 'News::index');
$routes->get('/tambah', 'News::add');
$routes->get('/news', 'News::index');
$routes->get('/news/edit/(:segment)', 'News::edit/$1');
$routes->get('/gallery/edit/(:segment)', 'Gallery::edit/$1');
$routes->delete('/news/(:num)', 'News::delete/$1');
$routes->delete('/gallery/(:num)', 'Gallery::delete/$1');
$routes->delete('/fb/(:num)', 'Feedback::delete/$1');
$routes->get('/add_news', 'News::add');
$routes->get('/add_gallery', 'Gallery::add');
$routes->get('/gallery', 'Gallery::index');
$routes->get('/user', 'User::index');
$routes->add('/feedback', 'Pages::index');
$routes->add('/fb', 'Feedback::index');
$routes->get('/add_futsal', 'Futsal::add');
$routes->add('/futsal', 'Futsal::index');
$routes->get('/futsal/edit/(:segment)', 'Futsal::edit/$1');
$routes->delete('/futsal/(:num)', 'Futsal::delete/$1');
$routes->get('/add_basket', 'Basket::add');
$routes->add('/basket', 'Basket::index');
$routes->get('/basket/edit/(:segment)', 'Basket::edit/$1');
$routes->delete('/basket/(:num)', 'Basket::delete/$1');
$routes->get('/add_badmin', 'Badminton::add');
$routes->add('/badmin', 'Badminton::index');
$routes->get('/badmin/edit/(:segment)', 'Badminton::edit/$1');
$routes->delete('/badmin/(:num)', 'Badminton::delete/$1');
$routes->get('/add_gym', 'Gym::add');
$routes->add('/gym', 'Gym::index');
$routes->get('/gym/edit/(:segment)', 'Gym::edit/$1');
$routes->delete('/gym/(:num)', 'Gym::delete/$1');
$routes->get('/detail/(:any)', 'Pages::detail/$1');
$routes->get('/gallery/(:any)', 'News::index/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
