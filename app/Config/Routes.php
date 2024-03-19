<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//$routes->get('/', 'Home::index');
$routes->get('/', 'LoginController::index');
$routes->get('/admin/dashboard', 'admin\dashboardController::index');

//kecamatan start
$routes->get('/admin/data_kecamatan', 'admin\master\KecamatanController::index');
$routes->get('/admin/data_kecamatan/tambah', 'admin\master\KecamatanController::tambah');
$routes->get('/admin/data_kecamatan/hapus/(:any)', 'admin\master\KecamatanController::hapus/$1');
$routes->get('/admin/data_kecamatan/edit/(:any)', 'admin\master\KecamatanController::edit/$1');
$routes->post('/admin/data_kecamatan/edit', 'admin\master\KecamatanController::edit_proses');
$routes->post('/admin/data_kecamatan/tambah', 'admin\master\KecamatanController::tambah_proses');
//kecamatan end

//penduduk start
$routes->get('/admin/data_penduduk', 'admin\master\PendudukController::index');
$routes->get('/admin/data_penduduk/tambah', 'admin\master\PendudukController::tambah');
$routes->get('/admin/data_penduduk/hapus/(:any)', 'admin\master\PendudukController::hapus/$1');
$routes->get('/admin/data_penduduk/edit/(:any)', 'admin\master\PendudukController::edit/$1');
$routes->post('/admin/data_penduduk/edit', 'admin\master\PendudukController::edit_proses');
$routes->post('/admin/data_penduduk/tambah', 'admin\master\PendudukController::tambah_proses');
//penduduk end


$routes->post('/proses_login', 'LoginController::proseslogin');
$routes->post('/proses_register', 'LoginController::proses_register');
$routes->get('/logout', 'LoginController::logout');
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}