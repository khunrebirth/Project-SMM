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
		$this->load->model('Page_model');
		$this->load->model('Banner_model');
		$this->load->model('Blog_category_model');
		$this->load->model('Blog_model');
		$this->load->model('Tag_model');

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

		$page_content = $this->Page_model->get_page_by_id(6);

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
		$data['og_twitter']['image'] = base_url('storage/uploads/images/blogs/'. unserialize($page_content->img_og_twitter)[$this->lang]);

		// Content
		$data['content'] = 'blogs';

		// Utilities
		$data['blog_categories'] = $this->Blog_category_model->get_blog_category_active();
		$data['blogs'] = $this->filter_data_blogs($this->Blog_model->get_blog_by_category_blog_id($data['blog_categories'][0]->id));
		$data['banner'] = $this->Banner_model->get_banner_active_by_id(3);
		$data['category_id'] = $data['blog_categories'][0]->id;

		/*
		| -------------------------------------------------------------------------
		| EXECUTE VIEWS
		| -------------------------------------------------------------------------
		*/

		$this->load->view('app', $data);
	}

	public function category_show($lang, $blog_category_slug)
	{
		/*
		| -------------------------------------------------------------------------
		| HANDLE
		| -------------------------------------------------------------------------
		*/

		$page_content = $lang == 'th'
			? $this->Blog_category_model->get_blog_by_slug_th($blog_category_slug)
			: $this->Blog_category_model->get_blog_by_slug_en($blog_category_slug);

		$category_blogs = $page_content;

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
		$data['meta']['title_moblie'] = unserialize($page_content->meta_tag_moblie_title)[$this->lang];
		$data['meta']['description_moblie'] = unserialize($page_content->meta_tag_moblie_description)[$this->lang];
		$data['meta']['keyword_moblie'] = unserialize($page_content->meta_tag_moblie_keywords)[$this->lang];

		// OG & Twitter
		$data['og_twitter']['title'] = unserialize($page_content->meta_tag_title)[$this->lang];
		$data['og_twitter']['description'] = unserialize($page_content->meta_tag_description)[$this->lang];
		$data['og_twitter']['title_moblie'] = unserialize($page_content->meta_tag_moblie_title)[$this->lang];
		$data['og_twitter']['description_moblie'] = unserialize($page_content->meta_tag_moblie_description)[$this->lang];
		$data['og_twitter']['image'] = base_url('storage/uploads/images/blogs/'. unserialize($page_content->img_og_twitter)[$this->lang]);

		// Content
		$data['content'] = 'blogs';

		// Utilities
		$data['blog_categories'] = $this->Blog_category_model->get_blog_category_active();
		$data['blogs'] = $this->filter_data_blogs($this->Blog_model->get_blog_by_category_blog_id($category_blogs->id));
		$data['banner'] = $this->Banner_model->get_banner_active_by_id(3);
		$data['category_id'] = $category_blogs->id;

		/*
		| -------------------------------------------------------------------------
		| EXECUTE VIEWS
		| -------------------------------------------------------------------------
		*/

		$this->load->view('app', $data);
	}

	public function blog_show($lang, $blog_category_slug, $blog_slug)
	{
		/*
		| -------------------------------------------------------------------------
		| HANDLE
		| -------------------------------------------------------------------------
		*/

		$page_content = $lang == 'th'
			? $this->Blog_model->get_blog_by_slug_th($blog_slug)
			: $this->Blog_model->get_blog_by_slug_en($blog_slug);

		$blog = $page_content;
		$suggest_blogs = $this->Blog_model->get_suggest_blogs($blog->id, $blog->tag_id);
		shuffle($suggest_blogs);

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
		$data['og_twitter']['image'] = base_url('storage/uploads/images/blogs/'. unserialize($page_content->img_og_twitter)[$this->lang]);

		// Content
		$data['content'] = 'blog_detail';

		// Utilities
		$data['banner'] = $this->Banner_model->get_banner_active_by_id(3);
		$data['last_blogs'] = $this->Blog_model->get_last_blog(5);
		$data['blog'] = $blog;
		$data['tags'] = $this->filter_data_tags($blog);
		$data['suggest_blogs'] = $suggest_blogs;

		/*
		| -------------------------------------------------------------------------
		| EXECUTE VIEWS
		| -------------------------------------------------------------------------
		*/

		$this->load->view('app', $data);
	}

	public function tag_show($lang, $tag_slug)
	{
		/*
		| -------------------------------------------------------------------------
		| HANDLE
		| -------------------------------------------------------------------------
		*/

		$page_content = $lang == 'th'
			? $this->Tag_model->get_tag_by_slug_th($tag_slug)
			: $this->Tag_model->get_tag_by_slug_en($tag_slug);

		$tag = $page_content;

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
		$data['og_twitter']['image'] = base_url('storage/uploads/images/blogs/'. unserialize($page_content->img_og_twitter)[$this->lang]);

		// Content
		$data['content'] = 'tags';

		// Utilities
		$data['banner'] = $this->Banner_model->get_banner_active_by_id(3);
		$data['tag'] = $tag;
		$data['blogs'] = $this->Blog_model->get_blog_by_tag_id($tag->id);

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
