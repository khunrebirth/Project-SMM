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
$route['default_controller'] = 'front_end/Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*
| -------------------------------------------------------------------------
| SET ROUTE FRONT END
| -------------------------------------------------------------------------
*/

$route['home'] = 'front_end/Home';
$route['about'] = 'front_end/About';
$route['services'] = 'front_end/Services';
$route['clients'] = 'front_end/Clients';
$route['blogs'] = 'front_end/Blogs';
$route['teams'] = 'front_end/Teams';

// contact
$route['contact'] = 'front_end/Contact';
$route['contact/send'] = 'front_end/Contact/send';


/*
| -------------------------------------------------------------------------
| SET ROUTE BACK END
| -------------------------------------------------------------------------
*/

// Authentication
$route['backoffice'] = 'back_end/Auth/Authentication';
$route['backoffice/login'] = 'back_end/Auth/Authentication';
$route['backoffice/login_process'] = 'back_end/Auth/Authentication/login_process';
$route['backoffice/logout'] = 'back_end/Auth/Authentication/logout';


	/*
	| -------------------------------------------------------------------------
	| Dashboard
	| -------------------------------------------------------------------------
	*/

	$route['backoffice/dashboard'] = 'back_end/Dashboard';

    /*
    | -------------------------------------------------------------------------
    | PAGE
    | -------------------------------------------------------------------------
    */

		/*
		| -------------------------------------------------------------------------
		| Team
		| -------------------------------------------------------------------------
		*/

		// Content
		$route['backoffice/page/teams/content/(:any)'] = 'back_end/Team/edit_content/$1';
		$route['backoffice/page/teams/content/update/(:any)'] = 'back_end/Team/update_content/$1';

		// Lists
		$route['backoffice/page/teams/list-teams'] = 'back_end/Team';
		$route['backoffice/page/teams/list-teams/create'] = 'back_end/Team/create';
		$route['backoffice/page/teams/list-teams/store'] = 'back_end/Team/store';
		$route['backoffice/page/teams/list-teams/edit/(:any)'] = "back_end/Team/edit/$1";
		$route['backoffice/page/teams/list-teams/update/(:any)'] = "back_end/Team/update/$1";
		$route['backoffice/page/teams/list-teams/destroy/(:any)'] = "back_end/Team/destroy/$1";


        /*
        | -------------------------------------------------------------------------
        | Team
        | -------------------------------------------------------------------------
        */

        // Content
        $route['backoffice/page/contact/content/(:any)'] = 'back_end/Contact/edit_contact/$1';
        $route['backoffice/page/contact/content/update/(:any)'] = 'back_end/Contact/update_contact/$1';

	/*
	| -------------------------------------------------------------------------
	| Setting
	| -------------------------------------------------------------------------
	*/

    // Setting
    $route['backoffice/settings'] = 'back_end/settings';
