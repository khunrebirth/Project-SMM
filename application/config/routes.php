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
$route['(\w{2})/services/(:any)'] = 'front_end/Services/show/$1/$2';
$route['(\w{2})/บริการ/(:any)'] = 'front_end/Services/show/$1/$2';

// Clients
$route['(\w{2})/clients'] = 'front_end/Clients';
$route['(\w{2})/ลูกค้าของเรา'] = 'front_end/Clients';

// Clients
$route['(\w{2})/portfolio'] = 'front_end/Portfolio';
$route['(\w{2})/ผลงานของเรา'] = 'front_end/Portfolio';

// Blogs
$route['(\w{2})/blogs'] = 'front_end/Blogs';
$route['(\w{2})/บทความ'] = 'front_end/Blogs';
$route['(\w{2})/blogs/(:any)'] = 'front_end/Blogs/category_show/$1/$2';
$route['(\w{2})/บทความ/(:any)'] = 'front_end/Blogs/category_show/$1/$2';
$route['(\w{2})/blogs/(:any)/(:any)'] = 'front_end/Blogs/blog_show/$1/$2/$3';
$route['(\w{2})/บทความ/(:any)/(:any)'] = 'front_end/Blogs/blog_show/$1/$2/$3';
$route['(\w{2})/tags/(:any)'] = 'front_end/Blogs/tag_show/$1/$2/$3';
$route['(\w{2})/แท็ก/(:any)'] = 'front_end/Blogs/tag_show/$1/$2/$3';

// Teams
$route['(\w{2})/teams'] = 'front_end/Teams';
$route['(\w{2})/ทีมงาน'] = 'front_end/Teams';

// Join Us
$route['(\w{2})/join-us'] = 'front_end/Join_us';
$route['(\w{2})/ร่วมงานกับเรา'] = 'front_end/Join_us';
$route['(\w{2})/join-us/(:any)'] = 'front_end/Join_us/detail/$1/$2';
$route['(\w{2})/ร่วมงานกับเรา/(:any)'] = 'front_end/Join_us/detail/$1/$2';

// Contact
$route['(\w{2})/contact'] = 'front_end/Contact';
$route['(\w{2})/ติดต่อเรา'] = 'front_end/Contact';
$route['(\w{2})/contact/send'] = 'front_end/Contact/send';
$route['(\w{2})/career-contact/send'] = 'front_end/Contact/career_contact';

// Thank You
$route['(\w{2})/thanks'] = 'front_end/Thank_you';
$route['(\w{2})/ขอบคุณ'] = 'front_end/Thank_you';

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

		// Clients
		$route['(\w{2})/backoffice/page/home/list-top-clients'] = 'back_end/Home/list_client';
		$route['(\w{2})/backoffice/page/home/list-top-clients/create'] = 'back_end/Home/client_create';
		$route['(\w{2})/backoffice/page/home/list-top-clients/store'] = 'back_end/Home/client_store';
		$route['(\w{2})/backoffice/page/home/list-top-clients/edit/(:any)'] = "back_end/Home/client_edit/$1/$2";
		$route['(\w{2})/backoffice/page/home/list-top-clients/update/(:any)'] = "back_end/Home/client_update/$1/$2";
		$route['(\w{2})/backoffice/page/home/list-top-clients/destroy/(:any)'] = "back_end/Home/client_destroy/$1/$2";
		$route['(\w{2})/backoffice/page/home/list-top-clients/ajax/get/clients/sort/show'] = 'back_end/Home/ajax_get_client_and_sort_show';
		$route['(\w{2})/backoffice/page/home/list-top-clients/ajax/get/clients/sort/update'] = 'back_end/Home/ajax_get_client_and_sort_update';

		// Portfolios
		$route['(\w{2})/backoffice/page/home/list-top-portfolios'] = 'back_end/Home/list_portfolio/$1/$2';
		$route['(\w{2})/backoffice/page/home/list-top-portfolios/create'] = 'back_end/Home/portfolio_create';
		$route['(\w{2})/backoffice/page/home/list-top-portfolios/store'] = 'back_end/Home/portfolio_store';
		$route['(\w{2})/backoffice/page/home/list-top-portfolios/edit/(:any)'] = "back_end/Home/portfolio_edit/$1/$2";
		$route['(\w{2})/backoffice/page/home/list-top-portfolios/update/(:any)'] = "back_end/Home/portfolio_update/$1/$2";
		$route['(\w{2})/backoffice/page/home/list-top-portfolios/destroy/(:any)'] = "back_end/Home/portfolio_destroy/$1/$2";
		$route['(\w{2})/backoffice/page/home/list-top-portfolios/ajax/get/clients/sort/show'] = 'back_end/Home/ajax_get_portfolio_and_sort_show';
		$route['(\w{2})/backoffice/page/home/list-top-portfolios/ajax/get/clients/sort/update'] = 'back_end/Home/ajax_get_portfolio_and_sort_update';

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

		// Services
		$route['(\w{2})/backoffice/page/services/list-services'] = 'back_end/Service/list_services';
		$route['(\w{2})/backoffice/page/services/list-services/create'] = 'back_end/Service/service_create';
		$route['(\w{2})/backoffice/page/services/list-services/store'] = 'back_end/Service/service_store';
		$route['(\w{2})/backoffice/page/services/list-services/edit/(:any)'] = "back_end/Service/service_edit/$1/$2";
		$route['(\w{2})/backoffice/page/services/list-services/update/(:any)'] = "back_end/Service/service_update/$1/$2";
		$route['(\w{2})/backoffice/page/services/list-services/destroy/(:any)'] = "back_end/Service/service_destroy/$1/$2";
		$route['(\w{2})/backoffice/page/services/list-services/ajax/get/services/sort/show'] = 'back_end/Service/ajax_get_service_and_sort_show';
		$route['(\w{2})/backoffice/page/services/list-services/ajax/get/services/sort/update'] = 'back_end/Service/ajax_get_service_and_sort_update';

		// Portfolios
		$route['(\w{2})/backoffice/page/services/list-service-ports/(:any)'] = 'back_end/Service/list_service_portfolios/$1/$2';
		$route['(\w{2})/backoffice/page/services/list-service-ports/create/(:any)'] = 'back_end/Service/service_portfolio_create/$1/$2';
		$route['(\w{2})/backoffice/page/services/list-service-ports/store/(:any)'] = 'back_end/Service/service_portfolio_store/$1/$2';
		$route['(\w{2})/backoffice/page/services/list-service-ports/edit/(:any)/(:any)'] = "back_end/Service/service_portfolio_edit/$1/$2/$3";
		$route['(\w{2})/backoffice/page/services/list-service-ports/update/(:any)/(:any)'] = "back_end/Service/service_portfolio_update/$1/$2/$3";
		$route['(\w{2})/backoffice/page/services/list-service-ports/destroy/(:any)'] = "back_end/Service/service_portfolio_destroy/$1/$2";
		$route['(\w{2})/backoffice/page/services/list-service-ports/ajax/get/portfolios/sort/show/(:any)'] = 'back_end/Service/ajax_get_service_portfolio_and_sort_show/$1/$2';
		$route['(\w{2})/backoffice/page/services/list-service-ports/ajax/get/portfolios/sort/update'] = 'back_end/Service/ajax_get_service_portfolio_and_sort_update';

		// Clients
		$route['(\w{2})/backoffice/page/services/list-service-clients/(:any)'] = 'back_end/Service/list_service_clients/$1/$2';
		$route['(\w{2})/backoffice/page/services/list-service-clients/create/(:any)'] = 'back_end/Service/service_client_create/$1/$2';
		$route['(\w{2})/backoffice/page/services/list-service-clients/store/(:any)'] = 'back_end/Service/service_client_store/$1/$2';
		$route['(\w{2})/backoffice/page/services/list-service-clients/edit/(:any)/(:any)'] = "back_end/Service/service_client_edit/$1/$2/$3";
		$route['(\w{2})/backoffice/page/services/list-service-clients/update/(:any)/(:any)'] = "back_end/Service/service_client_update/$1/$2/$3";
		$route['(\w{2})/backoffice/page/services/list-service-clients/destroy/(:any)'] = "back_end/Service/service_client_destroy/$1/$2";
		$route['(\w{2})/backoffice/page/services/list-service-clients/ajax/get/clients/sort/show/(:any)'] = 'back_end/Service/ajax_get_service_client_and_sort_show/$1/$2';
		$route['(\w{2})/backoffice/page/services/list-service-clients/ajax/get/clients/sort/update'] = 'back_end/Service/ajax_get_service_client_and_sort_update';

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
		$route['(\w{2})/backoffice/page/clients/list-category-clients/ajax/get/category-clients/sort/show'] = 'back_end/Client/ajax_get_category_client_and_sort_show';
		$route['(\w{2})/backoffice/page/clients/list-category-clients/ajax/get/category-clients/sort/update'] = 'back_end/Client/ajax_get_category_client_and_sort_update';

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
		| Portfolio
		| -------------------------------------------------------------------------
		*/

		// Content
		$route['(\w{2})/backoffice/page/portfolios/content/(:any)'] = 'back_end/Portfolio/edit_content/$1/$2';
		$route['(\w{2})/backoffice/page/portfolios/content/update/(:any)'] = 'back_end/Portfolio/update_content/$1/$2';

		// Category
		$route['(\w{2})/backoffice/page/portfolios/list-category-portfolios'] = 'back_end/Portfolio/list_category_portfolio';
		$route['(\w{2})/backoffice/page/portfolios/list-category-portfolios/create'] = 'back_end/Portfolio/category_portfolio_create';
		$route['(\w{2})/backoffice/page/portfolios/list-category-portfolios/store'] = 'back_end/Portfolio/category_portfolio_store';
		$route['(\w{2})/backoffice/page/portfolios/list-category-portfolios/edit/(:any)'] = "back_end/Portfolio/category_portfolio_edit/$1/$2";
		$route['(\w{2})/backoffice/page/portfolios/list-category-portfolios/update/(:any)'] = "back_end/Portfolio/category_portfolio_update/$1/$2";
		$route['(\w{2})/backoffice/page/portfolios/list-category-portfolios/destroy/(:any)'] = "back_end/Portfolio/category_portfolio_destroy/$1/$2";
		$route['(\w{2})/backoffice/page/portfolios/list-category-portfolios/ajax/get/category-clients/sort/show'] = 'back_end/Portfolio/ajax_get_category_portfolio_and_sort_show';
		$route['(\w{2})/backoffice/page/portfolios/list-category-portfolios/ajax/get/category-clients/sort/update'] = 'back_end/Portfolio/ajax_get_category_portfolio_and_sort_update';

		// Portfolio
		$route['(\w{2})/backoffice/page/portfolios/list-portfolios/(:any)'] = 'back_end/Portfolio/list_portfolio/$1/$2';
		$route['(\w{2})/backoffice/page/portfolios/list-portfolios/create/(:any)'] = 'back_end/Portfolio/portfolio_create/$1/$2';
		$route['(\w{2})/backoffice/page/portfolios/list-portfolios/store/(:any)'] = 'back_end/Portfolio/portfolio_store/$1/$2';
		$route['(\w{2})/backoffice/page/portfolios/list-portfolios/edit/(:any)/(:any)'] = "back_end/Portfolio/portfolio_edit/$1/$2/$3";
		$route['(\w{2})/backoffice/page/portfolios/list-portfolios/update/(:any)/(:any)'] = "back_end/Portfolio/portfolio_update/$1/$2/$3";
		$route['(\w{2})/backoffice/page/portfolios/list-portfolios/destroy/(:any)'] = "back_end/Portfolio/portfolio_destroy/$1/$2";
		$route['(\w{2})/backoffice/page/portfolios/list-portfolios/ajax/get/clients/sort/show/(:any)'] = 'back_end/Portfolio/ajax_get_portfolio_and_sort_show/$1/$2';
		$route['(\w{2})/backoffice/page/portfolios/list-portfolios/ajax/get/clients/sort/update'] = 'back_end/Portfolio/ajax_get_portfolio_and_sort_update';

		/*
		| -------------------------------------------------------------------------
		| Blogs
		| -------------------------------------------------------------------------
		*/

		// Tags
		$route['(\w{2})/backoffice/page/blogs/list-tags'] = 'back_end/Tag/list_tag';
		$route['(\w{2})/backoffice/page/blogs/list-tags/create'] = 'back_end/Tag/create';
		$route['(\w{2})/backoffice/page/blogs/list-tags/store'] = 'back_end/Tag/store';
		$route['(\w{2})/backoffice/page/blogs/list-tags/edit/(:any)'] = "back_end/Tag/edit/$1/$2";
		$route['(\w{2})/backoffice/page/blogs/list-tags/update/(:any)'] = "back_end/Tag/update/$1/$2";
		$route['(\w{2})/backoffice/page/blogs/list-tags/destroy/(:any)'] = "back_end/Tag/destroy/$1/$2";
		$route['(\w{2})/backoffice/page/blogs/list-tags/ajax/get/tags/sort/show'] = 'back_end/Tag/ajax_get_tag_and_sort_show';
		$route['(\w{2})/backoffice/page/blogs/list-tags/ajax/get/tags/sort/update'] = 'back_end/Tag/ajax_get_tag_and_sort_update';

		// Category
		$route['(\w{2})/backoffice/page/blogs/list-category-blogs'] = 'back_end/Blog/list_category_blog';
		$route['(\w{2})/backoffice/page/blogs/list-category-blogs/create'] = 'back_end/Blog/category_blog_create';
		$route['(\w{2})/backoffice/page/blogs/list-category-blogs/store'] = 'back_end/Blog/category_blog_store';
		$route['(\w{2})/backoffice/page/blogs/list-category-blogs/edit/(:any)'] = "back_end/Blog/category_blog_edit/$1/$2";
		$route['(\w{2})/backoffice/page/blogs/list-category-blogs/update/(:any)'] = "back_end/Blog/category_blog_update/$1/$2";
		$route['(\w{2})/backoffice/page/blogs/list-category-blogs/destroy/(:any)'] = "back_end/Blog/category_blog_destroy/$1/$2";
		$route['(\w{2})/backoffice/page/blogs/list-category-blogs/ajax/get/category-blogs/sort/show'] = 'back_end/Blog/ajax_get_category_blog_and_sort_show';
		$route['(\w{2})/backoffice/page/blogs/list-category-blogs/ajax/get/category-blogs/sort/update'] = 'back_end/Blog/ajax_get_category_blog_and_sort_update';

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
		$route['(\w{2})/backoffice/page/teams/list-teams/ajax/get/teams/sort/show'] = 'back_end/Team/ajax_get_team_and_sort_show';
		$route['(\w{2})/backoffice/page/teams/list-teams/ajax/get/teams/sort/update'] = 'back_end/Team/ajax_get_team_and_sort_update';

		/*
		| -------------------------------------------------------------------------
		| Join Us
		| -------------------------------------------------------------------------
		*/

		// Content
		$route['(\w{2})/backoffice/page/join-us/content/(:any)'] = 'back_end/Join_us/edit_content/$1/$2';
		$route['(\w{2})/backoffice/page/join-us/content/update/(:any)'] = 'back_end/Join_us/update_content/$1/$2';

		// List Careers
		$route['(\w{2})/backoffice/page/join-us/list-careers'] = 'back_end/Join_us/list_careers';
		$route['(\w{2})/backoffice/page/join-us/list-careers/create'] = 'back_end/Join_us/career_create';
		$route['(\w{2})/backoffice/page/join-us/list-careers/store'] = 'back_end/Join_us/career_store';
		$route['(\w{2})/backoffice/page/join-us/list-careers/edit/(:any)'] = "back_end/Join_us/career_edit/$1/$2";
		$route['(\w{2})/backoffice/page/join-us/list-careers/update/(:any)'] = "back_end/Join_us/career_update/$1/$2";
		$route['(\w{2})/backoffice/page/join-us/list-careers/destroy/(:any)'] = "back_end/Join_us/career_destroy/$1/$2";
		$route['(\w{2})/backoffice/page/join-us/list-careers/ajax/get/careers/sort/show'] = 'back_end/Join_us/ajax_get_career_and_sort_show';
		$route['(\w{2})/backoffice/page/join-us/list-careers/ajax/get/careers/sort/update'] = 'back_end/Join_us/ajax_get_career_and_sort_update';

		// List Career Galleries
		$route['(\w{2})/backoffice/page/join-us/list-career-galleries/(:any)'] = 'back_end/Join_us/list_career_galleries/$1/$2';
		$route['(\w{2})/backoffice/page/join-us/list-career-galleries/create/(:any)'] = 'back_end/Join_us/career_gallery_create/$1/$2';
		$route['(\w{2})/backoffice/page/join-us/list-career-galleries/store/(:any)'] = 'back_end/Join_us/career_gallery_store/$1/$2';
		$route['(\w{2})/backoffice/page/join-us/list-career-galleries/edit/(:any)/(:any)'] = "back_end/Join_us/career_gallery_edit/$1/$2/$3";
		$route['(\w{2})/backoffice/page/join-us/list-career-galleries/update/(:any)/(:any)'] = "back_end/Join_us/career_gallery_update/$1/$2/$3";
		$route['(\w{2})/backoffice/page/join-us/list-career-galleries/destroy/(:any)'] = "back_end/Join_us/career_gallery_destroy/$1/$2";
		$route['(\w{2})/backoffice/page/join-us/list-career-galleries/ajax/get/career-galleries/sort/show/(:any)'] = 'back_end/Join_us/ajax_get_career_gallery_and_sort_show/$1/$2';
		$route['(\w{2})/backoffice/page/join-us/list-career-galleries/ajax/get/career-galleries/sort/update'] = 'back_end/Join_us/ajax_get_career_gallery_and_sort_update';

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

	// Banner
	$route['(\w{2})/backoffice/setting/banners'] = 'back_end/Banner';
	$route['(\w{2})/backoffice/setting/banners/edit/(:any)'] = "back_end/Banner/edit/$1/$2";
	$route['(\w{2})/backoffice/setting/banners/update/(:any)'] = "back_end/Banner/update/$1/$2";

	// Users
	$route['(\w{2})/backoffice/setting/users'] = 'back_end/User';
	$route['(\w{2})/backoffice/setting/users/edit/(:any)'] = "back_end/User/edit/$1/$2";
	$route['(\w{2})/backoffice/setting/users/update/(:any)'] = "back_end/User/update/$1/$2";

	/*
	| -------------------------------------------------------------------------
	| Profile
	| -------------------------------------------------------------------------
	*/

	$route['(\w{2})/backoffice/setting/profile'] = 'back_end/Profile';
	$route['(\w{2})/backoffice/setting/profile/edit/(:any)'] = 'back_end/Profile/edit/$1/$2';
	$route['(\w{2})/backoffice/setting/profile/update/(:any)'] = "back_end/Profile/update/$1/$2";

	/*
	| -------------------------------------------------------------------------
	| Helper
	| -------------------------------------------------------------------------
	*/

	$route['(\w{2})/backoffice/helper/change/status'] = 'back_end/Helper/changeStatus';
	$route['(\w{2})/backoffice/helper/change/ignore'] = 'back_end/Helper/changeIgnore';
