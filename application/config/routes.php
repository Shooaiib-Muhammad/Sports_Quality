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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['DASH1'] = 'TabsC/TabDirection1';
$route['DASH2'] = 'TabsC/TabDirection2';
$route['DASH3'] = 'TabsC/TabDirection3';
$route['DASH4'] = 'TabsC/TabDirection4';
$route['DASH5'] = 'TabsC/TabDirection5';

$route['BShape'] = 'BallShaping_Slide/BallShaping';
$route['Core'] = 'CoreSlide/Core';
$route['SS'] = 'Cutting_Slide/SheetSizing';
$route['PC'] = 'Cutting_Slide/PanelCuttingPress';
$route['TCarcas'] = 'Carcas_Slide/TMCarcas';
$route['LCarcas'] = 'Carcas_Slide/LFBCarcas';
$route['TMS1'] = 'Packing_Slide/TM_Packing';
$route['TMS2'] = 'Packing_Slide/LFB_Packing';
$route['ambs4'] = 'Cutting_Slide/HF_Cutting';
$route['TMS5'] = 'Amb_Forming_Slide/Amb_Forming';
$route['TMS6'] = 'Packing_Slide/LFB_Packing';
$route['TMS3'] = 'Ball_Forming/BallForming';
$route['TMS4'] = 'Ball_Forming/TmAssebmbling1';
$route['newcore'] = 'CoreSlide/newcore';