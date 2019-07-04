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
$route['default_controller'] = 'Front_End/Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*
| -------------------------------------------------------------------------
| SET ROUTE FRONT END
| -------------------------------------------------------------------------
*/

$route['home'] = 'Front_End/Home';
$route['about'] = 'Front_End/About';
$route['services'] = 'Front_End/Services';
$route['clients'] = 'Front_End/Clients';
$route['blogs'] = 'Front_End/Blogs';
$route['teams'] = 'Front_End/Teams';
$route['contact'] = 'Front_End/Contact';


/*
| -------------------------------------------------------------------------
| SET ROUTE BACK END
| -------------------------------------------------------------------------
*/

// Authentication
$route['backoffice'] = 'Back_End/Auth/Authentication';
$route['backoffice/login'] = 'Back_End/Auth/Authentication';
$route['backoffice/login_process'] = 'Back_End/Auth/Authentication/login_process';
$route['backoffice/logout'] = 'Back_End/Auth/Authentication/logout';

// Dashboard
$route['backoffice/dashboard'] = 'Back_End/Dashboard';


    /*
    | -------------------------------------------------------------------------
    | CONTENT
    | -------------------------------------------------------------------------
    */

    // Branner
    $route['backoffice/content/branner'] = 'Back_End/branner';

    // About
    $route['backoffice/content/about'] = 'Back_End/about';

    // Contact
    $route['backoffice/content/contact'] = 'Back_End/contact';


    /*
    | -------------------------------------------------------------------------
    | MANAGE
    | -------------------------------------------------------------------------
    */

    // Services
    $route['backoffice/manage-item/services'] = 'Back_End/services';
    $route['backoffice/manage-item/services/store'] = 'Back_End/services/store';
    $route['backoffice/manage-item/services/edit/(:any)'] = "Back_End/services/edit/$1";
    $route['backoffice/manage-item/services/update/(:any)'] = "Back_End/services/update/$1";
    $route['backoffice/manage-item/services/destroy/(:any)'] = "Back_End/services/destroy/$1";

    // Services Row 2
    $route['backoffice/manage-item/services2'] = 'Back_End/services2';
    $route['backoffice/manage-item/services2/store'] = 'Back_End/services2/store';
    $route['backoffice/manage-item/services2/edit/(:any)'] = "Back_End/services2/edit/$1";
    $route['backoffice/manage-item/services2/update/(:any)'] = "Back_End/services2/update/$1";
    $route['backoffice/manage-item/services2/destroy/(:any)'] = "Back_End/services2/destroy/$1";

    // Clients
    $route['backoffice/manage-item/clients'] = 'Back_End/clients';
    $route['backoffice/manage-item/clients/store'] = 'Back_End/clients/store';
    $route['backoffice/manage-item/clients/edit/(:any)'] = "Back_End/clients/edit/$1";
    $route['backoffice/manage-item/clients/update/(:any)'] = "Back_End/clients/update/$1";
    $route['backoffice/manage-item/clients/destroy/(:any)'] = "Back_End/clients/destroy/$1";

    // Blogs
    $route['backoffice/manage-item/blogs'] = 'Back_End/blogs';
    $route['backoffice/manage-item/blogs/store'] = 'Back_End/blogs/store';
    $route['backoffice/manage-item/blogs/edit/(:any)'] = "Back_End/blogs/edit/$1";
    $route['backoffice/manage-item/blogs/update/(:any)'] = "Back_End/blogs/update/$1";
    $route['backoffice/manage-item/blogs/destroy/(:any)'] = "Back_End/blogs/destroy/$1";

    // Teams
    $route['backoffice/manage-item/teams'] = 'Back_End/teams';
    $route['backoffice/manage-item/teams/store'] = 'Back_End/teams/store';
    $route['backoffice/manage-item/teams/edit/(:any)'] = "Back_End/teams/edit/$1";
    $route['backoffice/manage-item/teams/update/(:any)'] = "Back_End/teams/update/$1";
    $route['backoffice/manage-item/teams/destroy/(:any)'] = "Back_End/teams/destroy/$1";

    // Settings
    $route['backoffice/settings'] = 'Back_End/settings';
