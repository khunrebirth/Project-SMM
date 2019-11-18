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
		$this->load->model('Top_client_model');
		$this->load->model('Client_model');
		$this->load->model('Top_portfolio_model');
		$this->load->model('Portfolio_model');
		$this->load->model('Blog_category_model');
		$this->load->model('Blog_model');
		$this->load->model('Tag_model');
		$this->load->model('Team_model');

		// Language
		$this->lang = $this->config->item('language_abbr');
	}

	private function load_css_critical() {
		return '
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha256-Vzbj7sDDS/woiFS3uNKo8eIuni59rjyNGtXfstRzStA=" crossorigin="anonymous" />
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" integrity="sha256-PHcOkPmOshsMBC+vtJdVr5Mwb7r0LkSVJPlPrp/IMpU=" crossorigin="anonymous" />
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
			<link rel="stylesheet" href="' . base_url('resources/front_end/css/style_home.min.css') . '">
		';
	}

	private function load_js_critical() {
		return '
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha256-yt2kYMy0w8AbtF89WXb2P1rfjcP/HTHLT7097U8Y5b8=" crossorigin="anonymous"></script>
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
			<script type="text/javascript" src="' . base_url('resources/front_end/js/wow.js') . '"></script>
			<script type="text/javascript" src="' . base_url('resources/front_end/js/script_home.min.js') . '"></script>
		';
	}

	public function index()
	{
		/*
		| -------------------------------------------------------------------------
		| HANDLE
		| -------------------------------------------------------------------------
		*/

		$page_content = $this->Page_model->get_page_by_id(2);

		$clients = $this->Client_model->get_client_home_by_custom();
		$portfolios = $this->Portfolio_model->get_portfolio_home_by_custom();
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

		// Load CSS & JS Critical
		$data['css_critical'] = $this->load_css_critical();
		$data['js_critical'] = $this->load_js_critical();

		// Utilities
		$data['about'] = $this->Page_model->get_page_by_id(3);
		$data['services'] = $this->Service_model->get_service_all();
		$data['top_clients'] = $this->Top_client_model->get_top_client_by_limit(6);
		$data['clients'] = $clients;
		$data['top_portfolios'] = $this->Top_portfolio_model->get_top_portfolio_by_limit(4);
		$data['portfolios'] = $portfolios;
		$data['blog_categories'] = $this->Blog_category_model->get_blog_category_all();
		$data['blogs'] = $this->filter_data_blogs($this->Blog_model->get_last_blog(4));
		$data['teams'] = $this->Team_model->get_team_all();

		/*
		| -------------------------------------------------------------------------
		| EXECUTE VIEWS
		| -------------------------------------------------------------------------
		*/

		$this->load->view('app', $data);
	}

	private function filter_data_blogs($blogs)
	{
		$bundle_blogs = [];

		if (count($blogs) > 0) {
			foreach ($blogs as $key => $blog) {
				$bundle_blogs[$key]['category_blog_id'] = $blog->category_blog_id;
				$bundle_blogs[$key]['blog_category_slug'] = $blog->blog_category_slug;
				$bundle_blogs[$key]['slug'] = $blog->slug;
				$bundle_blogs[$key]['img'] = $blog->img;
				$bundle_blogs[$key]['img_title_alt'] = $blog->img_title_alt;
				$bundle_blogs[$key]['created_at'] = $blog->created_at;
				$bundle_blogs[$key]['title'] = $blog->title;
				$bundle_blogs[$key]['description_section'] = $blog->description_section;
				$bundle_blogs[$key]['title'] = $blog->title;
				$bundle_blogs[$key]['tags'] = $this->filter_data_tags($blog);
			}
		}

		return $bundle_blogs;
	}

	private function filter_data_tags($blog)
	{
		$tags = [];

		if ($blog->tag_id != '') {

			$bundle_tag_id = explode(',' , $blog->tag_id);

			foreach ($bundle_tag_id as $tag_id) {
				$tags[] = $this->Tag_model->get_tag_by_id($tag_id);
			}
		}

		return $tags;
	}
}
