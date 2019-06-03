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

    // Clients
    $route['backoffice/manage-item/clients'] = 'Back_End/clients';

    // Blogs
    $route['backoffice/manage-item/blogs'] = 'Back_End/blogs';

    // Teams
    $route['backoffice/manage-item/teams'] = 'Back_End/teams';

    // Settings
    $route['backoffice/settings'] = 'Back_End/settings';
