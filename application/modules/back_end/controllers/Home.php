<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller
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
		$this->load->model('Top_client_model');
		$this->load->model('Top_portfolio_model');
		$this->load->model('Service_model');

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
		$page_home_id = 2;

		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Home - Content - Edit';
		$this->data['content'] = 'home/content';
		$this->data['page_content'] =  $this->Page_model->get_page_by_id($page_home_id);

		$this->load->view('app', $this->data);
	}

	public function update_content($lang, $id)
	{
		$page_home_id = $id;

		// Get Old data
		$page_content = $this->Page_model->get_page_by_id($page_home_id);

		// Handle Image
		$meta_og_image_en = unserialize($page_content->img_og_twitter)['en'];
		$meta_og_image_th = unserialize($page_content->img_og_twitter)['th'];

		if (isset($_FILES['meta_og_image_en']) && $_FILES['meta_og_image_en']['name'] != '') {
			$meta_og_image_en = $this->ddoo_upload_home('meta_og_image_en');
		}

		if (isset($_FILES['meta_og_image_th']) && $_FILES['meta_og_image_th']['name'] != '') {
			$meta_og_image_th = $this->ddoo_upload_home('meta_og_image_th');
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
		$update_page_content = $this->Page_model->update_page_by_id($page_home_id, [
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
				'detail' => 'แก้ไข Content (Home Page)',
				'event' => 'update',
				'ip' => $this->input->ip_address(),
			]);

			$this->session->set_flashdata('success', 'Update Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect($lang . '/backoffice/page/home/content/' . $page_home_id);
	}

	/***********************************
	 * Top Client
	 * ********************************/

	public function list_client()
	{
		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Home';
		$this->data['content'] = 'home/client_list';
		$this->data['clients'] = $this->Top_client_model->get_top_client_all();

		$this->load->view('app', $this->data);
	}

	public function client_create()
	{
		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Home - Top Clients - Add';
		$this->data['content'] = 'home/client_create';

		$this->load->view('app', $this->data);
	}

	public function client_store()
	{
		// Handle Image
		$img_en = '';
		$img_th = '';

		if (isset($_FILES['img_en']) && $_FILES['img_en']['name'] != '') {
			$img_en = $this->ddoo_upload_home('img_en');
		}

		if (isset($_FILES['img_th']) && $_FILES['img_th']['name'] != '') {
			$img_th = $this->ddoo_upload_home('img_th');
		}

		// Filter Data
		$input_img = ['en' => $img_en, 'th' => $img_th];
		$input_title = ['en' => $this->input->post('img_title_alt_en'), 'th' => $this->input->post('img_title_alt_th')];
		$input_text = ['en' => $this->input->post('text_en'), 'th' => $this->input->post('text_th')];

		$add_client = $this->Top_client_model->insert_top_client([
			'image' => serialize($input_img),
			'title' => serialize($input_title),
			'text' => serialize($input_text),
		]);

		// Set Session To View
		if ($add_client) {

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'เพิ่ม Top Client (Home Page)',
				'event' => 'add',
				'ip' => $this->input->ip_address(),
			]);

			$this->session->set_flashdata('success', 'Add Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect($this->lang . '/backoffice/page/home/list-top-clients');
	}

	public function client_edit($lang, $client_id)
	{
		$client = $this->Top_client_model->get_top_client_by_id($client_id);

		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Home - Top Clients - Edit(' . unserialize($client->title)['th'] . ')';
		$this->data['content'] = 'home/client_edit';
		$this->data['client'] = $client;

		$this->load->view('app', $this->data);
	}

	public function client_update($lang, $client_id)
	{
		// Get Old data
		$client = $this->Top_client_model->get_top_client_by_id($client_id);

		// Handle Image
		$img_en = unserialize($client->image)['en'];
		$img_th = unserialize($client->image)['th'];

		if (isset($_FILES['img_en']) && $_FILES['img_en']['name'] != '') {
			$img_en = $this->ddoo_upload_home('img_en');
		}

		if (isset($_FILES['img_th']) && $_FILES['img_th']['name'] != '') {
			$img_th = $this->ddoo_upload_home('img_th');
		}

		// Filter Data
		$input_img = ['en' => $img_en, 'th' => $img_th];
		$input_title = ['en' => $this->input->post('img_title_alt_en'), 'th' => $this->input->post('img_title_alt_th')];
		$input_text = ['en' => $this->input->post('text_en'), 'th' => $this->input->post('text_th')];

		// Update Data
		$update_client = $this->Top_client_model->update_top_client_by_id($client_id, [
			'image' => serialize($input_img),
			'title' => serialize($input_title),
			'text' => serialize($input_text),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		// Set Session To View
		if ($update_client) {

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'แก้ไข Top Client (Home Page)',
				'event' => 'update',
				'ip' => $this->input->ip_address(),
			]);

			$this->session->set_flashdata('success', 'Update Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect($this->lang . '/backoffice/page/home/list-top-clients');
	}

	public function client_destroy($lang, $client_id)
	{
		$status = 500;
		$response['success'] = 0;

		$delete_client = $this->Top_client_model->delete_top_client_by_id($client_id);

		if ($delete_client != false) {
			$status = 200;
			$response['success'] = 1;

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'ลบ Top Client (Home Page)',
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
	 * Top Portfolio
	 * ********************************/

	public function list_portfolio()
	{
		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Home';
		$this->data['content'] = 'home/portfolio_list';
		$this->data['portfolios'] = $this->Top_portfolio_model->get_top_portfolio_all();

		$this->load->view('app', $this->data);
	}

	public function portfolio_create()
	{
		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Home - Top Portfolios - Add';
		$this->data['content'] = 'home/portfolio_create';
		$this->data['services'] = $this->Service_model->get_service_all();

		$this->load->view('app', $this->data);
	}

	public function portfolio_store()
	{

		// 17 Service(video)
		if ($this->input->post('service') == 17) {

			$service = $this->Service_model->get_service_by_id($this->input->post('service'));

			// Filter Data
			$input_img = ['en' => $this->input->post('sort_url_en'), 'th' => $this->input->post('sort_url_th')];
			$input_text = ['en' => $this->input->post('text_en'), 'th' => $this->input->post('text_th')];

			// Add Data
			$add_portfolio = $this->Top_portfolio_model->insert_portfolio([
				'image' => serialize($input_img), // url
				'text' => serialize($input_text),

				'category_id' => $service->id,
				'category_title' => $service->title
			]);
		} else {

			$service = $this->Service_model->get_service_by_id($this->input->post('service'));

			// Handle Image
			$img_en = '';
			$img_th = '';

			if (isset($_FILES['img_en']) && $_FILES['img_en']['name'] != '') {
				$img_en = $this->ddoo_upload_home('img_en');
			}

			if (isset($_FILES['img_th']) && $_FILES['img_th']['name'] != '') {
				$img_th = $this->ddoo_upload_home('img_th');
			}

			// Filter Data
			$input_img = ['en' => $img_en, 'th' => $img_th];
			$input_title = ['en' => $this->input->post('img_title_alt_en'), 'th' => $this->input->post('img_title_alt_th')];
			$input_text = ['en' => $this->input->post('text_en'), 'th' => $this->input->post('text_th')];

			// Add Data
			$add_portfolio = $this->Top_portfolio_model->insert_portfolio([
				'image' => serialize($input_img),
				'title' => serialize($input_title),
				'text' => serialize($input_text),

				'category_id' => $service->id,
				'category_title' => $service->title
			]);
		}


		// Set Session To View
		if ($add_portfolio) {

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'เพิ่ม Top Portfolio (Home Page)',
				'event' => 'add',
				'ip' => $this->input->ip_address(),
			]);

			$this->session->set_flashdata('success', 'Add Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect($this->lang . '/backoffice/page/home/list-top-portfolios');
	}

	public function portfolio_edit($lang, $portfolio_id)
	{
		$portfolio = $this->Top_portfolio_model->get_top_portfolio_by_id($portfolio_id);

		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Home - Top Portfolios - Edit(' . unserialize($portfolio->title)['th'] . ')';
		$this->data['content'] = 'home/portfolio_edit';
		$this->data['portfolio'] = $portfolio;
		$this->data['services'] = $this->Service_model->get_service_all();

		$this->load->view('app', $this->data);
	}

	public function portfolio_update($lang, $portfolio_id)
	{
		// Get Old data
		$portfolio = $this->Portfolio_model->get_portfolio_by_id($portfolio_id);

		// 17 Service(video)
		if ($this->input->post('service_id') == 17) {

			// Filter Data
			$input_img = ['en' => $this->input->post('sort_url_en'), 'th' => $this->input->post('sort_url_th')];
			$input_text = ['en' => $this->input->post('text_en'), 'th' => $this->input->post('text_th')];

			// Update Data
			$update_portfolio = $this->Top_portfolio_model->update_top_portfolio_by_id($portfolio_id, [
				'image' => serialize($input_img), // url
				'text' => serialize($input_text),
				'updated_at' => date('Y-m-d H:i:s')
			]);

		} else {

			// Handle Image
			$img_en = unserialize($portfolio->image)['en'];
			$img_th = unserialize($portfolio->image)['th'];

			if (isset($_FILES['img_en']) && $_FILES['img_en']['name'] != '') {
				$img_en = $this->ddoo_upload_home('img_en');
			}

			if (isset($_FILES['img_th']) && $_FILES['img_th']['name'] != '') {
				$img_th = $this->ddoo_upload_home('img_th');
			}

			// Filter Data
			$input_img = ['en' => $img_en, 'th' => $img_th];
			$input_title = ['en' => $this->input->post('img_title_alt_en'), 'th' => $this->input->post('img_title_alt_th')];
			$input_text = ['en' => $this->input->post('text_en'), 'th' => $this->input->post('text_th')];

			// Update Data
			$update_portfolio = $this->Top_portfolio_model->update_top_portfolio_by_id($portfolio_id, [
				'image' => serialize($input_img),
				'title' => serialize($input_title),
				'text' => serialize($input_text),
				'updated_at' => date('Y-m-d H:i:s')
			]);
		}


		// Set Session To View
		if ($update_portfolio) {

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'แก้ไข Top Portfolio (Home Page)',
				'event' => 'update',
				'ip' => $this->input->ip_address(),
			]);

			$this->session->set_flashdata('success', 'Update Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect($this->lang . '/backoffice/page/home/list-top-portfolios');
	}

	public function portfolio_destroy($lang, $portfolio_id)
	{
		$status = 500;
		$response['success'] = 0;

		$delete_portfolio = $this->Top_portfolio_model->delete_top_portfolio_by_id($portfolio_id);

		if ($delete_portfolio != false) {
			$status = 200;
			$response['success'] = 1;

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'ลบ Top Portfolio (Home Page)',
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

	public function ajax_get_client_and_sort_show()
	{
		$status = 500;
		$response['success'] = 0;

		$clients = $this->Top_client_model->get_top_client_all();

		// Set Response
		if ($clients != false) {
			$status = 200;
			$response['success'] = 1;

			$counter = 1;
			$html = '<ul id="sortable">';
			foreach ($clients as $client) {
				$html .= '<li id="' . $client->id . '" data-sort="' . $client->sort . '"><span style="padding: 0px 10px;">' . $counter . ' . </span><img alt="en" width="120px;" src="' . base_url('storage/uploads/images/home/' . unserialize($client->image)['en']) . '">&nbsp;|&nbsp;<img alt="en" width="120px;" src="' . base_url('storage/uploads/images/home/' . unserialize($client->image)['th']) . '"></li>';
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

				$this->Top_client_model->update_top_client_by_id($id, [
					'sort' => $counter,
					'updated_at' => date('Y-m-d H:i:s')
				]);

				$counter++;
			}

			$status = 200;
			$response['success'] = 1;

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'จัดเรียง Top Client (Home Page)',
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

	public function ajax_get_portfolio_and_sort_show()
	{
		$status = 500;
		$response['success'] = 0;

		$portfolios = $this->Top_portfolio_model->get_top_portfolio_all();

		// Set Response
		if ($portfolios != false) {
			$status = 200;
			$response['success'] = 1;

			$counter = 1;
			$html = '<ul id="sortable">';
			foreach ($portfolios as $portfolio) {
				$html .= '<li id="' . $portfolio->id . '" data-sort="' . $portfolio->sort . '"><span style="padding: 0px 10px;">' . $counter . ' . </span><img alt="en" width="120px;" src="' . base_url('storage/uploads/images/home/' . unserialize($portfolio->image)['en']) . '">&nbsp;|&nbsp;<img alt="en" width="120px;" src="' . base_url('storage/uploads/images/home/' . unserialize($portfolio->image)['th']) . '"></li>';
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

	public function ajax_get_portfolio_and_sort_update()
	{
		$status = 500;
		$response['success'] = 0;

		// Set Response
		if ($this->input->post()) {

			$bundle_id = $this->input->post('id');
			$bundle_sort = $this->input->post('sort');

			$counter = 1;
			foreach (array_combine($bundle_id, $bundle_sort) as $id => $sort) {

				$this->Top_portfolio_model->update_top_portfolio_by_id($id, [
					'sort' => $counter,
					'updated_at' => date('Y-m-d H:i:s')
				]);

				$counter++;
			}

			$status = 200;
			$response['success'] = 1;

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'จัดเรียง Top Portfolio (Home Page)',
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

	private function ddoo_upload_home($filename)
	{
		$config['upload_path'] = './storage/uploads/images/home';
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
