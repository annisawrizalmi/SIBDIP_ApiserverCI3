<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
| example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
| https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
| $route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
| $route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
| $route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples: my-controller/index -> my_controller/index
|   my-controller/my-method -> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;

/*
| -------------------------------------------------------------------------
| Sample REST API Routes
| -------------------------------------------------------------------------
*/
//$route['api/example/users/(:num)'] = 'api/example/users/id/$1'; // Example 4
//$route['api/example/users/(:num)(\.)([a-zA-Z0-9_-]+)(.*)'] = 'api/example/users/id/$1/format/$3$4'; // Example 8

/*FUNGSIONAL KARYAWAN (STAFF PD) */

//CRUD PANITIA
$route['api/karyawan/panitia'] = 'api/Karyawan/PanitiaControllerGet/index';
$route['api/karyawan/find/(:any)'] = 'api/Karyawan/PanitiaControllerFind/fiPanitia/$1';
$route['api/karyawan/insert'] = 'api/Karyawan/PanitiaControllerAdd/addPanitia';
$route['api/karyawan/update/(:any)'] = 'api/Karyawan/PanitiaControllerUpdate/updatePanitia/$1';
$route['api/karyawan/delete/(:any)'] = 'api/Karyawan/PanitiaControllerDel/deletePanitia/$1';
//CRUD SK


/* FUNGSIONAL PANITIA */

//CRUD DATA PESERTA
$route['api/panitia/peserta'] = 'api/Panitia/PesertaControllerGet/index';
// $route['api/panitia/find/(:any)'] = 'api/Panitia//$1';
// $route['api/panitia/insert'] = 'api/Panitia/';
// $route['api/panitia/update/(:any)'] = 'api/Panitia//$1';
// $route['api/panitia/delete/(:any)'] = 'api/Panitia//$1';

//CRUD ASISTEN


//CRUD ABSEN


//CRUD KEHADIRAN PESERTA


/* FUNGSIONAL PENGAJAR */

//CRUD DATA PRIBADI

//CRUD NILAI PESERTA

/* FUNGSIONAL ADMIN PD */

//CRUD DIKLAT
$route['api/adminpd/diklat'] = 'api/AdminPD/DiklatControllerGet/index';
$route['api/adminpd/find/(:any)'] = 'api/AdminPD/DiklatControllerFind/fiDiklat/$1';
$route['api/adminpd/insert'] = 'api/AdminPD/DiklatControllerAdd/AddDiklat';
$route['api/adminpd/update/(:any)'] = 'api/AdminPD/DiklatControllerUpdate/updateDiklat/$1';
$route['api/adminpd/delete/(:any)'] = 'api/Panitia/DiklatControllerDel/deleteDiklat/$1';

//CRUD PENGAJAR


//CRUD JADWAL



/* FUNGSIONAL PESERTA */

//CRUD DATA PRIBADI


//CRUD KARYAWAN