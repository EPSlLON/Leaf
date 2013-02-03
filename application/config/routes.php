<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

// basic pages
$route['about'] = "home/about";
$route['cron'] = "cron_task/update_gamertags"; 
$route['news'] = "news/index";
$route['news/create'] = "news/index/create";
$route['stats'] = "stats/home/index";
$route['compare'] = "stats/compare/index";

// variable pages
$route['gt/(:any)/recache'] = "stats/home/recache_gt/$1";
$route['gt/(:any)'] = "stats/home/gt/$1";
$route['news/(:num)'] = "news/index/index/$1";
$route['news/view/(:num)'] = "news/index/view/$1";

// other
$route['default_controller'] = "home";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */