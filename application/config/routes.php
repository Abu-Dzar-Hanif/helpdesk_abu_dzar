<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//route user
$route['user/tiket_done'] = 'user/tiket/tiket_done';
$route['user/tiket_onprocess'] = 'user/tiket/tiket_op';
$route['user/detail_tiket/(:any)'] = 'user/tiket/detail_tiket/$1';
$route['user/tiket_waiting'] = 'user/tiket/tiket_waiting';
$route['user/input_tiket'] = 'user/tiket/store';
$route['user/create_tiket'] = 'user/tiket/create';
$route['user'] = 'user/dashboard';
//route admin
$route['admin'] = 'admin/dashboard';
$route['admin/divisi'] = 'admin/divisi';
$route['admin/add_divisi'] = 'admin/divisi/create';
$route['admin/update_divisi/(:any)'] = 'admin/divisi/update/$1';
$route['admin/delete_divisi/(:any)'] = 'admin/divisi/delete/$1';
$route['admin/tiket'] = 'admin/tiket';
$route['admin/detail_tiket/(:any)'] = 'admin/tiket/detail_tiket/$1';
$route['admin/update_tiket/(:any)'] = 'admin/tiket/edit_tiket/$1';
$route['admin/laporan'] = 'admin/laporan';
$route['admin/laporan_tiket'] = 'admin/laporan/laporan';
$route['admin/export_excel'] = 'admin/laporan/export_excel';
//route awal
$route['default_controller'] = 'Halaman';
$route['register'] = 'halaman/register';
$route['login'] = 'halaman/login';
$route['proses_login'] = 'halaman/proses_login';
$route['logout'] = 'halaman/logout';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
