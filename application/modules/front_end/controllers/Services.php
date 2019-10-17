<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends MX_Controller
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
		$this->load->model('Service_page_model');

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

		$service_id = 1;
		$page_content = $this->Service_page_model->get_service_page_by_id($service_id);

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
		$data['og_twitter']['image'] = base_url('storage/uploads/images/abouts/'. unserialize($page_content->img_og_twitter)[$this->lang]);

		// Content
		$data['content'] = 'services';

		// Utilities

		/*
		| -------------------------------------------------------------------------
		| EXECUTE VIEWS
		| -------------------------------------------------------------------------
		*/

		$this->load->view('app', $data);
	}
}
