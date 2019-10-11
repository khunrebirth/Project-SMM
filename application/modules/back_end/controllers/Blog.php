<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends MX_Controller {

    private $data = false;

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
		$this->data['title'] = 'Page: Blogs';
		$this->data['content'] = 'blogs/category_list';
		$this->data['categories'] = $this->Blog_category_model->get_blog_category_all();

		$this->load->view('app', $this->data);
	}

    public function category_blog_create() {}

    public function category_blog_store() {}

    public function category_blog_edit($blog_id) {}

	public function category_blog_update($blog_iblog_d) {}

    public function category_blog_destroy($blog_id)
    {
        $status = 500;
        $response['success'] = 0;

        $blog = $this->Blog_model->delete_blog_by_id($blog_id);

        if ($blog != false) {
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

	public function list_blog($blog_category_id) {}

	public function blog_create($blog_category_id) {}

	public function blog_store($blog_category_id) {}

	public function blog_edit($blog_category_id, $blog_id) {}

	public function blog_update($blog_category_id, $blog_id) {}

	public function blog_destroy($blog_category_id, $blog_id)
	{
		$status = 500;
		$response['success'] = 0;

		$blog = $this->Blog_model->delete_blog_by_id($id);

		if ($blog != false) {
			$status = 200;
			$response['success'] = 1;
		}

		return $this->output
			->set_status_header($status)
			->set_content_type('application/json')
			->set_output(json_encode($response));
	}
}
