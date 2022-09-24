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
$route['api/pegawai/panitia'] = 'api/Pegawai/PanitiaControllerGet/index';
$route['api/pegawai/find/panitia/(:any)'] = 'api/Pegawai/PanitiaControllerFind/fiPanitia/$1';
$route['api/pegawai/insert/panitia'] = 'api/Pegawai/PanitiaControllerAdd/addPanitia';
$route['api/pegawai/update/panitia/(:any)'] = 'api/Pegawai/PanitiaControllerUpdate/updatePanitia/$1';
$route['api/pegawai/delete/panitia/(:any)'] = 'api/Pegawai/PanitiaControllerDel/deletePanitia/$1';


//CRUD SK
$route['api/pegawai/sk'] = 'api/Pegawai/SkControllerGet/index';
$route['api/pegawai/find/sk/(:any)'] = 'api/Pegawai/SkControllerFind/fiSk/$1';
$route['api/pegawai/insert/sk'] = 'api/Pegawai/SkControllerAdd/addSk';                  //masih belum berfungsi
$route['api/pegawai/update/sk/(:any)'] = 'api/Pegawai/SkControllerUpdate/updateSk/$1'; //masih belum berfungsi
$route['api/pegawai/delete/sk/(:any)'] = 'api/Pegawai/SkControllerDel/deleteSk/$1';     //masih belum berfungsi



/* FUNGSIONAL PANITIA */

//CRUD PESERTA (OKE)
$route['api/panitia/peserta'] = 'api/Panitia/PesertaControllerGet/index';
$route['api/panitia/find/peserta/(:any)'] = 'api/Panitia/PesertaControllerFind/fiPeserta/$1';
$route['api/panitia/insert/peserta'] = 'api/Panitia/PesertaControllerAdd/addPeserta';
$route['api/panitia/update/peserta/(:any)'] = 'api/Panitia/PesertaControllerUpdate/updatePeserta/$1';
$route['api/panitia/delete/peserta/(:any)'] = 'api/Panitia/PesertaControllerDel/deletePeserta/$1';


//CRUD ASISTEN (OKE)
$route['api/panitia/asisten'] = 'api/Panitia/AsistenControllerGet/index';
$route['api/panitia/find/asisten/(:any)'] = 'api/Panitia/AsistenControllerFind/fiAsisten/$1';
$route['api/panitia/insert/asisten'] = 'api/Panitia/AsistenControllerAdd/AddAsisten';
$route['api/panitia/update/asisten/(:any)'] = 'api/Panitia/AsistenControllerUpdate/updateAsisten/$1';
$route['api/panitia/delete/asisten/(:any)'] = 'api/Panitia/AsistenControllerDel/deleteAsisten/$1';

//CRUD ABSEN PESERTA
// $route['api/panitia/absenpeserta'] = 'api/Panitia/AbsenPesertaControllerGet/index';
// $route['api/panitia/find/absenpeserta/(:any)'] = 'api/Panitia/AbsenPesertaControllerFind/fiAsenta/$1';
// $route['api/panitia/insert/absenpeserta'] = 'api/Panitia/AbsenPesertaControllerAdd/AddAsenta';
// $route['api/panitia/update/absenpeserta/(:any)'] = 'api/Panitia/AbsenPesertaControllerUpdate/updateAsenta/$1';
// $route['api/panitia/delete/absenpeserta/(:any)'] = 'api/Panitia/AbsenPesertaControllerDel/deleteAsenta/$1';


/* FUNGSIONAL PENGAJAR */

//CRUD DATA PRIBADI
// MASIH BELUM DIBUAT

//CRUD NILAI PESERTA
// $route['api/pengajar/nilai_peserta'] = 'api/Pengajar/NilaiPesertaControllerGet/index';
// $route['api/pengajar/find/nilai_peserta/(:any)'] = 'api/Pengajar/NilaiPesertaControllerFind/fiNilaiPeserta/$1';
// $route['api/pengajar/insert/nilai_peserta'] = 'api/Pengajar/NilaiPesertaControllerAdd/AddNilaiPeserta';
// $route['api/pengajar/update/nilai_peserta/(:any)'] = 'api/Pengajar/NilaiPesertaControllerUpdate/UpdateNilaiPeserta/$1';
// $route['api/pengajar/delete/nilai_peserta/(:any)'] = 'api/Pengajar/NilaiPesertaControllerDel/deleteNilaiPeserta/$1';



/* FUNGSIONAL ADMIN PD */

//CRUD DIKLAT (OKE)
$route['api/adminpd/diklat'] = 'api/AdminPD/DiklatControllerGet/index';
$route['api/adminpd/find/diklat/(:any)'] = 'api/AdminPD/DiklatControllerFind/fiDiklat/$1';
$route['api/adminpd/insert/diklat'] = 'api/AdminPD/DiklatControllerAdd/AddDiklat';
$route['api/adminpd/update/diklat/(:any)'] = 'api/AdminPD/DiklatControllerUpdate/updateDiklat/$1';
$route['api/adminpd/delete/diklat/(:any)'] = 'api/AdminPd/DiklatControllerDel/deleteDiklat/$1';

//CRUD PENGAJAR (OKE)
$route['api/adminpd/pengajar'] = 'api/AdminPD/PengajarControllerGet/index';
$route['api/adminpd/find/pengajar/(:any)'] = 'api/AdminPD/PengajarControllerFind/fiPengajar/$1';
$route['api/adminpd/insert/pengajar'] = 'api/AdminPD/PengajarControllerAdd/AddPengajar';
$route['api/adminpd/update/pengajar/(:any)'] = 'api/AdminPD/PengajarControllerUpdate/updatePengajar/$1';
$route['api/adminpd/delete/pengajar/(:any)'] = 'api/AdminPD/PengajarControllerDel/deletePengajar/$1';

//CRUD JADWAL (OKE)
$route['api/adminpd/jadwal'] = 'api/AdminPD/JadwalControllerGet/index';
$route['api/adminpd/find/jadwal/(:any)'] = 'api/AdminPD/JadwalControllerFind/fiJadwal/$1';
$route['api/adminpd/insert/jadwal'] = 'api/AdminPD/JadwalControllerAdd/AddJadwal/$1';
$route['api/adminpd/update/jadwal/(:any)'] = 'api/AdminPD/JadwalControllerUpdate/updateJadwal/$1';
$route['api/adminpd/delete/jadwal/(:any)'] = 'api/AdminPD/JadwalControllerDel/deleteJadwal/$1';



/* FUNGSIONAL PESERTA */
// masih belum dibuat (CRUD data diri)

/* SUPER ADMIN */
//CRUD PEGAWAI (OKE)
$route['api/superadmin/pegawai'] = 'api/SuperAdmin/PegawaiControllerGet/index';
$route['api/superadmin/find/pegawai/(:any)'] = 'api/SuperAdmin/PegawaiControllerFind/fiPegawai/$1';
$route['api/superadmin/insert/pegawai'] = 'api/SuperAdmin/PegawaiControllerAdd/AddPegawai';
$route['api/superadmin/update/pegawai/(:any)'] = 'api/SuperAdmin/PegawaiControllerUpdate/updatePegawai/$1';
$route['api/superadmin/delete/pegawai/(:any)'] = 'api/SuperAdmin/PegawaiControllerDel/deletePegawai/$1';