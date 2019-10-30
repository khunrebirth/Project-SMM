<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends MX_Controller {

    private $data = false;
	private $lang = 'th';

    public function __construct()
    {
        parent::__construct();

		/*
		| -------------------------------------------------------------------------
		| MIDDLEWARE
		| -------------------------------------------------------------------------
		*/

		require_login('backoffice/login');

		/*
		| -------------------------------------------------------------------------
		| SET UTILITIES
		| -------------------------------------------------------------------------
		*/

        // Model
        $this->load->model('User_model');
        $this->load->model('Blog_model');
        $this->load->model('Blog_category_model');

		// Language
		$this->lang = $this->config->item('language_abbr');

		/*
		| -------------------------------------------------------------------------
		| HANDLE
		| -------------------------------------------------------------------------
		*/

        $this->data['user'] = $this->User_model->get_user_by_id($this->session->userdata('user_id'));
    }

	public function index() {}

	/***********************************
	 * Category
	 * ********************************/

	public function list_category_blog()
	{
		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Blogs';
		$this->data['content'] = 'blogs/category_list';
		$this->data['categories'] = $this->Blog_category_model->get_blog_category_all();

		$this->load->view('app', $this->data);
	}

    public function category_blog_create()
	{
		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Blogs - Category - Add';
		$this->data['content'] = 'blogs/category_create';

		$this->load->view('app', $this->data);
	}

    public function category_blog_store()
	{
		// Handle Image
		$meta_og_image_en = '';
		$meta_og_image_th = '';

		if (isset($_FILES['meta_og_image_en']) && $_FILES['meta_og_image_en']['name'] != '') {
			$meta_og_image_en = $this->ddoo_upload_blog('meta_og_image_en');
		}

		if (isset($_FILES['meta_og_image_th']) && $_FILES['meta_og_image_th']['name'] != '') {
			$meta_og_image_th = $this->ddoo_upload_blog('meta_og_image_th');
		}

		// Filter Data
		$input_meta_title = ['en' => $this->input->post('meta_tag_title_en'), 'th' => $this->input->post('meta_tag_title_th')];
		$input_meta_description = ['en' => $this->input->post('meta_tag_description_en'), 'th' => $this->input->post('meta_tag_description_th')];
		$input_meta_keyword = ['en' => $this->input->post('meta_tag_keywords_en'), 'th' => $this->input->post('meta_tag_keywords_th')];
		$input_img_og_twitter= ['en' => $meta_og_image_en, 'th' => $meta_og_image_th];
		$input_title = ['en' => $this->input->post('title_en'), 'th' => $this->input->post('title_th')];
		$slug_en = slugify($this->input->post('title_en'));
		$slug_th = smm_slug_th($this->input->post('title_th'));
		$slug = ['en' => $slug_en, 'th' => $slug_th];

		// Add Data
		$add_category = $this->Blog_category_model->insert_blog_category([
			'meta_tag_title' => serialize($input_meta_title),
			'meta_tag_description' => serialize($input_meta_description),
			'meta_tag_keywords' => serialize($input_meta_keyword),
			'img_og_twitter' => serialize($input_img_og_twitter),
			'title' => serialize($input_title),
			'slug' => serialize($slug)
		]);

		// Set Session To View
		if ($add_category) {

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'เพิ่ม Category (Blog Page)',
				'event' => 'add',
				'ip' => $this->input->ip_address(),
			]);

			$this->session->set_flashdata('success', 'Add Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect($this->lang . '/backoffice/page/blogs/list-category-blogs');
	}

    public function category_blog_edit($lang, $blog_id)
	{
		$category = $this->Blog_category_model->get_blog_category_by_id($blog_id);

		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Blogs - Category - Edit ('. unserialize($category->title)['th'] . ')';
		$this->data['content'] = 'blogs/category_edit';
		$this->data['category'] = $category;

		$this->load->view('app', $this->data);
	}

	public function category_blog_update($lang, $blog_id)
	{
		// Get Old data
		$blog_category = $this->Blog_category_model->get_blog_category_by_id($blog_id);

		// Handle Image
		$meta_og_image_en = unserialize($blog_category->img_og_twitter)['en'];
		$meta_og_image_th = unserialize($blog_category->img_og_twitter)['en'];

		if (isset($_FILES['meta_og_image_en']) && $_FILES['meta_og_image_en']['name'] != '') {
			$meta_og_image_en = $this->ddoo_upload_blog('meta_og_image_en');
		}

		if (isset($_FILES['meta_og_image_th']) && $_FILES['meta_og_image_th']['name'] != '') {
			$meta_og_image_th = $this->ddoo_upload_blog('meta_og_image_th');
		}

		// Filter Data
		$input_meta_title = ['en' => $this->input->post('meta_tag_title_en'), 'th' => $this->input->post('meta_tag_title_th')];
		$input_meta_description = ['en' => $this->input->post('meta_tag_description_en'), 'th' => $this->input->post('meta_tag_description_th')];
		$input_meta_keyword = ['en' => $this->input->post('meta_tag_keywords_en'), 'th' => $this->input->post('meta_tag_keywords_th')];
		$input_img_og_twitter= ['en' => $meta_og_image_en, 'th' => $meta_og_image_th];
		$input_title = ['en' => $this->input->post('title_en'), 'th' => $this->input->post('title_th')];
		$slug_en = slugify($this->input->post('title_en'));
		$slug_th = smm_slug_th($this->input->post('title_th'));
		$slug = ['en' => $slug_en, 'th' => $slug_th];

		// Add Data
		$update_category = $this->Blog_category_model->update_blog_category_by_id($blog_id, [
			'meta_tag_title' => serialize($input_meta_title),
			'meta_tag_description' => serialize($input_meta_description),
			'meta_tag_keywords' => serialize($input_meta_keyword),
			'img_og_twitter' => serialize($input_img_og_twitter),
			'title' => serialize($input_title),
			'slug' => serialize($slug),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		// Set Session To View
		if ($update_category) {

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'แก้ไข Category (Blogs Page)',
				'event' => 'update',
				'ip' => $this->input->ip_address(),
			]);

			$this->session->set_flashdata('success', 'Update Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect($lang . '/backoffice/page/blogs/list-category-blogs');
	}

    public function category_blog_destroy($lang, $blog_id)
    {
        $status = 500;
        $response['success'] = 0;

        $category = $this->Blog_category_model->delete_blog_category_by_id($blog_id);

        if ($category != false) {
            $status = 200;
            $response['success'] = 1;
        }

        return $this->output
            ->set_status_header($status)
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

	/***********************************
	 * Blog
	 * ********************************/

	public function list_blog($lang, $blog_category_id)
	{
		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Blogs';
		$this->data['content'] = 'blogs/blog_list';
		$this->data['blogs'] = $this->Blog_model->get_blog_by_category_blog_id($blog_category_id);
		$this->data['category'] =  $this->Blog_category_model->get_blog_category_by_id($blog_category_id);

		$this->load->view('app', $this->data);
	}

	public function blog_create($lang, $blog_category_id)
	{
		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Blogs - Blogs - Add';
		$this->data['content'] = 'blogs/blog_create';
		$this->data['category'] =  $this->Blog_category_model->get_blog_category_by_id($blog_category_id);

		$this->load->view('app', $this->data);
	}

	public function blog_store($lang, $blog_category_id)
	{
		// Handle Image
		$meta_og_image_en = '';
		$meta_og_image_th = '';
		$img_en = '';
		$img_th = '';

		if (isset($_FILES['meta_og_image_en']) && $_FILES['meta_og_image_en']['name'] != '') {
			$meta_og_image_en = $this->ddoo_upload_blog('meta_og_image_en');
		}

		if (isset($_FILES['meta_og_image_th']) && $_FILES['meta_og_image_th']['name'] != '') {
			$meta_og_image_th = $this->ddoo_upload_blog('meta_og_image_th');
		}

		if (isset($_FILES['img_en']) && $_FILES['img_en']['name'] != '') {
			$img_en = $this->ddoo_upload_blog('img_en');
		}

		if (isset($_FILES['img_th']) && $_FILES['img_th']['name'] != '') {
			$img_th = $this->ddoo_upload_blog('img_th');
		}

		// Filter Data
		$input_meta_title = ['en' => $this->input->post('meta_title_en'), 'th' => $this->input->post('meta_title_th')];
		$input_meta_description = ['en' => $this->input->post('meta_description_en'), 'th' => $this->input->post('meta_description_th')];
		$input_meta_keyword = ['en' => $this->input->post('meta_keyword_en'), 'th' => $this->input->post('meta_keyword_th')];
		$input_img_og_twitter= ['en' => $meta_og_image_en, 'th' => $meta_og_image_th];
		$input_img = ['en' => $img_en, 'th' => $img_th];
		$input_title = ['en' => $this->input->post('title_en'), 'th' => $this->input->post('title_th')];
		$input_description_section = ['en' => $this->input->post('description_section_en'), 'th' => $this->input->post('description_section_th')];
		$input_body = ['en' => $this->input->post('body_en'), 'th' => $this->input->post('body_th')];
		$slug_en = slugify($this->input->post('title_en'));
		$slug_th = smm_slug_th($this->input->post('title_th'));
		$slug = ['en' => $slug_en, 'th' => $slug_th];

		// Add Data
		$add_blog = $this->Blog_model->insert_blog([
			'meta_tag_title' => serialize($input_meta_title),
			'meta_tag_description' => serialize($input_meta_description),
			'meta_tag_keywords' => serialize($input_meta_keyword),
			'img_og_twitter' => serialize($input_img_og_twitter),
			'img' => serialize($input_img),
			'title' => serialize($input_title),
			'description_section' => serialize($input_description_section),
			'body' => serialize($input_body),
			'slug' => serialize($slug),
			'category_blog_id' => $blog_category_id
		]);

		// Set Session To View
		if ($add_blog) {

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'เพิ่ม Blog (Blogs Page)',
				'event' => 'add',
				'ip' => $this->input->ip_address(),
			]);

			$this->session->set_flashdata('success', 'Add Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect($lang . '/backoffice/page/blogs/list-blogs/' . $blog_category_id);
	}

	public function blog_edit($lang, $blog_category_id, $blog_id)
	{
		$blog = $this->Blog_model->get_blog_by_id($blog_id);

		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Blogs - Blogs - Edit(' . unserialize($blog->title)['th'] . ')';
		$this->data['content'] = 'blogs/blog_edit';
		$this->data['blog'] = $blog;
		$this->data['category'] =  $this->Blog_category_model->get_blog_category_by_id($blog_category_id);

		$this->load->view('app', $this->data);
	}

	public function blog_update($lang, $blog_category_id, $blog_id)
	{
		// Get Old data
		$blog = $this->Blog_model->get_blog_by_id($blog_id);

		// Handle Image
		$meta_og_image_en = unserialize($blog->img_og_twitter)['en'];
		$meta_og_image_th = unserialize($blog->img_og_twitter)['en'];
		$img_en = unserialize($blog->img)['en'];
		$img_th = unserialize($blog->img)['th'];

		if (isset($_FILES['meta_og_image_en']) && $_FILES['meta_og_image_en']['name'] != '') {
			$meta_og_image_en = $this->ddoo_upload_blog('meta_og_image_en');
		}

		if (isset($_FILES['meta_og_image_th']) && $_FILES['meta_og_image_th']['name'] != '') {
			$meta_og_image_th = $this->ddoo_upload_blog('meta_og_image_th');
		}

		if (isset($_FILES['img_en']) && $_FILES['img_en']['name'] != '') {
			$img_en = $this->ddoo_upload_blog('img_en');
		}

		if (isset($_FILES['img_th']) && $_FILES['img_th']['name'] != '') {
			$img_th = $this->ddoo_upload_blog('img_th');
		}

		// Filter Data
		$input_meta_title = ['en' => $this->input->post('meta_title_en'), 'th' => $this->input->post('meta_title_th')];
		$input_meta_description = ['en' => $this->input->post('meta_description_en'), 'th' => $this->input->post('meta_description_th')];
		$input_meta_keyword = ['en' => $this->input->post('meta_keyword_en'), 'th' => $this->input->post('meta_keyword_th')];
		$input_img_og_twitter= ['en' => $meta_og_image_en, 'th' => $meta_og_image_th];
		$input_img = ['en' => $img_en, 'th' => $img_th];
		$input_title = ['en' => $this->input->post('title_en'), 'th' => $this->input->post('title_th')];
		$input_description_section = ['en' => $this->input->post('description_section_en'), 'th' => $this->input->post('description_section_th')];
		$input_body = ['en' => $this->input->post('body_en'), 'th' => $this->input->post('body_th')];
		$slug_en = slugify($this->input->post('title_en'));
		$slug_th = smm_slug_th($this->input->post('title_th'));
		$slug = ['en' => $slug_en, 'th' => $slug_th];

		// Update Data
		$update_blog = $this->Blog_model->update_blog_by_id($blog_id, [
			'meta_tag_title' => serialize($input_meta_title),
			'meta_tag_description' => serialize($input_meta_description),
			'meta_tag_keywords' => serialize($input_meta_keyword),
			'img_og_twitter' => serialize($input_img_og_twitter),
			'img' => serialize($input_img),
			'title' => serialize($input_title),
			'description_section' => serialize($input_description_section),
			'body' => serialize($input_body),
			'slug' => serialize($slug),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		// Set Session To View
		if ($update_blog) {

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'แก้ไข Blog (Blogs Page)',
				'event' => 'update',
				'ip' => $this->input->ip_address(),
			]);

			$this->session->set_flashdata('success', 'Update Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect($this->lang . '/backoffice/page/blogs/list-blogs/' . $blog_category_id);
	}

	public function blog_destroy($lang, $blog_id)
	{
		$status = 500;
		$response['success'] = 0;

		$blog = $this->Blog_model->delete_blog_by_id($blog_id);

		if ($blog != false) {
			$status = 200;
			$response['success'] = 1;

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'ลบ Blog (Blog Page)',
				'event' => 'delete',
				'ip' => $this->input->ip_address(),
			]);
		}

		return $this->output
			->set_status_header($status)
			->set_content_type('application/json')
			->set_output(json_encode($response));
	}

	private function ddoo_upload_blog($filename)
	{
		$config['upload_path'] = './storage/uploads/images/blogs';
		$config['allowed_types'] = 'gif|jpg|png';
//		$config['encrypt_name'] = TRUE;
		$config['file_name'] = pathinfo($_FILES[$filename]['name'], PATHINFO_FILENAME) . '_' . time();

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload($filename)) {
			$error = array('error' => $this->upload->display_errors());

			return false;

		} else {
			$data = array('upload_data' => $this->upload->data());

			return $data['upload_data']['file_name'];
		}
	}
}
