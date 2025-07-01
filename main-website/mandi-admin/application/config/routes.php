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
$route['default_controller'] = 'DashboardController';

$route['login'] = 'AuthController/login';
$route['logout'] = 'AuthController/logout';

$route['api/(:any)/login'] = 'AuthController/api_login/$1';
$route['api/(:any)/register'] = 'AuthController/api_register/$1';

$route['api/v2/blog/new'] = 'posts/BlogsController/api_new_post';
$route['api/v2/episode/new'] = 'posts/EpisodesController/api_new_post';
$route['api/v2/report/new'] = 'posts/ReportsController/api_new_post';
$route['api/v2/faq/new'] = 'posts/FAQsController/api_new_post';


$route['settings'] ="app/SettingsController";
$route['settings/languages'] ="app/SettingsController/localization";

$route['blogs'] ="posts/BlogsController";
$route['blog/new-post'] ="posts/BlogsController/new_post";
$route['blog/post/(:any)'] ="posts/BlogsController/view_post/$1";
$route['blog/post/(:any)/edit'] ="posts/BlogsController/edit_post/$1";


$route['episodes'] ="posts/EpisodesController";
$route['episode/new-post'] ="posts/EpisodesController/new_post";
$route['episode/post/(:any)'] ="posts/EpisodesController/view_post/$1";
$route['episode/post/(:any)/edit'] ="posts/EpisodesController/edit_post/$1";

$route['reports'] ="posts/ReportsController";
$route['report/new-post'] ="posts/ReportsController/new_post";
$route['report/post/(:any)'] ="posts/ReportsController/view_post/$1";
$route['report/post/(:any)/edit'] ="posts/EpisodesController/edit_post/$1";

$route['faqs'] ="posts/FAQsController";

$route['events'] ="posts/EventsController";

$route['users'] ="app/UsersController";
$route['users/new-user'] ="app/UsersController/new_user";
$route['my-profile'] ="app/UsersController/my_profile";

$route['register'] = 'DashboardController/register';

$route[''] = 'DashboardController/index';
$route['menu'] = 'DashboardController/menu_master';
$route['menu/categories'] = 'DashboardController/categories_all';
$route['menu/category/(:any)/menu-items'] = 'DashboardController/menu_items/$1';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
