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
$routes->get('/administrador', 'Home::Administrador');
$routes->get('/cliente', 'Home::Cliente');


//----------------------Tabla Usuario -----------------------------------------------------------------------------------------------

$routes->get('/administrador/usuario', 'Usuario::mostrar');
//----------
$routes->get('/administrador/usuario/agregar', 'Usuario::agregar');
$routes->post('/administrador/usuario/agregar', 'Usuario::agregar');
//----------
$routes->get('/administrador/usuario/editar/(:num)', 'Usuario::editar/$1');
$routes->get('/administrador/usuario/delete/(:num)', 'Usuario::delete/$1');

$routes->post('/administrador/usuario/insert', 'Usuario::insert');
$routes->post('/administrador/usuario/update', 'Usuario::update');

$routes->get('/administrador/usuario/buscar', 'Usuario::buscar');




//----------------------Tabla Distribuidor -----------------------------------------------------------------------------------------------

$routes->get('/administrador/distribuidor', 'Distribuidor::mostrar');
//----------
$routes->get('/administrador/distribuidor/agregar', 'Distribuidor::agregar');
$routes->post('/administrador/distribuidor/agregar', 'Distribuidor::agregar');
//----------
$routes->get('/administrador/distribuidor/editar/(:num)', 'Distribuidor::editar/$1');
$routes->post('/administrador/distribuidor/editar/(:num)', 'Distribuidor::editar/$1');
$routes->get('/administrador/distribuidor/delete/(:num)', 'Distribuidor::delete/$1');

$routes->post('/administrador/distribuidor/insert', 'Distribuidor::insert');
$routes->post('/administrador/distribuidor/update', 'Distribuidor::update');

$routes->get('/administrador/distribuidor/buscar', 'Distribuidor::buscar');



//----------------------Tabla Marca -----------------------------------------------------------------------------------------------

$routes->get('/administrador/marca', 'Marca::mostrar');
//----------
$routes->get('/administrador/marca/agregar', 'Marca::agregar');
$routes->post('/administrador/marca/agregar', 'Marca::agregar');
//----------
$routes->get('/administrador/marca/editar/(:num)', 'Marca::editar/$1');
$routes->post('/administrador/marca/editar/(:num)', 'Marca::editar/$1');
$routes->get('/administrador/marca/delete/(:num)', 'Marca::delete/$1');

$routes->post('/administrador/marca/insert', 'Marca::insert');
$routes->post('/administrador/marca/update', 'Marca::update');

$routes->get('/administrador/marca/buscar', 'Marca::buscar');


//----------------------Tabla Modelo -----------------------------------------------------------------------------------------------
$routes->get('/administrador/modelo', 'Modelo::mostrar');




//----------------------Tabla Componentes -----------------------------------------------------------------------------------------------
$routes->get('/administrador/componentes', 'Componentes::mostrar');




//----------------------Tabla Catacterísticas -----------------------------------------------------------------------------------------------
$routes->get('/administrador/caracteristicas', 'Caracteristicas::mostrar');



//----------------------Tabla Bicicletas -----------------------------------------------------------------------------------------------
$routes->get('/administrador/bicicletas', 'Bicicleta::mostrar');








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
