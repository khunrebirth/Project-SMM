<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends MX_Controller
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
		$this->load->model('Client_category_model');
		$this->load->model('Client_model');
		$this->load->model('Client_page_model');

		// Language
		$this->lang = $this->config->item('language_abbr');

		/*
		| -------------------------------------------------------------------------
		| HANDLE
		| -------------------------------------------------------------------------
		*/

		$this->data['user'] = $this->User_model->get_user_by_id($this->session->userdata('user_id'));
	}

	/***********************************
	 * Content
	 * ********************************/

	public function edit_content($lang, $id)
	{
		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Clients - Content - Edit';
		$this->data['content'] = 'clients/content';
		$this->data['page_content'] =  $this->Client_page_model->get_client_page_by_id($id);

		$this->load->view('app', $this->data);
	}

	public function update_content($lang, $id)
	{
		// Get Old data
		$page_content = $this->Client_page_model->get_client_page_by_id($id);

		// Handle Image
		$meta_og_image_en = unserialize($page_content->img_og_twitter)['en'];
		$meta_og_image_th = unserialize($page_content->img_og_twitter)['th'];

		if (isset($_FILES['meta_og_image_en']) && $_FILES['meta_og_image_en']['name'] != '') {
			$meta_og_image_en = $this->ddoo_upload_client('meta_og_image_en');
		}

		if (isset($_FILES['meta_og_image_th']) && $_FILES['meta_og_image_th']['name'] != '') {
			$meta_og_image_th = $this->ddoo_upload_client('meta_og_image_th');
		}

		// Filter Data
		$input_meta_tag_title = ['en' => $this->input->post('meta_tag_title_en'), 'th' => $this->input->post('meta_tag_title_th')];
		$input_meta_tag_description = ['en' => $this->input->post('meta_tag_description_en'), 'th' => $this->input->post('meta_tag_description_th')];
		$input_meta_tag_keywords = ['en' => $this->input->post('meta_tag_keywords_en'), 'th' => $this->input->post('meta_tag_keywords_th')];
		$input_img_og_twitter = ['en' => $meta_og_image_en, 'th' => $meta_og_image_th];

		// Update Data
		$update_page_content = $this->Client_page_model->update_client_page_by_id($id, [
			'meta_tag_title' => serialize($input_meta_tag_title),
			'meta_tag_description' => serialize($input_meta_tag_description),
			'meta_tag_keywords' => serialize($input_meta_tag_keywords),
			'img_og_twitter' => serialize($input_img_og_twitter),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		// Set Session To View
		if ($update_page_content) {

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'แก้ไข Content (Clients Page)',
				'event' => 'update',
				'ip' => $this->input->ip_address(),
			]);

			$this->session->set_flashdata('success', 'Update Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect($this->lang . '/backoffice/page/clients/content/' . $id);
	}

	/***********************************
	 * Category
	 * ********************************/

	public function list_category_client()
	{
		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Clients';
		$this->data['content'] = 'clients/category_list';
		$this->data['categories'] = $this->Client_category_model->get_client_category_all();

		$this->load->view('app', $this->data);
	}

	public function category_client_create()
	{
		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Clients - Category - Add';
		$this->data['content'] = 'clients/category_create';

		$this->load->view('app', $this->data);
	}

	public function category_client_store()
	{
		// Filter Data
		$input_title = ['en' => $this->input->post('title_en'), 'th' => $this->input->post('title_th')];

		// Add Data
		$add_category = $this->Client_category_model->insert_client_category([
			'title' => serialize($input_title)
		]);

		// Set Session To View
		if ($add_category) {

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'เพิ่ม Category (Client Page)',
				'event' => 'add',
				'ip' => $this->input->ip_address(),
			]);

			$this->session->set_flashdata('success', 'Add Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect($this->lang . '/backoffice/page/clients/list-category-clients');
	}

	public function category_client_edit($lang, $client_id)
	{
		$category = $this->Client_category_model->get_client_category_by_id($client_id);
		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Clients - Category - Edit ('. unserialize($category->title)['th'] . ')';
		$this->data['content'] = 'clients/category_edit';
		$this->data['category'] = $category;

		$this->load->view('app', $this->data);
	}

	public function category_client_update($lang, $client_id)
	{
		// Filter Data
		$input_title = ['en' => $this->input->post('title_en'), 'th' => $this->input->post('title_th')];

		// Add Data
		$update_category = $this->Client_category_model->update_client_category_by_id($client_id, [
			'title' => serialize($input_title),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		// Set Session To View
		if ($update_category) {

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'แก้ไข Category (Client Page)',
				'event' => 'update',
				'ip' => $this->input->ip_address(),
			]);

			$this->session->set_flashdata('success', 'Update Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect($this->lang . '/backoffice/page/clients/list-category-clients');
	}

	public function category_client_destroy($lang, $client_id)
	{
		$status = 500;
		$response['success'] = 0;

		$category = $this->Client_category_model->delete_client_category_by_id($client_id);

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
	 * Client
	 * ********************************/

	public function list_client($lang, $client_category_id)
	{
		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Clients';
		$this->data['content'] = 'clients/client_list';
		$this->data['clients'] = $this->Client_model->get_client_by_category_id($client_category_id);
		$this->data['category'] =  $this->Client_category_model->get_client_category_by_id($client_category_id);

		$this->load->view('app', $this->data);
	}

	public function client_create($lang, $client_category_id)
	{
		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Clients - Clients - Add';
		$this->data['content'] = 'clients/client_create';
		$this->data['category'] =  $this->Client_category_model->get_client_category_by_id($client_category_id);

		$this->load->view('app', $this->data);
	}

	public function client_store($lang, $client_category_id)
	{
		// Handle Image
		$img_en = '';
		$img_th = '';

		if (isset($_FILES['img_en']) && $_FILES['img_en']['name'] != '') {
			$img_en = $this->ddoo_upload_client('img_en');
		}

		if (isset($_FILES['img_th']) && $_FILES['img_th']['name'] != '') {
			$img_th = $this->ddoo_upload_client('img_th');
		}

		// Filter Data
		$input_img = ['en' => $img_en, 'th' => $img_th];
		$input_title = ['en' => $this->input->post('img_title_alt_en'), 'th' => $this->input->post('img_title_alt_th')];

		// Add Data
		$add_client = $this->Client_model->insert_client([
			'image' => serialize($input_img),
			'title' => serialize($input_title),
			'category_id' => $client_category_id
		]);

		// Set Session To View
		if ($add_client) {

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'เพิ่ม Client (Clients Page)',
				'event' => 'add',
				'ip' => $this->input->ip_address(),
			]);

			$this->session->set_flashdata('success', 'Add Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect($this->lang . '/backoffice/page/clients/list-clients/' . $client_category_id);
	}

	public function client_edit($lang, $client_category_id, $client_id)
	{
		$client = $this->Client_model->get_client_by_id($client_id);

		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Clients - Clients - Edit(' . unserialize($client->title)['th'] . ')';
		$this->data['content'] = 'clients/client_edit';
		$this->data['client'] = $client;
		$this->data['category'] =  $this->Client_category_model->get_client_category_by_id($client_category_id);

		$this->load->view('app', $this->data);
	}

	public function client_update($lang, $client_category_id, $client_id)
	{
		// Get Old data
		$client = $this->Client_model->get_client_by_id($client_id);

		// Handle Image
		$img_en = unserialize($client->image)['en'];
		$img_th = unserialize($client->image)['th'];

		if (isset($_FILES['img_en']) && $_FILES['img_en']['name'] != '') {
			$img_en = $this->ddoo_upload_client('img_en');
		}

		if (isset($_FILES['img_th']) && $_FILES['img_th']['name'] != '') {
			$img_th = $this->ddoo_upload_client('img_th');
		}

		// Filter Data
		$input_img = ['en' => $img_en, 'th' => $img_th];
		$input_title = ['en' => $this->input->post('img_title_alt_en'), 'th' => $this->input->post('img_title_alt_th')];

		// Update Data
		$update_client = $this->Client_model->update_client_by_id($client_id, [
			'image' => serialize($input_img),
			'title' => serialize($input_title),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		// Set Session To View
		if ($update_client) {

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'แก้ไข Client (Clients Page)',
				'event' => 'update',
				'ip' => $this->input->ip_address(),
			]);

			$this->session->set_flashdata('success', 'Update Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect($this->lang . '/backoffice/page/clients/list-clients/' . $client_category_id);
	}

	public function client_destroy($lang, $client_id)
	{
		$status = 500;
		$response['success'] = 0;

		$client = $this->Client_model->delete_client_by_id($client_id);

		if ($client != false) {
			$status = 200;
			$response['success'] = 1;

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'ลบ Client (Client Page)',
				'event' => 'delete',
				'ip' => $this->input->ip_address(),
			]);
		}

		return $this->output
			->set_status_header($status)
			->set_content_type('application/json')
			->set_output(json_encode($response));
	}

	/***********************************
	 * Sorting (Using Ajax)
	 * ********************************/

	public function ajax_get_client_and_sort_show($lang, $category_id)
	{
		$status = 500;
		$response['success'] = 0;

		$clients = $this->Client_model->get_client_by_category_id($category_id);

		// Set Response
		if ($clients != false) {
			$status = 200;
			$response['success'] = 1;

			$counter = 1;
			$html = '<ul id="sortable">';
			foreach ($clients as $client) {
				$html .= '<li id="' . $client->id . '" data-sort="' . $client->sort . '"><span style="padding: 0px 10px;">' . $counter . ' . </span><img alt="en" width="120px;" src="' . base_url('storage/uploads/images/clients/' . unserialize($client->image)['en']) . '">&nbsp;|&nbsp;<img alt="en" width="120px;" src="' . base_url('storage/uploads/images/clients/' . unserialize($client->image)['th']) . '"></li>';
				$counter++;
			}
			$html .= '</ul>';

			$response['data'] = $html;
		}

		// Send Response
		return $this->output
			->set_status_header($status)
			->set_content_type('application/json')
			->set_output(json_encode($response));
	}

	public function ajax_get_client_and_sort_update()
	{
		$status = 500;
		$response['success'] = 0;

		// Set Response
		if ($this->input->post()) {

			$bundle_id = $this->input->post('id');
			$bundle_sort = $this->input->post('sort');

			$counter = 1;
			foreach (array_combine($bundle_id, $bundle_sort) as $id => $sort) {

				$this->Client_model->update_client_by_id($id, [
					'sort' => $counter,
					'updated_at' => date('Y-m-d H:i:s')
				]);

				$counter++;
			}

			$status = 200;
			$response['success'] = 1;

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'จัดเรียง Client (Clients Page)',
				'event' => 'sort_item',
				'ip' => $this->input->ip_address(),
			]);
		}

		// Send Response
		return $this->output
			->set_status_header($status)
			->set_content_type('application/json')
			->set_output(json_encode($response));
	}

	private function ddoo_upload_client($filename)
	{
		$config['upload_path'] = './storage/uploads/images/clients';
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
