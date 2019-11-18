<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Join_us extends MX_Controller
{

	public function __construct()
	{
		parent::__construct();

		/*
		| -------------------------------------------------------------------------
		| SET UTILITIES
		| -------------------------------------------------------------------------
		*/

		// Model
		$this->load->model('Contact_model');
		$this->load->model('Page_model');
		$this->load->model('Banner_model');
		$this->load->model('Career_model');
		$this->load->model('Career_gallery_model');

		// Language
		$this->lang = $this->config->item('language_abbr');
	}

	private function load_css_critical($page) {

		$css_critical = '';

		switch ($page) {
			case 'join_us':
				$css_critical = '
					<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha256-Vzbj7sDDS/woiFS3uNKo8eIuni59rjyNGtXfstRzStA=" crossorigin="anonymous" />
					<link rel="stylesheet" href="' . base_url('resources/front_end/css/style_join_us.min.css') . '">
				';
				break;

			case 'career_detail':
				$css_critical = '
					<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha256-Vzbj7sDDS/woiFS3uNKo8eIuni59rjyNGtXfstRzStA=" crossorigin="anonymous" />
					<link rel="stylesheet" href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css">
					<link rel="stylesheet" href="' . base_url('resources/front_end/js/jquery.Thailand.js/dist/jquery.Thailand.min.css') . '">
					<link rel="stylesheet" href="' . base_url('resources/front_end/css/style_career_detail.min.css') . '">
				';
				break;

			case 'tags':
				$css_critical = '<link rel="stylesheet" href="' . base_url('resources/front_end/css/style_tags.min.css') . '">';
				break;

			default:
				;
		}

		return $css_critical;
	}

	private function load_js_critical($page) {

		$js_critical = '';

		switch ($page) {
			case 'join_us':
				$js_critical = '
					<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha256-yt2kYMy0w8AbtF89WXb2P1rfjcP/HTHLT7097U8Y5b8=" crossorigin="anonymous"></script>
					<script type="text/javascript" src="' . base_url('resources/front_end/js/script_join_us.min.js') . '"></script>
				';
				break;

			case 'career_detail':
				$js_critical = '
					<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha256-yt2kYMy0w8AbtF89WXb2P1rfjcP/HTHLT7097U8Y5b8=" crossorigin="anonymous"></script>
					<script type="text/javascript" src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js"></script>
					<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.20/js/uikit.min.js"></script>
					<script type="text/javascript" src="' . base_url('resources/front_end/js/jquery.Thailand.js/dependencies/zip.js/zip.js') . '"></script>
					<script type="text/javascript" src="' . base_url('resources/front_end/js/jquery.Thailand.js/dependencies/JQL.min.js') . '"></script>
					<script type="text/javascript" src="' . base_url('resources/front_end/js/jquery.Thailand.js/dependencies/typeahead.bundle.js') . '"></script>
					<script type="text/javascript" src="' . base_url('resources/front_end/js/jquery.Thailand.js/dist/jquery.Thailand.min.js') . '"></script>
					<script type="text/javascript" src="' . base_url('resources/front_end/js/script_career_detail.min.js') . '"></script>
				';
				break;

			default:
				;
		}

		return $js_critical;
	}

	public function index()
	{

		/*
		| -------------------------------------------------------------------------
		| HANDLE
		| -------------------------------------------------------------------------
		*/

		$page_content = $this->Page_model->get_page_by_id(8);


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
		$data['og_twitter']['image'] = base_url('storage/uploads/images/join_us/'. unserialize($page_content->img_og_twitter)[$this->lang]);

		// Content
		$data['content'] = 'join_us';

		// Load CSS & JS Critical
		$data['css_critical'] = $this->load_css_critical('join_us');
		$data['js_critical'] = $this->load_js_critical('join_us');

		// Utilities
		$data['banner'] = $this->Banner_model->get_banner_active_by_id(7);
		$data['careers'] = $this->Career_model->get_career_all();
		$data['join_us'] = $this->Page_model->get_page_by_id(8);

		/*
		| -------------------------------------------------------------------------
		| EXECUTE VIEWS
		| -------------------------------------------------------------------------
		*/

		$this->load->view('app', $data);
	}
	
	public function detail($lang, $career_slug)
	{
		/*
		| -------------------------------------------------------------------------
		| HANDLE
		| -------------------------------------------------------------------------
		*/

		$page_content = $lang == 'th'
			? $this->Career_model->get_career_by_slug_th($career_slug)
			: $this->Career_model->get_career_by_slug_en($career_slug);

		$career = $page_content;

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
		$data['og_twitter']['image'] = base_url('storage/uploads/images/join_us/'. unserialize($page_content->img_og_twitter)[$this->lang]);

		// Content
		$data['content'] = 'career_detail';

		// Load CSS & JS Critical
		$data['css_critical'] = $this->load_css_critical('career_detail');
		$data['js_critical'] = $this->load_js_critical('career_detail');

		// Utilities
		$data['career'] = $career;
		$data['career_galleries'] = $this->Career_gallery_model->get_career_gallery_by_career_id($page_content->id);

		/*
		| -------------------------------------------------------------------------
		| EXECUTE VIEWS
		| -------------------------------------------------------------------------
		*/

		$this->load->view('app', $data);
	}
}
