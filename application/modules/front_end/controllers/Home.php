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
		$this->load->model('Page_model');
		$this->load->model('Service_model');
		$this->load->model('Client_model');
		$this->load->model('Portfolio_model');
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

		$page_content = $this->Page_model->get_page_by_id(2);
		$clients = $this->Client_model->get_client_all();
		$portfolios = $this->Portfolio_model->get_portfolio_all();
		shuffle($clients);
		shuffle($portfolios);

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
		$data['og_twitter']['image'] = base_url('storage/uploads/images/home/'. unserialize($page_content->img_og_twitter)[$this->lang]);

		// Content
		$data['content'] = 'home';

		// Utilities
		$data['about'] = $this->Page_model->get_page_by_id(3);
		$data['services'] = $this->Service_model->get_service_all();
		$data['clients'] = $clients;
		$data['portfolios'] = $portfolios;
		$data['blog_categories'] = $this->Blog_category_model->get_blog_category_all();
		$data['blogs'] = $this->Blog_model->get_last_blog(4);
		$data['teams'] = $this->Team_model->get_team_all();

		/*
		| -------------------------------------------------------------------------
		| EXECUTE VIEWS
		| -------------------------------------------------------------------------
		*/

		$this->load->view('app', $data);
	}
}
