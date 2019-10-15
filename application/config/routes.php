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
		| Home
		| -------------------------------------------------------------------------
		*/

		// Content
		$route['backoffice/page/home/content/(:any)'] = 'back_end/Home/edit_content/$1';
		$route['backoffice/page/home/content/update/(:any)'] = 'back_end/Home/update_content/$1';

		/*
		| -------------------------------------------------------------------------
		| Abouts
		| -------------------------------------------------------------------------
		*/

		// Content
		$route['backoffice/page/abouts/content/(:any)'] = 'back_end/About/edit_content/$1';
		$route['backoffice/page/abouts/content/update/(:any)'] = 'back_end/About/update_content/$1';

		/*
		| -------------------------------------------------------------------------
		| Services
		| -------------------------------------------------------------------------
		*/

		// Content
		$route['backoffice/page/services/content/(:any)'] = 'back_end/Service/edit_content/$1';
		$route['backoffice/page/services/content/update/(:any)'] = 'back_end/Service/update_content/$1';

		/*
		| -------------------------------------------------------------------------
		| Clients
		| -------------------------------------------------------------------------
		*/

		// Content
		$route['backoffice/page/clients/content/(:any)'] = 'back_end/Client/edit_content/$1';
		$route['backoffice/page/clients/content/update/(:any)'] = 'back_end/Client/update_content/$1';

		// Category
		$route['backoffice/page/clients/list-category-clients'] = 'back_end/Client/list_category_client';
		$route['backoffice/page/clients/list-category-clients/create'] = 'back_end/Client/category_client_create';
		$route['backoffice/page/clients/list-category-clients/store'] = 'back_end/Client/category_client_store';
		$route['backoffice/page/clients/list-category-clients/edit/(:any)'] = "back_end/Client/category_client_edit/$1";
		$route['backoffice/page/clients/list-category-clients/update/(:any)'] = "back_end/Client/category_client_update/$1";
		$route['backoffice/page/clients/list-category-clients/destroy/(:any)'] = "back_end/Client/category_client_destroy/$1";

		// Client
		$route['backoffice/page/clients/list-clients/(:any)'] = 'back_end/Client/list_client/$1';
		$route['backoffice/page/clients/list-clients/create/(:any)'] = 'back_end/Client/client_create/$1';
		$route['backoffice/page/clients/list-clients/store/(:any)'] = 'back_end/Client/client_store/$1';
		$route['backoffice/page/clients/list-clients/edit/(:any)/(:any)'] = "back_end/Client/client_edit/$1/$2";
		$route['backoffice/page/clients/list-clients/update/(:any)/(:any)'] = "back_end/Client/client_update/$1/$2";
		$route['backoffice/page/clients/list-clients/destroy/(:any)'] = "back_end/Client/client_destroy/$1";

		/*
		| -------------------------------------------------------------------------
		| Blogs
		| -------------------------------------------------------------------------
		*/

		// Category
		$route['backoffice/page/blogs/list-category-blogs'] = 'back_end/Blog/list_category_blog';
		$route['backoffice/page/blogs/list-category-blogs/create'] = 'back_end/Blog/category_blog_create';
		$route['backoffice/page/blogs/list-category-blogs/store'] = 'back_end/Blog/category_blog_store';
		$route['backoffice/page/blogs/list-category-blogs/edit/(:any)'] = "back_end/Blog/category_blog_edit/$1";
		$route['backoffice/page/blogs/list-category-blogs/update/(:any)'] = "back_end/Blog/category_blog_update/$1";
		$route['backoffice/page/blogs/list-category-blogs/destroy/(:any)'] = "back_end/Blog/category_blog_destroy/$1";

		// Blog
		$route['backoffice/page/blogs/list-blogs/(:any)'] = 'back_end/Blog/list_blog/$1';
		$route['backoffice/page/blogs/list-blogs/create/(:any)'] = 'back_end/Blog/blog_create/$1';
		$route['backoffice/page/blogs/list-blogs/store/(:any)'] = 'back_end/Blog/blog_store/$1';
		$route['backoffice/page/blogs/list-blogs/edit/(:any)/(:any)'] = "back_end/Blog/blog_edit/$1/$2";
		$route['backoffice/page/blogs/list-blogs/update/(:any)/(:any)'] = "back_end/Blog/blog_update/$1/$2";
		$route['backoffice/page/blogs/list-blogs/destroy/(:any)'] = "back_end/Blog/blog_destroy/$1";

		/*
		| -------------------------------------------------------------------------
		| Teams
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
        | Contacts
        | -------------------------------------------------------------------------
        */

        // Content
        $route['backoffice/page/contact/content/(:any)'] = 'back_end/Contact/edit_content/$1';
        $route['backoffice/page/contact/content/update/(:any)'] = 'back_end/Contact/update_content/$1';

	/*
	| -------------------------------------------------------------------------
	| Setting
	| -------------------------------------------------------------------------
	*/

    // Setting
    $route['backoffice/settings'] = 'back_end/settings';
