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

/*FUNGSIONAL PEGAWAI (STAFF PD) */

//CRUD PANITIA
$route['api/pegawai/panitia'] = 'api/Pegawai/PanitiaControllerGet/index';
$route['api/pegawai/find/panitia/(:any)'] = 'api/Pegawai/PanitiaControllerFind/fiPanitia/$1';
$route['api/pegawai/insert/panitia'] = 'api/Pegawai/PanitiaControllerAdd/addPanitia';
$route['api/pegawai/update/panitia/(:any)'] = 'api/Pegawai/PanitiaControllerUpdate/updatePanitia/$1';
$route['api/pegawai/delete/panitia/(:any)'] = 'api/Pegawai/PanitiaControllerDel/deletePanitia/$1';
//CRUD SK
// $route['api/pegawai/sk'] = 'api/Pegawai/SkControllerGet/index';
// $route['api/pegawai/find/sk/(:any)'] = 'api/Pegawai/SkControllerFind/fiSk/$1';
// $route['api/pegawai/insert/sk'] = 'api/Pegawai/SkControllerAdd/addSk';
// $route['api/pegawai/update/sk/(:any)'] = 'api/Pegawai/SkControllerUpdate/updateSk/$1';
// $route['api/pegawai/delete/sk/(:any)'] = 'api/Pegawai/SkControllerDel/deleteSk/$1';



/* FUNGSIONAL PANITIA */

//CRUD PESERTA
$route['api/panitia/peserta'] = 'api/Panitia/PesertaControllerGet/index';
$route['api/panitia/find/peserta/(:any)'] = 'api/Panitia/PesertaControllerFind/fiPeserta/$1';
// $route['api/panitia/insert/peserta'] = 'api/Panitia/PesertaControllerAdd';
// $route['api/panitia/update/peserta/(:any)'] = 'api/Panitia/PesertaControllerUpdate/updatePeserta/$1';
// $route['api/panitia/delete/peserta/(:any)'] = 'api/Panitia/PesertaControllerDel/deletePeserta/$1';

//CRUD ASISTEN
$route['api/panitia/asisten'] = 'api/Panitia/AsistenControllerGet/index';
$route['api/panitia/find/asisten/(:any)'] = 'api/Panitia/AsistenControllerFind/fiAsisten/$1';
$route['api/panitia/insert/asisten'] = 'api/Panitia/AsistenControllerAdd/addAsisten';
$route['api/panitia/update/asisten/(:any)'] = 'api/Panitia/AsistenControllerUpdate/updateAsisten/$1';
$route['api/panitia/delete/asisten/(:any)'] = 'api/Panitia/AsistenControllerDel/deleteAsisten/$1';

//CRUD ABSEN PESERTA


/* FUNGSIONAL PENGAJAR */

//CRUD DATA PRIBADI

//CRUD NILAI PESERTA

/* FUNGSIONAL ADMIN PD */

//CRUD DIKLAT
$route['api/adminpd/diklat'] = 'api/AdminPD/DiklatControllerGet/index';
$route['api/adminpd/find/diklat/(:any)'] = 'api/AdminPD/DiklatControllerFind/fiDiklat/$1';
// $route['api/adminpd/insert/diklat'] = 'api/AdminPD/DiklatControllerAdd/AddDiklat';
// $route['api/adminpd/update/diklat/(:any)'] = 'api/AdminPD/DiklatControllerUpdate/updateDiklat/$1';
// $route['api/adminpd/delete/diklat/(:any)'] = 'api/Panitia/DiklatControllerDel/deleteDiklat/$1';

//CRUD PENGAJAR


//CRUD JADWAL



/* FUNGSIONAL PESERTA */


/* SUPER ADMIN */
//CRUD PEGAWAI
$route['api/superadmin/pegawai'] = 'api/SuperAdmin/PegawaiControllerGet/index';
$route['api/superadmin/find/pegawai/(:any)'] = 'api/SuperAdmin/PegawaiControllerFind/fiPegawai/$1';
// $route['api/superadmin/insert/pegawai'] = 'api/SuperAdmin/PegawaiControllerAdd/AddPegawai';
// $route['api/superadmin/update/pegawai/(:any)'] = 'api/SuperAdmin/PegawaiControllerUpdate/updatePegawai/$1';
$route['api/superadmin/delete/pegawai/(:any)'] = 'api/SuperAdmin/PegawaiControllerDel/deletePegawai/$1';