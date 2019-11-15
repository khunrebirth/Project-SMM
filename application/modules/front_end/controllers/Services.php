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
		$this->load->model('Service_client_model');
		$this->load->model('Service_portfolio_model');

		// Language
		$this->lang = $this->config->item('language_abbr');
	}

	private function load_css_critical() {
		return '
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
			<link rel="stylesheet" href="https://unpkg.com/tippy.js@5/dist/backdrop.css" />
			<link rel="stylesheet" href="' . base_url('resources/front_end/css/style_services.min.css') . '">
		';
	}

	private function load_js_critical() {
		return '
			<script type="text/javascript" src="https://unpkg.com/popper.js@1"></script>
			<script type="text/javascript" src="https://unpkg.com/tippy.js@5"></script>
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
			<script type="text/javascript" src="' . base_url('resources/front_end/js/script_services.min.js') . '"></script>
		';
	}

	public function index() {}

	public function show($lang, $service_slug)
	{
		/*
		| -------------------------------------------------------------------------
		| HANDLE
		| -------------------------------------------------------------------------
		*/

		$page_content = $lang == 'th'
			? $this->Service_model->get_service_by_slug_th($service_slug)
			: $this->Service_model->get_service_by_slug_en($service_slug);

		$service = $page_content;

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
		$data['og_twitter']['title_moblie'] = unserialize($page_content->meta_tag_moblie_title)[$this->lang];
		$data['og_twitter']['description_moblie'] = unserialize($page_content->meta_tag_moblie_description)[$this->lang];
		$data['og_twitter']['image'] = base_url('storage/uploads/images/services/'. unserialize($page_content->img_og_twitter)[$this->lang]);

		// Content
		$data['content'] = 'services';

		// Load CSS & JS Critical
		$data['css_critical'] = $this->load_css_critical();
		$data['js_critical'] = $this->load_js_critical();

		// Utilities
		$data['service'] = $this->filter_data_service($service);
		$data['services'] = $this->Service_model->get_service_by_custom($service->id);

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
		$data['banner_img_moblie'] = $service->banner_img;
		$data['banner_img_title_alt'] = $service->banner_img_title_alt;
		$data['banner_title'] = $service->banner_title;
		$data['content_top_img'] = $service->content_top_img;
		$data['content_top_img_title_alt'] = $service->content_top_img_title_alt;
		$data['content_top_title'] = $service->content_top_title;
		$data['content_top_body'] = $service->content_top_body;
		$data['content_bottom_img'] = $service->content_bottom_img;
		$data['content_bottom_img_title_alt'] = $service->content_bottom_img_title_alt;
		$data['content_bottom_title'] = $service->content_bottom_title;
		$data['content_bottom_body'] = $service->content_bottom_body;
		$data['created_at'] = $service->created_at;
		$data['text_button'] = $service->text_button;
		$data['our_clients'] = $this->Service_client_model->get_service_client_by_service_id($service->id);
		$data['portfolios'] = $this->Service_portfolio_model->get_service_portfolio_by_service_id($service->id);

		return $data;
	}
}
