<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override(function () {
    return view('error_404_saya');
});
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/member', 'Member::index', ['filter' => 'admin']);
$routes->get('/pesan', 'Pesan::index', ['filter' => 'admin']);
$routes->get('/galeri', 'Galeri::index', ['filter' => 'admin']);
$routes->get('/galeri/hapus/(:num)', 'Galeri::hapus/$1', ['filter' => 'admin']);
$routes->get('/galeri/edit/(:num)', 'EditGaleri::index/$1', ['filter' => 'admin']);
$routes->get('/editgaleri/simpan/(:num)', 'EditGaleri::simpan/$1', ['filter' => 'admin']);
$routes->get('/tambahgaleri', 'TambahGaleri::index', ['filter' => 'admin']);
$routes->get('/tambahgaleri/tambah', 'TambahGaleri::tambah', ['filter' => 'admin']);
$routes->get('/pesan/(:num)', 'Pesan::hapus/$1', ['filter' => 'admin']);
$routes->get('/logout', 'Member::logout');
$routes->get('/hapus/(:num)', 'Member::hapus/$1', ['filter' => 'admin']);
$routes->get('/edit/(:num)', 'Edit::index/$1', ['filter' => 'admin']);
$routes->get('/edit/simpan/(:num)', 'Edit::simpan/$1', ['filter' => 'admin']);
$routes->get('/register', 'Register::index', ['filter' => 'auth']);
$routes->get('/login', 'Login::index', ['filter' => 'auth']);

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
