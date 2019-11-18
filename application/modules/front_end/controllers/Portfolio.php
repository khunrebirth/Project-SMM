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
		$this->load->model('Page_model');
		$this->load->model('Banner_model');
		$this->load->model('Portfolio_category_model');
		$this->load->model('Portfolio_model');

		// Language
		$this->lang = $this->config->item('language_abbr');
	}

	private function load_css_critical()
	{
		return '
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha256-Vzbj7sDDS/woiFS3uNKo8eIuni59rjyNGtXfstRzStA=" crossorigin="anonymous" />
			<link rel="stylesheet" href="' . base_url('resources/front_end/css/style_portfolio.min.css') . '">
		';
	}

	private function load_js_critical()
	{
		return '
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha256-yt2kYMy0w8AbtF89WXb2P1rfjcP/HTHLT7097U8Y5b8=" crossorigin="anonymous"></script>
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ScrollToFixed/1.0.8/jquery-scrolltofixed-min.js" integrity="sha256-Kl1vQ0yioe6J6idmj55qGNgoOrKOTJh4WYFdmiVnvZw=" crossorigin="anonymous"></script>
			<script type="text/javascript" src="' . base_url('resources/front_end/js/script_portfolio.min.js') . '"></script>
		';
	}

	public function index()
	{

		/*
		| -------------------------------------------------------------------------
		| HANDLE
		| -------------------------------------------------------------------------
		*/

		$page_content = $this->Page_model->get_page_by_id(11);

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
		$data['og_twitter']['image'] = base_url('storage/uploads/images/portfolios/'. unserialize($page_content->img_og_twitter)[$this->lang]);

		// Content
		$data['content'] = 'portfolio';

		// Load CSS & JS Critical
		$data['css_critical'] = $this->load_css_critical();
		$data['js_critical'] = $this->load_js_critical();

		// Utilities
		$data['portfolio_categories'] = $this->Portfolio_category_model->get_portfolio_category_all();
		$data['portfolios'] = $this->Portfolio_model->get_portfolio_all();
		$data['banner'] = $this->Banner_model->get_banner_active_by_id(8);

		/*
		| -------------------------------------------------------------------------
		| EXECUTE VIEWS
		| -------------------------------------------------------------------------
		*/

		$this->load->view('app', $data);
	}
}
