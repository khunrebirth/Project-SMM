<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends MX_Controller
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
		$this->load->model('Page_model');
		$this->load->model('Banner_model');
		$this->load->model('Client_category_model');
		$this->load->model('Client_model');

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

		$page_content = $this->Page_model->get_page_by_id(5);

		/*
		| -------------------------------------------------------------------------
		| SET DATA
		| -------------------------------------------------------------------------
		*/

		// Language
		$data['lang'] = $this->lang;

		// Title Page
		$data['title'] = unserialize($page_content->meta_tag_title)[$this->lang];
		$data['title_moblie'] = unserialize($page_content->meta_tag_moblie_title)[$this->lang];

		// Meta Tag
		$data['meta']['title'] = unserialize($page_content->meta_tag_title)[$this->lang];
		$data['meta']['description'] = unserialize($page_content->meta_tag_description)[$this->lang];
		$data['meta']['keyword'] = unserialize($page_content->meta_tag_keywords)[$this->lang];
		$data['meta']['title_moblie'] = unserialize($page_content->meta_tag_moblie_title)[$this->lang];
		$data['meta']['description_moblie'] = unserialize($page_content->meta_tag_moblie_description)[$this->lang];
		$data['meta']['keyword_moblie'] = unserialize($page_content->meta_tag_moblie_keywords)[$this->lang];

		// OG & Twitter
		$data['og_twitter']['title'] = unserialize($page_content->meta_tag_title)[$this->lang];
		$data['og_twitter']['description'] = unserialize($page_content->meta_tag_description)[$this->lang];
		$data['og_twitter']['image'] = base_url('storage/uploads/images/clients/'. unserialize($page_content->img_og_twitter)[$this->lang]);

		// Content
		$data['content'] = 'clients';

		// Utilities
		$data['client_categories'] = $this->Client_category_model->get_client_category_all();
		$data['clients'] = $this->Client_model->get_client_all();
		$data['banner'] = $this->Banner_model->get_banner_active_by_id(2);

		/*
		| -------------------------------------------------------------------------
		| EXECUTE VIEWS
		| -------------------------------------------------------------------------
		*/

		$this->load->view('app', $data);
	}
}
