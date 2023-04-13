<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Routes for Auth
$route['login'] = 'auth';
$route['login-check'] = 'auth/loginCheck';
$route['logout'] = 'auth/logout';

//Routes for Master Data
$route['dashboard'] = 'admin/Dashboard';
$route['data-pendaftaran'] = 'admin/DataPendaftaran';
$route['data-pendaftaran/terima/(:any)'] = 'admin/DataPendaftaran/accept/$1';
$route['data-pendaftaran/tolak/(:any)'] = 'admin/DataPendaftaran/reject/$1';
$route['data-pendaftaran/hapus'] = 'admin/DataPendaftaran/delete';
$route['siswa'] = 'admin/DataSiswa';
$route['kelas'] = 'admin/Kelas';
$route['jurusan'] = 'admin/Jurusan';
$route['jurusan'] = 'admin/Jurusan';
$route['my-profile'] = 'admin/Profile';
$route['my-profile/pass-change'] = 'admin/Profile/passChange';
$route['settings'] = 'admin/Settings';
$route['soal'] = 'admin/Settings/newSoal';
$route['soal/delete/(:any)'] = 'admin/Settings/deleteSoal/$1';

//Routes for Preferences
$route['users'] = 'admin/Users';

$route['siswa/pendaftaran'] = 'student/Pendaftaran';
$route['siswa/send-pendaftaran'] = 'student/Pendaftaran/sendPendaftaran';
$route['siswa/status'] = 'student/Pendaftaran/status';
$route['siswa/status-check'] = 'student/Pendaftaran/statusCheck';
$route['siswa/ujian'] = 'student/Pendaftaran/ujian';
$route['siswa/send-ujian'] = 'student/Pendaftaran/sendUjian';

//Send Email
$route['send-email'] = 'SendEmail';
