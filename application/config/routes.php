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

//CRUD PANITIA (OKE)
$route['api/pegawai/panitia']['GET']                            = 'api/Pegawai/PanitiaControllerGet/index';
$route['api/pegawai/find/panitia/(:any)']['GET']                = 'api/Pegawai/PanitiaControllerFind/fiPanitia/$1';
$route['api/pegawai/insert/panitia']['POST']                    = 'api/Pegawai/PanitiaControllerAdd/addPanitia';
$route['api/pegawai/update/panitia/(:any)']['PUT']              = 'api/Pegawai/PanitiaControllerUpdate/updatePanitia/$1';
$route['api/pegawai/delete/panitia/(:any)']['DELETE']           = 'api/Pegawai/PanitiaControllerDel/deletePanitia/$1';


// //CRUD SK (belum Ok)
// $route['api/pegawai/sk']['GET']                                 = 'api/Pegawai/SkControllerGet/index';
// $route['api/pegawai/find/sk/(:any)']['GET']                     = 'api/Pegawai/SkControllerFind/fiSk/$1';
// $route['api/pegawai/insert/sk']['POST']                         = 'api/Pegawai/SkControllerAdd/addSk';                  //masih belum berfungsi
// $route['api/pegawai/update/sk/(:any)']['PUT']                   = 'api/Pegawai/SkControllerUpdate/updateSk/$1'; //masih belum berfungsi
// $route['api/pegawai/delete/sk/(:any)']['DELETE']                = 'api/Pegawai/SkControllerDel/deleteSk/$1';     //masih belum berfungsi


/* FUNGSIONAL PANITIA */

//CRUD PESERTA (OKE)
$route['api/panitia/peserta']['GET']                            = 'api/Panitia/PesertaControllerGet/index';
$route['api/panitia/find/peserta/(:any)']['GET']                = 'api/Panitia/PesertaControllerFind/fiPeserta/$1';
$route['api/panitia/insert/peserta']['POST']                    = 'api/Panitia/PesertaControllerAdd/addPeserta';
$route['api/panitia/update/peserta/(:any)']['PUT']              = 'api/Panitia/PesertaControllerUpdate/updatePeserta/$1';
$route['api/panitia/delete/peserta/(:any)']['DELETE']           = 'api/Panitia/PesertaControllerDel/deletePeserta/$1';


//CRUD ASISTEN (OKE)
$route['api/panitia/asisten']['GET']                            = 'api/Panitia/AsistenControllerGet/index';
$route['api/panitia/find/asisten/(:any)']['GET']                = 'api/Panitia/AsistenControllerFind/fiAsisten/$1';
$route['api/panitia/insert/asisten']['POST']                    = 'api/Panitia/AsistenControllerAdd/AddAsisten';
$route['api/panitia/update/asisten/(:any)']['PUT']              = 'api/Panitia/AsistenControllerUpdate/updateAsisten/$1';
$route['api/panitia/delete/asisten/(:any)']['DELETE']           = 'api/Panitia/AsistenControllerDel/deleteAsisten/$1';

//CRUD ABSEN PESERTA
// $route['api/panitia/absenpeserta']['GET']                    = 'api/Panitia/AbsenPesertaControllerGet/index';
// $route['api/panitia/find/absenpeserta/(:any)']['GET']        = 'api/Panitia/AbsenPesertaControllerFind/fiAsenta/$1';
// $route['api/panitia/insert/absenpeserta']['POST']            = 'api/Panitia/AbsenPesertaControllerAdd/AddAsenta';
// $route['api/panitia/update/absenpeserta/(:any)']['PUT']      = 'api/Panitia/AbsenPesertaControllerUpdate/updateAsenta/$1';
// $route['api/panitia/delete/absenpeserta/(:any)']['DELETE']   = 'api/Panitia/AbsenPesertaControllerDel/deleteAsenta/$1';


/* FUNGSIONAL PENGAJAR */

//CRUD DATA PRIBADI
// MASIH BELUM DIBUAT

//CRUD NILAI PESERTA
// $route['api/pengajar/nilai_peserta']['GET']                  = 'api/Pengajar/NilaiPesertaControllerGet/index';
// $route['api/pengajar/find/nilai_peserta/(:any)']['GET']      = 'api/Pengajar/NilaiPesertaControllerFind/fiNilaiPeserta/$1';
// $route['api/pengajar/insert/nilai_peserta']['POST']          = 'api/Pengajar/NilaiPesertaControllerAdd/AddNilaiPeserta';
// $route['api/pengajar/update/nilai_peserta/(:any)']['PUT']    = 'api/Pengajar/NilaiPesertaControllerUpdate/UpdateNilaiPeserta/$1';
// $route['api/pengajar/delete/nilai_peserta/(:any)']['DELETE'] = 'api/Pengajar/NilaiPesertaControllerDel/deleteNilaiPeserta/$1';


/* FUNGSIONAL ADMIN PD */

//CRUD DIKLAT (OKE)
$route['api/adminpd/diklat']['GET']                             = 'api/AdminPD/DiklatControllerGet/index';
$route['api/adminpd/find/diklat/(:any)']['GET']                 = 'api/AdminPD/DiklatControllerFind/fiDiklat/$1';
$route['api/adminpd/insert/diklat']['POST']                     = 'api/AdminPD/DiklatControllerAdd/AddDiklat';
$route['api/adminpd/update/diklat/(:any)']['PUT']               = 'api/AdminPD/DiklatControllerUpdate/updateDiklat/$1';
$route['api/adminpd/delete/diklat/(:any)']['DELETE']            = 'api/AdminPd/DiklatControllerDel/deleteDiklat/$1';

//CRUD PENGAJAR (OKE)
$route['api/adminpd/pengajar']['GET']                           = 'api/AdminPD/PengajarControllerGet/index';
$route['api/adminpd/find/pengajar/(:any)']['GET']               = 'api/AdminPD/PengajarControllerFind/fiPengajar/$1';
$route['api/adminpd/insert/pengajar']['POST']                   = 'api/AdminPD/PengajarControllerAdd/AddPengajar';
$route['api/adminpd/update/pengajar/(:any)']['PUT']             = 'api/AdminPD/PengajarControllerUpdate/updatePengajar/$1';
$route['api/adminpd/delete/pengajar/(:any)']['DELETE']          = 'api/AdminPD/PengajarControllerDel/deletePengajar/$1';

//CRUD JADWAL (OKE)
$route['api/adminpd/jadwal']['GET']                             = 'api/AdminPD/JadwalControllerGet/index';
$route['api/adminpd/find/jadwal/(:any)']['GET']                 = 'api/AdminPD/JadwalControllerFind/fiJadwal/$1';
$route['api/adminpd/insert/jadwal']['POST']                     = 'api/AdminPD/JadwalControllerAdd/AddJadwal/$1';
$route['api/adminpd/update/jadwal/(:any)']['PUT']               = 'api/AdminPD/JadwalControllerUpdate/updateJadwal/$1';
$route['api/adminpd/delete/jadwal/(:any)']['DELETE']            = 'api/AdminPD/JadwalControllerDel/deleteJadwal/$1';


/* FUNGSIONAL PESERTA */
// masih belum dibuat (CRUD data diri)
// $route['api/superadmin/pegawai']['GET']                         = 'api/SuperAdmin/PegawaiControllerGet/index';
// $route['api/superadmin/find/pegawai/(:any)']['GET']             = 'api/SuperAdmin/PegawaiControllerFind/fiPegawai/$1';
// $route['api/superadmin/insert/pegawai']['POST']                 = 'api/SuperAdmin/PegawaiControllerAdd/AddPegawai';
// $route['api/superadmin/update/pegawai/(:any)']['PUT']           = 'api/SuperAdmin/PegawaiControllerUpdate/updatePegawai/$1';
// $route['api/superadmin/delete/pegawai/(:any)']['DELETE']        = 'api/SuperAdmin/PegawaiControllerDel/deletePegawai/$1';

/* SUPER ADMIN */
//CRUD PEGAWAI (OKE)
$route['api/superadmin/pegawai']['GET']                         = 'api/SuperAdmin/PegawaiControllerGet/index';
$route['api/superadmin/find/pegawai/(:any)']['GET']             = 'api/SuperAdmin/PegawaiControllerFind/fiPegawai/$1';
$route['api/superadmin/insert/pegawai']['POST']                 = 'api/SuperAdmin/PegawaiControllerAdd/AddPegawai';
$route['api/superadmin/update/pegawai/(:any)']['PUT']           = 'api/SuperAdmin/PegawaiControllerUpdate/updatePegawai/$1';
$route['api/superadmin/delete/pegawai/(:any)']['DELETE']        = 'api/SuperAdmin/PegawaiControllerDel/deletePegawai/$1';