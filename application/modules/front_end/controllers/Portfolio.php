<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends MX_Controller
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
		$this->load->model('Client_page_model');
		$this->load->model('Client_category_model');
		$this->load->model('Client_model');
		$this->load->model('Banner_model');

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

		$client_id = 1;
		$page_content = $this->Client_page_model->get_client_page_by_id($client_id);

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
		$data['og_twitter']['image'] = base_url('storage/uploads/images/clients/'. unserialize($page_content->img_og_twitter)[$this->lang]);

		// Content
		$data['content'] = 'portfolio';

		// Utilities
		$data['client_categories'] = $this->Client_category_model->get_client_category_all();
		$data['clients'] = $this->filter_data_clients($this->Client_category_model->get_client_category_all());
		$data['banner'] = $this->Banner_model->get_banner_active_by_id(2);

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

			if ($clients) {
				foreach ($clients as $key_client => $client) {
					$data[$key_category]['clients'][$key_client]['category_id'] = $client->category_id;
					$data[$key_category]['clients'][$key_client]['img'] = unserialize($client->image)[$this->lang];
					$data[$key_category]['clients'][$key_client]['title'] = unserialize($client->title)[$this->lang];
				}
			}
		}

		return $data;
	}
}
