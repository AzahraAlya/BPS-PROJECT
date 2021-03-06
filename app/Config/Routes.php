<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
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

$routes->get('/', 'C_dashboard::index');
// $routes->get('/pencacah', 'C_dashboard::pencacah');
$routes->get('/pencacah/detail/(:segment)', 'C_dashboard::detail/$1');
$routes->get('/pencacah/edit/(:segment)', 'C_dashboard::edit/$1');
$routes->post('/pencacah/update/(:segment)', 'C_dashboard::update/$1');
$routes->get('/pencacah/home', 'C_dashboard::home');
$routes->post('/pencacah/dataMitra', 'C_dashboard::homeData');
$routes->post('/pencacah/homeData/(:segment)', 'C_dashboard::homeData/$1');
// $routes->get('/pencacah/tambah', 'C_dashboard::tambah');
// $routes->post('/pencacah/store', 'C_dashboard::store');




$routes->get('/pengawas', 'C_Pengawas::pengawas');
$routes->get('/pengawas/nilai/(:segment)', 'C_Pengawas::nilai/$1');
$routes->post('/pengawas/store-nilai', 'C_Pengawas::store_nilai');
$routes->get('/pengawas/penilaian', 'C_Pengawas::penilaian');
$routes->post('/pengawas/selanjutnyaa', 'C_Pengawas::selanjutnya');
$routes->get('/pengawas/savePenilaian', 'C_Pengawas::savePenilaian');

$routes->get('/admin/print', 'C_Admin::index');
$routes->get('/admin/excel', 'C_Admin::excel');
$routes->get('/admin/penilaian', 'C_Admin::penilaian');
$routes->get('/admin/tambah-kegiatan', 'C_Admin::kegiatan');
$routes->post('/admin/store-kegiatan', 'C_Admin::store_kegiatan');
$routes->get('/admin/mitra-lengkap', 'C_Admin::lengkap');
// $routes->get('/admin/data-penilaian', 'C_Admin::dataPenilaian');

$routes->get('/admin/tambah-mitra', 'C_Mitra::tambah');
$routes->post('/admin/store', 'C_Mitra::store');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
