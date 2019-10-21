<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller
{

	private $lang = 'th';

	public function __construct()
	{
		parent::__construct();

		/*
		| -------------------------------------------------------------------------
		| SET UTILITIES
		| -------------------------------------------------------------------------
		*/

		// Model
		$this->load->model('Home_page_model');
		$this->load->model('About_page_model');
		$this->load->model('Service_model');
		$this->load->model('Client_category_model');
		$this->load->model('Client_model');
		$this->load->model('Blog_category_model');
		$this->load->model('Blog_model');
		$this->load->model('Team_model');

		// Language
		$this->lang = $this->config->item('language_abbr');
	}

	public function index()
	{
		/*
		| -------------------------------------------------------------------------
		| HANDLE
		| -------------------------------------------------------------------------
		*/

		$home_id = 1;
		$page_content = $this->Home_page_model->get_home_page_by_id($home_id);

		/*
		| -------------------------------------------------------------------------
		| SET DATA
		| -------------------------------------------------------------------------
		*/

		// Language
		$data['lang'] = $this->lang;

		// Title Page
		$data['title'] = unserialize($page_content->meta_tag_title)[$this->lang];

		// Meta Tag
		$data['meta']['title'] = unserialize($page_content->meta_tag_title)[$this->lang];
		$data['meta']['description'] = unserialize($page_content->meta_tag_description)[$this->lang];
		$data['meta']['keyword'] = unserialize($page_content->meta_tag_keywords)[$this->lang];

		// OG & Twitter
		$data['og_twitter']['title'] = unserialize($page_content->meta_tag_title)[$this->lang];
		$data['og_twitter']['description'] = unserialize($page_content->meta_tag_description)[$this->lang];
		$data['og_twitter']['image'] = base_url('storage/uploads/images/home/'. unserialize($page_content->img_og_twitter)[$this->lang]);

		// Content
		$data['content'] = 'home';

		// Utilities
		$data['about'] = $this->About_page_model->get_about_page_by_id(1);
		$data['services'] = $this->Service_model->get_service_all();
		$data['client_categories'] = $this->Client_category_model->get_client_category_all();
		$data['clients'] = $this->filter_data_clients($this->Client_category_model->get_client_category_all());
		$data['blog_categories'] = $this->Blog_category_model->get_blog_category_all();
		$data['blogs'] = $this->Blog_model->get_last_blog(4);
		$data['teams'] = $this->Team_model->get_team_by_limit(4);

		/*
		| -------------------------------------------------------------------------
		| EXECUTE VIEWS
		| -------------------------------------------------------------------------
		*/

		$this->load->view('app', $data);
	}

	private function filter_data_clients($client_categories)
	{
		$data = [];

		foreach ($client_categories as $key_category => $category) {

			$clients = $this->Client_model->get_client_by_category_id($category->id);

			$data[$key_category]['category_id'] = $category->id;
			$data[$key_category]['category_name'] = unserialize($category->title)[$this->lang];
			$data[$key_category]['clients'] = [];

			if (count($clients) > 0) {
				foreach ($clients as $key_client => $client) {
					$data[$key_category]['clients'][$key_client]['img'] = unserialize($client->image)[$this->lang];
					$data[$key_category]['clients'][$key_client]['title'] = unserialize($client->title)[$this->lang];
				}
			}
		}

		return $data;
	}
}
