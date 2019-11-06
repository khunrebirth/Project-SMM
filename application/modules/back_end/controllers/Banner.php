<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends MX_Controller
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
		$this->load->model('Banner_model');

		// Language
		$this->lang = $this->config->item('language_abbr');

		/*
		| -------------------------------------------------------------------------
		| HANDLE
		| -------------------------------------------------------------------------
		*/

		$this->data['user'] = $this->User_model->get_user_by_id($this->session->userdata('user_id'));
	}

	public function index()
	{
		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Setting: Banners';
		$this->data['content'] = 'banners/list';
		$this->data['banners'] = $this->Banner_model->get_banner_all();

		$this->load->view('app', $this->data);
	}

	public function edit($lang, $id)
	{
		$banner = $this->Banner_model->get_banner_by_id($id);

		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Setting - Edit Banner (' . unserialize($banner->page)['th'] . ')';
		$this->data['content'] = 'banners/list_edit';
		$this->data['banner'] = $banner;

		$this->load->view('app', $this->data);
	}

	public function update($lang, $id)
	{
		// Get Old data
		$banner = $this->Banner_model->get_banner_by_id($id);

		// Handle Image
		$img_en = unserialize($banner->img)['en'];
		$img_th = unserialize($banner->img)['th'];
		$img_moblie_en = unserialize($banner->img_moblie)['en'];
		$img_moblie_th = unserialize($banner->img_moblie)['th'];

		if (isset($_FILES['img_en']) && $_FILES['img_en']['name'] != '') {
			$img_en = $this->ddoo_upload_banner('img_en');
		}

		if (isset($_FILES['img_th']) && $_FILES['img_th']['name'] != '') {
			$img_th = $this->ddoo_upload_banner('img_th');
		}

		if (isset($_FILES['img_moblie_en']) && $_FILES['img_moblie_en']['name'] != '') {
			$img_moblie_en = $this->ddoo_upload_banner('img_moblie_en');
		}

		if (isset($_FILES['img_moblie_th']) && $_FILES['img_moblie_th']['name'] != '') {
			$img_moblie_th = $this->ddoo_upload_banner('img_moblie_th');
		}

		// Filter Data
		$input_img_title_alt = ['en' => $this->input->post('img_title_alt_en'), 'th' => $this->input->post('img_title_alt_th')];
		$input_title = ['en' => $this->input->post('title_en'), 'th' => $this->input->post('title_th')];
		$input_img = ['en' => $img_en, 'th' => $img_th];
		$input_img_moblie = ['en' => $img_moblie_en, 'th' => $img_moblie_th];

		// Add Data
		$update_banner = $this->Banner_model->update_banner_by_id($id, [
			'status' => $this->input->post('status') ? 'Y' : 'N',
			'title' => serialize($input_title),
			'img_title_alt' => serialize($input_img_title_alt),
			'img' => serialize($input_img),
			'img_moblie' => serialize($input_img_moblie),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		// Set Session To View
		if ($update_banner) {

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'แก้ไข Banner',
				'event' => 'update',
				'ip' => $this->input->ip_address(),
			]);

			$this->session->set_flashdata('success', 'Update Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect($lang . '/backoffice/setting/banners');
	}

	private function ddoo_upload_banner($filename)
	{
		$config['upload_path'] = './storage/uploads/images/banners';
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
