<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MX_Controller
{

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
		$this->load->model('Page_model');

		// Language
		$this->lang = $this->config->item('language_abbr');

		/*
		| -------------------------------------------------------------------------
		| HANDLE
		| -------------------------------------------------------------------------
		*/

        $this->data['user'] = $this->User_model->get_user_by_id($this->session->userdata('user_id'));
    }

	public function edit_content($lang, $id)
	{
		$page_about_id = 3;

		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: About - Content - Edit';
		$this->data['content'] = 'abouts/content';
		$this->data['page_content'] =  $this->Page_model->get_page_by_id($page_about_id);

		$this->load->view('app', $this->data);
	}

	public function update_content($lang, $id)
	{
		$page_about_id = $id;

		// Get Old data
		$page_content = $this->Page_model->get_page_by_id($page_about_id);

		// Handle Image
		$meta_og_image_en = unserialize($page_content->img_og_twitter)['en'];
		$meta_og_image_th = unserialize($page_content->img_og_twitter)['th'];
		$img_section_en = unserialize($page_content->img_section)['en'];
		$img_section_th = unserialize($page_content->img_section)['th'];

		if (isset($_FILES['meta_og_image_en']) && $_FILES['meta_og_image_en']['name'] != '') {
			$meta_og_image_en = $this->ddoo_upload_about('meta_og_image_en');
		}

		if (isset($_FILES['meta_og_image_th']) && $_FILES['meta_og_image_th']['name'] != '') {
			$meta_og_image_th = $this->ddoo_upload_about('meta_og_image_th');
		}

		if (isset($_FILES['img_section_en']) && $_FILES['img_section_en']['name'] != '') {
			$img_section_en = $this->ddoo_upload_about('img_section_en');
		}

		if (isset($_FILES['img_section_th']) && $_FILES['img_section_th']['name'] != '') {
			$img_section_th = $this->ddoo_upload_about('img_section_th');
		}

		// Filter Data
		$input_meta_tag_title = ['en' => $this->input->post('meta_tag_title_en'), 'th' => $this->input->post('meta_tag_title_th')];
		$input_meta_tag_description = ['en' => $this->input->post('meta_tag_description_en'), 'th' => $this->input->post('meta_tag_description_th')];
		$input_meta_tag_keywords = ['en' => $this->input->post('meta_tag_keywords_en'), 'th' => $this->input->post('meta_tag_keywords_th')];
		$input_meta_tag_moblie_title = ['en' => $this->input->post('meta_tag_moblie_title_en'), 'th' => $this->input->post('meta_tag_moblie_title_th')];
		$input_meta_tag_moblie_description = ['en' => $this->input->post('meta_tag_moblie_description_en'), 'th' => $this->input->post('meta_tag_moblie_description_th')];
		$input_meta_tag_moblie_keywords = ['en' => $this->input->post('meta_tag_moblie_keywords_en'), 'th' => $this->input->post('meta_tag_moblie_keywords_th')];
		$input_img_og_twitter = ['en' => $meta_og_image_en, 'th' => $meta_og_image_th];
		$input_content_left = ['en' => $this->input->post('content_left_en'), 'th' => $this->input->post('content_left_th')];
		$input_conetnt_right = ['en' => $this->input->post('content_right_en'), 'th' => $this->input->post('content_right_th')];
		$input_img_section = ['en' => $img_section_en, 'th' => $img_section_th];

		// Update Data
		$update_page_content = $this->Page_model->update_page_by_id($page_about_id, [
			'meta_tag_title' => serialize($input_meta_tag_title),
			'meta_tag_description' => serialize($input_meta_tag_description),
			'meta_tag_keywords' => serialize($input_meta_tag_keywords),
			'meta_tag_moblie_title' => serialize($input_meta_tag_moblie_title),
			'meta_tag_moblie_description' => serialize($input_meta_tag_moblie_description),
			'meta_tag_moblie_keywords' => serialize($input_meta_tag_moblie_keywords),
			'img_og_twitter' => serialize($input_img_og_twitter),
			'content_left' => serialize($input_content_left),
			'content_right' => serialize($input_conetnt_right),
			'img_section' => serialize($input_img_section),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		// Set Session To View
		if ($update_page_content) {

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'แก้ไข Content (About Page)',
				'event' => 'update',
				'ip' => $this->input->ip_address(),
			]);

			$this->session->set_flashdata('success', 'Update Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect($lang . '/backoffice/page/abouts/content/' . $page_about_id);
	}

	private function ddoo_upload_about($filename)
	{
		$config['upload_path'] = './storage/uploads/images/abouts';
		$config['allowed_types'] = 'gif|jpg|png';
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
