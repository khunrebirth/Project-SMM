<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends MX_Controller
{

	private $lang = 'th';

	private function load_css_critical() {
		return '
			<link rel="stylesheet" href="' . base_url('resources/front_end/css/style_clients.min.css') . '">
		';
	}

	private function load_js_critical() {
		return '
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ScrollToFixed/1.0.8/jquery-scrolltofixed-min.js" integrity="sha256-Kl1vQ0yioe6J6idmj55qGNgoOrKOTJh4WYFdmiVnvZw=" crossorigin="anonymous"></script>
			<script type="text/javascript" src="' . base_url('resources/front_end/js/script_clients.min.js') . '"></script>
		';
	}

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
		$data['og_twitter']['title_moblie'] = unserialize($page_content->meta_tag_moblie_title)[$this->lang];
		$data['og_twitter']['description_moblie'] = unserialize($page_content->meta_tag_moblie_description)[$this->lang];
		$data['og_twitter']['image'] = base_url('storage/uploads/images/clients/'. unserialize($page_content->img_og_twitter)[$this->lang]);

		// Content
		$data['content'] = 'clients';

		// Load CSS & JS Critical
		$data['css_critical'] = $this->load_css_critical();
		$data['js_critical'] = $this->load_js_critical();

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
