<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends MX_Controller
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
		$this->load->model('Blog_page_model');
		$this->load->model('Blog_category_model');
		$this->load->model('Blog_model');

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

		$blog_id = 1;
		$page_content = $this->Blog_page_model->get_blog_page_by_id($blog_id);

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
		$data['og_twitter']['image'] = base_url('storage/uploads/images/blogs/'. unserialize($page_content->img_og_twitter)[$this->lang]);

		// Content
		$data['content'] = 'blogs';

		// Utilities
		$data['blog_categories'] = $this->Blog_category_model->get_blog_category_all();
		$data['blogs'] = $this->Blog_model->get_blog_by_category_blog_id($data['blog_categories'][0]->id);

		/*
		| -------------------------------------------------------------------------
		| EXECUTE VIEWS
		| -------------------------------------------------------------------------
		*/

		$this->load->view('app', $data);
	}

	public function category_show($lang, $blog_category_slug, $blog_category_id)
	{
		/*
		| -------------------------------------------------------------------------
		| HANDLE
		| -------------------------------------------------------------------------
		*/

		$blog_category_id = hashids_decrypt($blog_category_id);
		$page_content = $this->Blog_category_model->get_blog_category_by_id($blog_category_id);

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
		$data['og_twitter']['image'] = base_url('storage/uploads/images/blogs/'. unserialize($page_content->img_og_twitter)[$this->lang]);

		// Content
		$data['content'] = 'blogs';

		// Utilities
		$data['blog_categories'] = $this->Blog_category_model->get_blog_category_all();
		$data['blogs'] = $this->Blog_model->get_blog_by_category_blog_id($blog_category_id);

		/*
		| -------------------------------------------------------------------------
		| EXECUTE VIEWS
		| -------------------------------------------------------------------------
		*/

		$this->load->view('app', $data);
	}

	public function blog_show($lang, $blog_category_slug, $blog_slug, $blog_id)
	{
		/*
		| -------------------------------------------------------------------------
		| HANDLE
		| -------------------------------------------------------------------------
		*/

		$blog_id = hashids_decrypt($blog_id);
		$page_content = $this->Blog_model->get_blog_by_id($blog_id);

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
		$data['og_twitter']['image'] = base_url('storage/uploads/images/blogs/'. unserialize($page_content->img_og_twitter)[$this->lang]);

		// Content
		$data['content'] = 'blog_detail';

		// Utilities
		$data['last_blogs'] = $this->Blog_model->get_last_blog(5);
		$data['blog'] = $this->Blog_model->get_blog_by_id($blog_id);

		/*
		| -------------------------------------------------------------------------
		| EXECUTE VIEWS
		| -------------------------------------------------------------------------
		*/

		$this->load->view('app', $data);
	}
}
