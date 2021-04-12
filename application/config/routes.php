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
$route['default_controller'] = 'home/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['abris/creer'] = 'abris/creer';
$route['abris/(:any)'] = 'abris/parId/$1';
$route['abris'] = 'abris/tous';

$route['guides/creer'] = 'guides/creer';
$route['guides/supprimer/(:any)'] = 'guides/supprimer/$1';
$route['guides/modifier/(:any)'] = 'guides/modifier/$1';
$route['guides'] = 'guides/tous';

$route['sommets/creer'] = 'sommets/creer';
$route['sommets/supprimer/(:any)'] = 'sommets/supprimer/$1';
$route['sommets/modifier/(:any)'] = 'sommets/modifier/$1';
$route['sommets'] = 'sommets/tous';
// $route['sommets/(:any)'] = 'sommets/parId/$1';

$route['vallees/creer'] = 'vallees/creer';
$route['vallees/supprimer/(:any)'] = 'vallees/supprimer/$1';
$route['vallees/modifier/(:any)'] = 'vallees/modifier/$1';
$route['vallees'] = 'vallees/tous';
// $route['vallees/(:any)'] = 'vallees/parId/$1';

$route['ascensions/creer'] = 'ascensions/creer';
$route['ascensions/(:any)'] = 'ascensions/parId/$1';
$route['ascensions'] = 'ascensions/tous';

$route['randonnees'] = 'randonnees/tous';
$route['randonnees/(:any)'] = 'randonnees/parId/$1';
