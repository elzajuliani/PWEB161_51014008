<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//-----------------------------------------------------------latihan 6
$route['biodata'] = 'biodata_elza';
$route['ukmku'] = 'ukm_elza';
$route['ceritaku'] = 'cerita_elza';

//-----------------------------------------------------------Optional
$route['biografi1'] = 'presiden_soekarno';
$route['biografi2'] = 'presiden_soeharto';
$route['biografi3'] = 'presiden_habibie';
$route['biografi4'] = 'presiden_abdurrahmanwahid';
$route['biografi5'] = 'presiden_megawati';
$route['biografi6'] = 'presiden_sby';
$route['biografi7'] = 'presiden_jokowi';




$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
