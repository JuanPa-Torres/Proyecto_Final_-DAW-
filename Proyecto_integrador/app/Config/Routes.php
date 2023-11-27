<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

//----------------------Tabla Usuario -----------------------------------------------------------------------------------------------

$routes->get('/usuario', 'Usuario::mostrar');
$routes->get('/usuario/mostrar', 'Usuario::mostrar');
//----------
$routes->get('/usuario/agregar', 'Usuario::agregar');
$routes->post('/usuario/agregar', 'Usuario::agregar');
//----------
$routes->get('/usuario/editar/(:num)', 'Usuario::editar/$1');
$routes->get('/usuario/delete/(:num)', 'Usuario::delete/$1');

$routes->post('/usuario/insert', 'Usuario::insert');
$routes->post('/usuario/update', 'Usuario::update');

$routes->get('/usuario/buscar', 'Usuario::buscar');




//----------------------Tabla Distribuidor -----------------------------------------------------------------------------------------------

$routes->get('/distribuidor', 'Distribuidor::mostrar');
$routes->get('/distribuidor/mostrar', 'Distribuidor::mostrar');
//----------
$routes->get('/distribuidor/agregar', 'Distribuidor::agregar');
$routes->post('/distribuidor/agregar', 'Distribuidor::agregar');
//----------
$routes->get('/distribuidor/editar/(:num)', 'Distribuidor::editar/$1');
$routes->post('/distribuidor/editar/(:num)', 'Distribuidor::editar/$1');
$routes->get('/distribuidor/delete/(:num)', 'Distribuidor::delete/$1');

$routes->post('/distribuidor/insert', 'Distribuidor::insert');
$routes->post('/distribuidor/update', 'Distribuidor::update');

$routes->get('/distribuidor/buscar', 'Distribuidor::buscar');



//----------------------Tabla Marca -----------------------------------------------------------------------------------------------

$routes->get('/marca', 'Marca::mostrar');
$routes->get('/marca/mostrar', 'Marca::mostrar');
//----------
$routes->get('/marca/agregar', 'Marca::agregar');
$routes->post('/marca/agregar', 'Marca::agregar');
//----------
$routes->get('/marca/editar/(:num)', 'Marca::editar/$1');
$routes->post('/marca/editar/(:num)', 'Marca::editar/$1');
$routes->get('/marca/delete/(:num)', 'Marca::delete/$1');

$routes->post('/marca/insert', 'Marca::insert');
$routes->post('/marca/update', 'Marca::update');

$routes->get('/marca/buscar', 'Marca::buscar');
/*
/*
$routes->get('/alumno/mostrar/(:int)/(:int)', 'Alumno::mostrar/$1/$2');
$routes->get('/alumno/subirimagen', 'Alumno::subirImagen');
$routes->post('/alumno/upload', 'Alumno::upload');

$routes->get('/carrera/mostrar', 'Carrera::mostrar');

$routes->get('/alumno/editar/(:any)', 'Alumno::editar/$1');

$routes->post('/alumno/insert', 'Alumno::insert');
$routes->post('/alumno/update/(:any)', 'Alumno::update/$1');

$routes->get('/css/*',"");
*/


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
