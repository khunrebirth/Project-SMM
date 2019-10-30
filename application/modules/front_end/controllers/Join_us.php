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
		$this->load->model('Join_us_page_model');
		$this->load->model('Banner_model');
		$this->load->model('Career_model');
		$this->load->model('Career_gallery_model');

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

		$page_id = 1;
		$page_content = $this->Join_us_page_model->get_join_us_page_by_id($page_id);


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
		
		$data['og_twitter']['image'] = base_url('storage/uploads/images/join_us/'. unserialize($page_content->img_og_twitter)[$this->lang]);

		// Content
		$data['content'] = 'join_us';

		// Utilities
		$data['banner'] = $this->Banner_model->get_banner_active_by_id(7);
		$data['careers'] = $this->Career_model->get_career_all();
		$data['join_us'] = $this->Join_us_page_model->get_join_us_page_by_id($page_id);

		/*
		| -------------------------------------------------------------------------
		| EXECUTE VIEWS
		| -------------------------------------------------------------------------
		*/

		$this->load->view('app', $data);
	}
	
	public function detail($lang, $career_slug, $career_id)
	{
		/*
		| -------------------------------------------------------------------------
		| HANDLE
		| -------------------------------------------------------------------------
		*/

		$career_id = hashids_decrypt($career_id);
		$page_content = $this->Career_model->get_career_by_id($career_id);

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
		$data['og_twitter']['image'] = base_url('storage/uploads/images/join_us/'. unserialize($page_content->img_og_twitter)[$this->lang]);

		// Content
		$data['content'] = 'career_detail';

		// Utilities
		$data['career'] = $this->Career_model->get_career_by_id($career_id);
		$data['career_galleries'] = $this->Career_gallery_model->get_career_gallery_by_career_id($career_id);

		/*
		| -------------------------------------------------------------------------
		| EXECUTE VIEWS
		| -------------------------------------------------------------------------
		*/

		$this->load->view('app', $data);
	}
}
