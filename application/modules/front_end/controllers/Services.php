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
		$this->load->model('Service_model');
		$this->load->model('Service_portfolio_model');
//		$this->load->model('Banner_model');

		// Language
		$this->lang = $this->config->item('language_abbr');
	}

	public function index() {}

	public function show($lang, $service_slug, $service_id)
	{
		/*
		| -------------------------------------------------------------------------
		| HANDLE
		| -------------------------------------------------------------------------
		*/

		$service_id = hashids_decrypt($service_id);
		$page_content = $this->Service_model->get_service_by_id($service_id);

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
		$data['og_twitter']['image'] = base_url('storage/uploads/images/services/'. unserialize($page_content->img_og_twitter)[$this->lang]);

		// Content
		$data['content'] = 'services';

		// Utilities
		$data['service'] = $this->filter_data_service($this->Service_model->get_service_by_id($service_id));
//		$data['banner'] = $this->Banner_model->get_banner_by_id(1);

		/*
		| -------------------------------------------------------------------------
		| EXECUTE VIEWS
		| -------------------------------------------------------------------------
		*/

		$this->load->view('app', $data);
	}

	private function filter_data_service($service)
	{
		$data = [];

		$data['id'] = $service->id;
		$data['title'] = $service->title;
		$data['banner_img'] = $service->banner_img;
		$data['banner_img_title_alt'] = $service->banner_img_title_alt;
		$data['banner_title'] = $service->banner_title;
		$data['content_top_img'] = $service->content_top_img;
		$data['content_top_title'] = $service->content_top_title;
		$data['content_top_body'] = $service->content_top_body;
		$data['content_bottom_img'] = $service->content_bottom_img;
		$data['content_bottom_title'] = $service->content_bottom_title;
		$data['content_bottom_body'] = $service->content_bottom_body;
		$data['created_at'] = $service->created_at;
		$data['text_button'] = $service->text_button;
		$data['portfolios'] = $this->Service_portfolio_model->get_service_portfolio_by_service_id($service->id);

		return $data;
	}
}
