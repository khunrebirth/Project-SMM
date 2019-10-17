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

//route example: http://domain.tld/en/controller => http://domain.tld/controller
$route['(\w{2})'] = $route['default_controller'];

/*
| -------------------------------------------------------------------------
| SET ROUTE FRONT END
| -------------------------------------------------------------------------
*/

// Home
$route['(\w{2})/home'] = 'front_end/Home';
$route['(\w{2})/หน้าแรก'] = 'front_end/Home';

// About
$route['(\w{2})/about'] = 'front_end/About';
$route['(\w{2})/เกี่ยวกับเรา'] = 'front_end/About';

// Services
$route['(\w{2})/services'] = 'front_end/Services';
$route['(\w{2})/บริการ'] = 'front_end/Services';

// Clients
$route['(\w{2})/clients'] = 'front_end/Clients';
$route['(\w{2})/ลูกค้าของเรา'] = 'front_end/Clients';

// Blogs
$route['(\w{2})/blogs'] = 'front_end/Blogs';
$route['(\w{2})/บทความ'] = 'front_end/Blogs';
$route['(\w{2})/blogs/(:any)/(:any)'] = 'front_end/Blogs/category_show/$1/$2/$3';
$route['(\w{2})/บทความ/(:any)/(:any)'] = 'front_end/Blogs/category_show/$1/$2/$3';
$route['(\w{2})/blogs/(:any)/(:any)/(:any)'] = 'front_end/Blogs/blog_show/$1/$2/$3/$4';
$route['(\w{2})/บทความ/(:any)/(:any)/(:any)'] = 'front_end/Blogs/blog_show/$1/$2/$3/$4';

// Teams
$route['(\w{2})/teams'] = 'front_end/Teams';
$route['(\w{2})/ทีมงาน'] = 'front_end/Teams';

// Contact
$route['(\w{2})/contact'] = 'front_end/Contact';
$route['(\w{2})/ติดต่อเรา'] = 'front_end/Contact';
$route['(\w{2})/contact/send'] = 'front_end/Contact/send';

	/*
	| -------------------------------------------------------------------------
	| HELPS
	| -------------------------------------------------------------------------
	*/

	$route['th'] = 'langswitch/switchLanguage/th';
	$route['en'] = 'langswitch/switchLanguage/en';


/*
| -------------------------------------------------------------------------
| SET ROUTE BACK END
| -------------------------------------------------------------------------
*/

	/*
	| -------------------------------------------------------------------------
	| AUTHENTICATION
	| -------------------------------------------------------------------------
	*/

	$route['(\w{2})/backoffice'] = 'back_end/Auth/Authentication';
	$route['(\w{2})/backoffice/login'] = 'back_end/Auth/Authentication';
	$route['(\w{2})/backoffice/login_process'] = 'back_end/Auth/Authentication/login_process';
	$route['(\w{2})/backoffice/logout'] = 'back_end/Auth/Authentication/logout';

	/*
	| -------------------------------------------------------------------------
	| Dashboard
	| -------------------------------------------------------------------------
	*/

	$route['(\w{2})/backoffice/dashboard'] = 'back_end/Dashboard';

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
		$route['(\w{2})/backoffice/page/home/content/(:any)'] = 'back_end/Home/edit_content/$1/$2';
		$route['(\w{2})/backoffice/page/home/content/update/(:any)'] = 'back_end/Home/update_content/$1/$2';

		/*
		| -------------------------------------------------------------------------
		| Abouts
		| -------------------------------------------------------------------------
		*/

		// Content
		$route['(\w{2})/backoffice/page/abouts/content/(:any)'] = 'back_end/About/edit_content/$1/$2';
		$route['(\w{2})/backoffice/page/abouts/content/update/(:any)'] = 'back_end/About/update_content/$1/$2';

		/*
		| -------------------------------------------------------------------------
		| Services
		| -------------------------------------------------------------------------
		*/

		// Content
		$route['(\w{2})/backoffice/page/services/content/(:any)'] = 'back_end/Service/edit_content/$1/$2';
		$route['(\w{2})/backoffice/page/services/content/update/(:any)'] = 'back_end/Service/update_content/$1/$2';

		/*
		| -------------------------------------------------------------------------
		| Clients
		| -------------------------------------------------------------------------
		*/

		// Content
		$route['(\w{2})/backoffice/page/clients/content/(:any)'] = 'back_end/Client/edit_content/$1/$2';
		$route['(\w{2})/backoffice/page/clients/content/update/(:any)'] = 'back_end/Client/update_content/$1/$2';

		// Category
		$route['(\w{2})/backoffice/page/clients/list-category-clients'] = 'back_end/Client/list_category_client';
		$route['(\w{2})/backoffice/page/clients/list-category-clients/create'] = 'back_end/Client/category_client_create';
		$route['(\w{2})/backoffice/page/clients/list-category-clients/store'] = 'back_end/Client/category_client_store';
		$route['(\w{2})/backoffice/page/clients/list-category-clients/edit/(:any)'] = "back_end/Client/category_client_edit/$1/$2";
		$route['(\w{2})/backoffice/page/clients/list-category-clients/update/(:any)'] = "back_end/Client/category_client_update/$1/$2";
		$route['(\w{2})/backoffice/page/clients/list-category-clients/destroy/(:any)'] = "back_end/Client/category_client_destroy/$1/$2";

		// Client
		$route['(\w{2})/backoffice/page/clients/list-clients/(:any)'] = 'back_end/Client/list_client/$1/$2';
		$route['(\w{2})/backoffice/page/clients/list-clients/create/(:any)'] = 'back_end/Client/client_create/$1/$2';
		$route['(\w{2})/backoffice/page/clients/list-clients/store/(:any)'] = 'back_end/Client/client_store/$1/$2';
		$route['(\w{2})/backoffice/page/clients/list-clients/edit/(:any)/(:any)'] = "back_end/Client/client_edit/$1/$2/$3";
		$route['(\w{2})/backoffice/page/clients/list-clients/update/(:any)/(:any)'] = "back_end/Client/client_update/$1/$2/$3";
		$route['(\w{2})/backoffice/page/clients/list-clients/destroy/(:any)'] = "back_end/Client/client_destroy/$1/$2";
		$route['(\w{2})/backoffice/page/clients/list-clients/ajax/get/clients/sort/show/(:any)'] = 'back_end/Client/ajax_get_client_and_sort_show/$1/$2';
		$route['(\w{2})/backoffice/page/clients/list-clients/ajax/get/clients/sort/update'] = 'back_end/Client/ajax_get_client_and_sort_update';

		/*
		| -------------------------------------------------------------------------
		| Blogs
		| -------------------------------------------------------------------------
		*/

		// Category
		$route['(\w{2})/backoffice/page/blogs/list-category-blogs'] = 'back_end/Blog/list_category_blog';
		$route['(\w{2})/backoffice/page/blogs/list-category-blogs/create'] = 'back_end/Blog/category_blog_create';
		$route['(\w{2})/backoffice/page/blogs/list-category-blogs/store'] = 'back_end/Blog/category_blog_store';
		$route['(\w{2})/backoffice/page/blogs/list-category-blogs/edit/(:any)'] = "back_end/Blog/category_blog_edit/$1/$2";
		$route['(\w{2})/backoffice/page/blogs/list-category-blogs/update/(:any)'] = "back_end/Blog/category_blog_update/$1/$2";
		$route['(\w{2})/backoffice/page/blogs/list-category-blogs/destroy/(:any)'] = "back_end/Blog/category_blog_destroy/$1/$2";

		// Blog
		$route['(\w{2})/backoffice/page/blogs/list-blogs/(:any)'] = 'back_end/Blog/list_blog/$1/$2';
		$route['(\w{2})/backoffice/page/blogs/list-blogs/create/(:any)'] = 'back_end/Blog/blog_create/$1/$2';
		$route['(\w{2})/backoffice/page/blogs/list-blogs/store/(:any)'] = 'back_end/Blog/blog_store/$1/$2';
		$route['(\w{2})/backoffice/page/blogs/list-blogs/edit/(:any)/(:any)'] = "back_end/Blog/blog_edit/$1/$2/$3";
		$route['(\w{2})/backoffice/page/blogs/list-blogs/update/(:any)/(:any)'] = "back_end/Blog/blog_update/$1/$2/$3";
		$route['(\w{2})/backoffice/page/blogs/list-blogs/destroy/(:any)'] = "back_end/Blog/blog_destroy/$1/$2";

		/*
		| -------------------------------------------------------------------------
		| Teams
		| -------------------------------------------------------------------------
		*/

		// Content
		$route['(\w{2})/backoffice/page/teams/content/(:any)'] = 'back_end/Team/edit_content/$1/$2';
		$route['(\w{2})/backoffice/page/teams/content/update/(:any)'] = 'back_end/Team/update_content/$1/$2';

		// Lists
		$route['(\w{2})/backoffice/page/teams/list-teams'] = 'back_end/Team';
		$route['(\w{2})/backoffice/page/teams/list-teams/create'] = 'back_end/Team/create';
		$route['(\w{2})/backoffice/page/teams/list-teams/store'] = 'back_end/Team/store';
		$route['(\w{2})/backoffice/page/teams/list-teams/edit/(:any)'] = "back_end/Team/edit/$1/$2";
		$route['(\w{2})/backoffice/page/teams/list-teams/update/(:any)'] = "back_end/Team/update/$1/$2";
		$route['(\w{2})/backoffice/page/teams/list-teams/destroy/(:any)'] = "back_end/Team/destroy/$1/$2";

        /*
        | -------------------------------------------------------------------------
        | Contacts
        | -------------------------------------------------------------------------
        */

        // Content
        $route['(\w{2})/backoffice/page/contact/content/(:any)'] = 'back_end/Contact/edit_content/$1/$2';
        $route['(\w{2})/backoffice/page/contact/content/update/(:any)'] = 'back_end/Contact/update_content/$1/$2';

	/*
	| -------------------------------------------------------------------------
	| Setting
	| -------------------------------------------------------------------------
	*/

    // Setting
    $route['(\w{2})/backoffice/settings'] = 'back_end/settings';

	// Users
	$route['(\w{2})/backoffice/setting/users'] = 'back_end/User';
	$route['(\w{2})/backoffice/setting/users/create'] = 'back_end/User/create';
	$route['(\w{2})/backoffice/setting/users/store'] = 'back_end/User/store';
	$route['(\w{2})/backoffice/setting/users/edit/(:any)'] = "back_end/User/edit/$1/$2";
	$route['(\w{2})/backoffice/setting/users/update/(:any)'] = "back_end/User/update/$1/$2";
	$route['(\w{2})/backoffice/setting/users/destroy/(:any)'] = "back_end/User/destroy/$1/$2";

	/*
	| -------------------------------------------------------------------------
	| Profile
	| -------------------------------------------------------------------------
	*/

	$route['(\w{2})/backoffice/setting/profile'] = 'back_end/Profile';
	$route['(\w{2})/backoffice/setting/profile/edit/(:any)'] = 'back_end/Profile/edit/$1/$2';
	$route['(\w{2})/backoffice/setting/profile/update/(:any)'] = "back_end/Profile/update/$1/$2";
