<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['atvOne'] = 'Activities/One';
$route['atvTwo'] = 'Activities/Two';

$route['atvThree'] = 'Activities/Three';
$route['atvThree/create'] = 'Activities/Three/Create';
$route['atvThree/sendCreate'] = 'Activities/Three/SendCreate';
$route['atvThree/edit'] = 'Activities/Three/Edit';
$route['atvThree/sendEdit'] = 'Activities/Three/SendEdit';
$route['atvThree/delete'] = 'Activities/Three/Delete';
$route['atvThree/filter'] = 'Activities/Three/Filter';