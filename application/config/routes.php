<?php
defined('BASEPATH') OR exit('No direct script access allowed');



// Admin Routes
$route['route/add'] = 'Routes/create';
$route['route/all'] = 'Routes/index';
$route['route/delete'] = 'Routes/delete/$1';

$route['bus/add'] = 'Buses/create';
$route['bus/all'] = 'Buses/index';
$route['bus/delete'] = 'Buses/delete/$1';

$route['default_controller'] = 'Admin/home';
$route['(:any)'] = 'Admin/home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
