<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends MX_Controller
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
		$this->load->model('Portfolio_category_model');
		$this->load->model('Portfolio_model');
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

	/***********************************
	 * Content
	 * ********************************/

	public function edit_content($lang, $id)
	{
		$page_portfolio_id = 11;

		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Portfolios - Content - Edit';
		$this->data['content'] = 'portfolios/content';
		$this->data['page_content'] = $this->Page_model->get_page_by_id($page_portfolio_id);

		$this->load->view('app', $this->data);
	}

	public function update_content($lang, $id)
	{
		$page_portfolio_id = $id;

		// Get Old data
		$page_content = $this->Page_model->get_page_by_id($page_portfolio_id);

		// Handle Image
		$meta_og_image_en = unserialize($page_content->img_og_twitter)['en'];
		$meta_og_image_th = unserialize($page_content->img_og_twitter)['th'];

		if (isset($_FILES['meta_og_image_en']) && $_FILES['meta_og_image_en']['name'] != '') {
			$meta_og_image_en = $this->ddoo_upload_portfolio('meta_og_image_en');
		}

		if (isset($_FILES['meta_og_image_th']) && $_FILES['meta_og_image_th']['name'] != '') {
			$meta_og_image_th = $this->ddoo_upload_portfolio('meta_og_image_th');
		}

		// Filter Data
		$input_meta_tag_title = ['en' => $this->input->post('meta_tag_title_en'), 'th' => $this->input->post('meta_tag_title_th')];
		$input_meta_tag_description = ['en' => $this->input->post('meta_tag_description_en'), 'th' => $this->input->post('meta_tag_description_th')];
		$input_meta_tag_keywords = ['en' => $this->input->post('meta_tag_keywords_en'), 'th' => $this->input->post('meta_tag_keywords_th')];
		$input_meta_tag_moblie_title = ['en' => $this->input->post('meta_tag_moblie_title_en'), 'th' => $this->input->post('meta_tag_moblie_title_th')];
		$input_meta_tag_moblie_description = ['en' => $this->input->post('meta_tag_moblie_description_en'), 'th' => $this->input->post('meta_tag_moblie_description_th')];
		$input_meta_tag_moblie_keywords = ['en' => $this->input->post('meta_tag_moblie_keywords_en'), 'th' => $this->input->post('meta_tag_moblie_keywords_th')];
		$input_img_og_twitter = ['en' => $meta_og_image_en, 'th' => $meta_og_image_th];

		// Update Data
		$update_page_content = $this->Page_model->update_page_by_id($page_portfolio_id, [
			'meta_tag_title' => serialize($input_meta_tag_title),
			'meta_tag_description' => serialize($input_meta_tag_description),
			'meta_tag_keywords' => serialize($input_meta_tag_keywords),
			'meta_tag_moblie_title' => serialize($input_meta_tag_moblie_title),
			'meta_tag_moblie_description' => serialize($input_meta_tag_moblie_description),
			'meta_tag_moblie_keywords' => serialize($input_meta_tag_moblie_keywords),
			'img_og_twitter' => serialize($input_img_og_twitter),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		// Set Session To View
		if ($update_page_content) {

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'แก้ไข Content (Portfolios Page)',
				'event' => 'update',
				'ip' => $this->input->ip_address(),
			]);

			$this->session->set_flashdata('success', 'Update Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect($this->lang . '/backoffice/page/portfolios/content/' . $page_portfolio_id);
	}

	/***********************************
	 * Category
	 * ********************************/

	public function list_category_portfolio()
	{
		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Portfolios';
		$this->data['content'] = 'portfolios/category_list';
		$this->data['categories'] = $this->Portfolio_category_model->get_portfolio_category_all();

		$this->load->view('app', $this->data);
	}

	public function category_portfolio_create()
	{
		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Portfolios - Category - Add';
		$this->data['content'] = 'portfolios/category_create';

		$this->load->view('app', $this->data);
	}

	public function category_portfolio_store()
	{
		// Handle Image
		$icon_en = '';
		$icon_th = '';

		if (isset($_FILES['icon_en']) && $_FILES['icon_en']['name'] != '') {
			$icon_en = $this->ddoo_upload_portfolio('icon_en');
		}

		if (isset($_FILES['icon_th']) && $_FILES['icon_th']['name'] != '') {
			$icon_th = $this->ddoo_upload_portfolio('icon_th');
		}

		// Filter Data
		$input_icon = ['en' => $icon_en, 'th' => $icon_th];
		$input_title = ['en' => $this->input->post('title_en'), 'th' => $this->input->post('title_th')];

		// Add Data
		$add_category = $this->Portfolio_category_model->insert_portfolio_category([
			'icon' => serialize($input_icon),
			'title' => serialize($input_title)
		]);

		// Set Session To View
		if ($add_category) {

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'เพิ่ม Category (Portfolios Page)',
				'event' => 'add',
				'ip' => $this->input->ip_address(),
			]);

			$this->session->set_flashdata('success', 'Add Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect($this->lang . '/backoffice/page/portfolios/list-category-portfolios');
	}

	public function category_portfolio_edit($lang, $portfolio_category_id)
	{
		$category = $this->Portfolio_category_model->get_portfolio_category_by_id($portfolio_category_id);

		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Portfolios - Category - Edit ('. unserialize($category->title)['th'] . ')';
		$this->data['content'] = 'portfolios/category_edit';
		$this->data['category'] = $category;

		$this->load->view('app', $this->data);
	}

	public function category_portfolio_update($lang, $portfolio_category_id)
	{
		// Get Old Data
		$category = $this->Portfolio_category_model->get_portfolio_category_by_id($portfolio_category_id);

		// Handle Image
		$icon_en = unserialize($category->icon)['en'];
		$icon_th = unserialize($category->icon)['th'];

		if (isset($_FILES['icon_en']) && $_FILES['icon_en']['name'] != '') {
			$icon_en = $this->ddoo_upload_portfolio('icon_en');
		}

		if (isset($_FILES['icon_th']) && $_FILES['icon_th']['name'] != '') {
			$icon_th = $this->ddoo_upload_portfolio('icon_th');
		}

		// Filter Data
		$input_icon = ['en' => $icon_en, 'th' => $icon_th];
		$input_title = ['en' => $this->input->post('title_en'), 'th' => $this->input->post('title_th')];

		// Add Data
		$update_category = $this->Portfolio_category_model->update_portfolio_category_by_id($portfolio_category_id, [
			'icon' => serialize($input_icon),
			'title' => serialize($input_title),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		// Set Session To View
		if ($update_category) {

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'แก้ไข Category (Portfolios Page)',
				'event' => 'update',
				'ip' => $this->input->ip_address(),
			]);

			$this->session->set_flashdata('success', 'Update Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect($this->lang . '/backoffice/page/portfolios/list-category-portfolios');
	}

	public function category_portfolio_destroy($lang, $portfolio_category_id)
	{
		$status = 500;
		$response['success'] = 0;

		$delete_portfolio_category = $this->Portfolio_category_model->delete_portfolio_category_by_id($portfolio_category_id);

		if ($delete_portfolio_category != false) {
			$status = 200;
			$response['success'] = 1;

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'ลบ Category (Portfolios Page)',
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
	 * Client
	 * ********************************/

	public function list_portfolio($lang, $portfolio_category_id)
	{
		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Portfolios';
		$this->data['content'] = 'portfolios/portfolio_list';
		$this->data['portfolios'] = $this->Portfolio_model->get_portfolio_by_category_id($portfolio_category_id);
		$this->data['category'] =  $this->Portfolio_category_model->get_portfolio_category_by_id($portfolio_category_id);

		$this->load->view('app', $this->data);
	}

	public function portfolio_create($lang, $portfolio_category_id)
	{
		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Portfolios - Portfolios - Add';
		$this->data['content'] = 'portfolios/portfolio_create';
		$this->data['category'] =  $this->Portfolio_category_model->get_portfolio_category_by_id($portfolio_category_id);
		$this->data['portfolio_categories'] = $this->Portfolio_category_model->get_portfolio_category_all();

		$this->load->view('app', $this->data);
	}

	public function portfolio_store($lang, $portfolio_category_id)
	{
		// Handle Image
		$img_en = '';
		$img_th = '';

		if (isset($_FILES['img_en']) && $_FILES['img_en']['name'] != '') {
			$img_en = $this->ddoo_upload_portfolio('img_en');
		}

		if (isset($_FILES['img_th']) && $_FILES['img_th']['name'] != '') {
			$img_th = $this->ddoo_upload_portfolio('img_th');
		}

		// Filter Data
		$input_img = ['en' => $img_en, 'th' => $img_th];
		$input_title = ['en' => $this->input->post('img_title_alt_en'), 'th' => $this->input->post('img_title_alt_th')];
		$input_text = ['en' => $this->input->post('text_en'), 'th' => $this->input->post('text_th')];

		// Add Data
		$add_portfolio = $this->Portfolio_model->insert_portfolio([
			'image' => serialize($input_img),
			'title' => serialize($input_title),
			'text' => serialize($input_text),
			'category_id' => $portfolio_category_id
		]);

		// Set Session To View
		if ($add_portfolio) {

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'เพิ่ม Portfolio (Portfolios Page)',
				'event' => 'add',
				'ip' => $this->input->ip_address(),
			]);

			$this->session->set_flashdata('success', 'Add Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect($this->lang . '/backoffice/page/portfolios/list-portfolios/' . $portfolio_category_id);
	}

	public function portfolio_edit($lang, $portfolio_category_id, $portfolio_id)
	{
		$portfolio = $this->Portfolio_model->get_portfolio_by_id($portfolio_id);

		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Portfolios - Portfolios - Edit(' . unserialize($portfolio->title)['th'] . ')';
		$this->data['content'] = 'portfolios/portfolio_edit';
		$this->data['portfolio'] = $portfolio;
		$this->data['category'] =  $this->Portfolio_category_model->get_portfolio_category_by_id($portfolio_category_id);

		$this->load->view('app', $this->data);
	}

	public function portfolio_update($lang, $portfolio_category_id, $portfolio_id)
	{
		// Get Old data
		$portfolio = $this->Portfolio_model->get_portfolio_by_id($portfolio_id);

		// Handle Image
		$img_en = unserialize($portfolio->image)['en'];
		$img_th = unserialize($portfolio->image)['th'];

		if (isset($_FILES['img_en']) && $_FILES['img_en']['name'] != '') {
			$img_en = $this->ddoo_upload_portfolio('img_en');
		}

		if (isset($_FILES['img_th']) && $_FILES['img_th']['name'] != '') {
			$img_th = $this->ddoo_upload_portfolio('img_th');
		}

		// Filter Data
		$input_img = ['en' => $img_en, 'th' => $img_th];
		$input_title = ['en' => $this->input->post('img_title_alt_en'), 'th' => $this->input->post('img_title_alt_th')];
		$input_text = ['en' => $this->input->post('text_en'), 'th' => $this->input->post('text_th')];

		// Update Data
		$update_portfolio = $this->Portfolio_model->update_portfolio_by_id($portfolio_id, [
			'image' => serialize($input_img),
			'title' => serialize($input_title),
			'text' => serialize($input_text),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		// Set Session To View
		if ($update_portfolio) {

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'แก้ไข Portfolio (Portfolios Page)',
				'event' => 'update',
				'ip' => $this->input->ip_address(),
			]);

			$this->session->set_flashdata('success', 'Update Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect($this->lang . '/backoffice/page/portfolios/list-portfolios/' . $portfolio_id);
	}

	public function portfolio_destroy($lang, $portfolio_id)
	{
		$status = 500;
		$response['success'] = 0;

		$delete_portfolio = $this->Portfolio_model->delete_portfolio_by_id($portfolio_id);

		if ($delete_portfolio != false) {
			$status = 200;
			$response['success'] = 1;

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'ลบ Portfolio (Portfolios Page)',
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

	public function ajax_get_category_portfolio_and_sort_show()
	{
		$status = 500;
		$response['success'] = 0;

		$client_categories = $this->Client_category_model->get_client_category_all();

		// Set Response
		if ($client_categories != false) {
			$status = 200;
			$response['success'] = 1;

			$counter = 1;
			$html = '<ul id="sortable">';
			foreach ($client_categories as $client_category) {
				$html .= '<li id="' . $client_category->id . '" data-sort="' . $client_category->sort . '"><span style="padding: 0px 10px;">' . $counter . '</span>' . unserialize($client_category->title)['en'] . '&nbsp;|&nbsp;' . unserialize($client_category->title)['th'] . '</li>';
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

	public function ajax_get_category_portfolio_and_sort_update()
	{
		$status = 500;
		$response['success'] = 0;

		// Set Response
		if ($this->input->post()) {

			$bundle_id = $this->input->post('id');
			$bundle_sort = $this->input->post('sort');

			$counter = 1;
			foreach (array_combine($bundle_id, $bundle_sort) as $id => $sort) {

				$this->Client_category_model->update_client_category_by_id($id, [
					'sort' => $counter,
					'updated_at' => date('Y-m-d H:i:s')
				]);

				$counter++;
			}

			$status = 200;
			$response['success'] = 1;

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'จัดเรียง Client Category (Clients Page)',
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
				$html .= '<li id="' . $client->id . '" data-sort="' . $client->sort . '"><span style="padding: 0px 10px;">' . $counter . ' . </span><img alt="en" width="120px;" src="' . base_url('storage/uploads/images/portfolios/' . unserialize($client->image)['en']) . '">&nbsp;|&nbsp;<img alt="en" width="120px;" src="' . base_url('storage/uploads/images/portfolios/' . unserialize($client->image)['th']) . '"></li>';
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

	private function ddoo_upload_portfolio($filename)
	{
		$config['upload_path'] = './storage/uploads/images/portfolios';
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
