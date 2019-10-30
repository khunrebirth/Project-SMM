<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends MX_Controller
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
		$this->load->model('Service_model');
		$this->load->model('Service_portfolio_model');

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
	 * Services
	 * ********************************/

	public function list_services()
	{
		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Services';
		$this->data['content'] = 'services/service_list';
		$this->data['services'] = $this->Service_model->get_service_all();

		$this->load->view('app', $this->data);
	}

	public function service_create()
	{
		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Services - Service - Add';
		$this->data['content'] = 'services/service_create';

		$this->load->view('app', $this->data);
	}

	public function service_store()
	{
		// Handle Image
		$meta_og_image_en = '';
		$meta_og_image_th = '';
		$icon_en = '';
		$icon_th = '';
		$img_on_navbar_en = '';
		$img_on_navbar_th = '';
		$content_top_img_en = '';
		$content_top_img_th = '';
		$content_bottom_img_en = '';
		$content_bottom_img_th = '';
		$banner_img_en = '';
		$banner_img_th = '';

		if (isset($_FILES['meta_og_image_en']) && $_FILES['meta_og_image_en']['name'] != '') {
			$meta_og_image_en = $this->ddoo_upload_service('meta_og_image_en');
		}

		if (isset($_FILES['meta_og_image_th']) && $_FILES['meta_og_image_th']['name'] != '') {
			$meta_og_image_th = $this->ddoo_upload_service('meta_og_image_th');
		}

		if (isset($_FILES['icon_en']) && $_FILES['icon_en']['name'] != '') {
			$icon_en = $this->ddoo_upload_service('icon_en');
		}

		if (isset($_FILES['icon_th']) && $_FILES['icon_th']['name'] != '') {
			$icon_th = $this->ddoo_upload_service('icon_th');
		}

		if (isset($_FILES['img_on_navbar_en']) && $_FILES['img_on_navbar_en']['name'] != '') {
			$img_on_navbar_en = $this->ddoo_upload_service('img_on_navbar_en');
		}

		if (isset($_FILES['img_on_navbar_th']) && $_FILES['img_on_navbar_th']['name'] != '') {
			$img_on_navbar_th = $this->ddoo_upload_service('img_on_navbar_th');
		}

		if (isset($_FILES['content_top_img_en']) && $_FILES['content_top_img_en']['name'] != '') {
			$content_top_img_en = $this->ddoo_upload_service('content_top_img_en');
		}

		if (isset($_FILES['content_top_img_th']) && $_FILES['content_top_img_th']['name'] != '') {
			$content_top_img_th = $this->ddoo_upload_service('content_top_img_th');
		}

		if (isset($_FILES['content_bottom_img_en']) && $_FILES['content_bottom_img_en']['name'] != '') {
			$content_bottom_img_en = $this->ddoo_upload_service('content_bottom_img_en');
		}

		if (isset($_FILES['content_bottom_img_th']) && $_FILES['content_bottom_img_th']['name'] != '') {
			$content_bottom_img_th = $this->ddoo_upload_service('content_bottom_img_th');
		}

		if (isset($_FILES['banner_img_en']) && $_FILES['banner_img_en']['name'] != '') {
			$banner_img_en = $this->ddoo_upload_banner('banner_img_en');
		}

		if (isset($_FILES['banner_img_th']) && $_FILES['banner_img_th']['name'] != '') {
			$banner_img_th = $this->ddoo_upload_banner('banner_img_th');
		}

		// Filter Data
		$input_meta_title = ['en' => $this->input->post('meta_tag_title_en'), 'th' => $this->input->post('meta_tag_title_th')];
		$input_meta_description = ['en' => $this->input->post('meta_tag_description_en'), 'th' => $this->input->post('meta_tag_description_th')];
		$input_meta_keyword = ['en' => $this->input->post('meta_tag_keywords_en'), 'th' => $this->input->post('meta_tag_keywords_th')];
		$input_img_og_twitter = ['en' => $meta_og_image_en, 'th' => $meta_og_image_th];
		$input_icon = ['en' => $icon_en, 'th' => $icon_th];
		$input_img_on_navbar = ['en' => $img_on_navbar_en, 'th' => $img_on_navbar_th];
		$input_title = ['en' => $this->input->post('title_en'), 'th' => $this->input->post('title_th')];
		$input_content_top_title = ['en' => $this->input->post('content_top_title_en'), 'th' => $this->input->post('content_top_title_th')];
		$input_content_top_img = ['en' => $content_top_img_en, 'th' => $content_top_img_th];
		$input_content_top_body = ['en' => $this->input->post('content_top_body_en'), 'th' => $this->input->post('content_top_body_th')];
		$input_content_bottom_title = ['en' => $this->input->post('content_bottom_title_en'), 'th' => $this->input->post('content_bottom_title_th')];
		$input_content_bottom_img = ['en' => $content_bottom_img_en, 'th' => $content_bottom_img_th];
		$input_content_bottom_body = ['en' => $this->input->post('content_bottom_body_en'), 'th' => $this->input->post('content_bottom_body_th')];
		$input_text_button = ['en' => $this->input->post('text_button_en'), 'th' => $this->input->post('text_button_th')];
		$input_banner_img = ['en' => $banner_img_en, 'th' => $banner_img_th];
		$input_banner_img_title_alt = ['en' => $this->input->post('banner_img_title_alt_en'), 'th' => $this->input->post('banner_img_title_alt_th')];
		$input_banner_title = ['en' => $this->input->post('banner_title_en'), 'th' => $this->input->post('banner_title_th')];
		$slug_en = slugify($this->input->post('title_en'));
		$slug_th = smm_slug_th($this->input->post('title_th'));
		$slug = ['en' => $slug_en, 'th' => $slug_th];

		// Add Data
		$add_service = $this->Service_model->insert_service([
			'meta_tag_title' => serialize($input_meta_title),
			'meta_tag_description' => serialize($input_meta_description),
			'meta_tag_keywords' => serialize($input_meta_keyword),
			'img_og_twitter' => serialize($input_img_og_twitter),
			'banner_img' => serialize($input_banner_img),
			'banner_img_title_alt' => serialize($input_banner_img_title_alt),
			'banner_title' => serialize($input_banner_title),
			'icon' => serialize($input_icon),
			'img_on_navbar' => serialize($input_img_on_navbar),
			'title' => serialize($input_title),
			'content_top_img' => serialize($input_content_top_img),
			'content_top_title' => serialize($input_content_top_title),
			'content_top_body' => serialize($input_content_top_body),
			'slug' => serialize($slug),
			'content_bottom_img' => serialize($input_content_bottom_img),
			'content_bottom_title' => serialize($input_content_bottom_title),
			'content_bottom_body' => serialize($input_content_bottom_body),
			'text_button' => serialize($input_text_button)
		]);

		// Set Session To View
		if ($add_service) {

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'เพิ่ม Service (Services Page)',
				'event' => 'add',
				'ip' => $this->input->ip_address(),
			]);

			$this->session->set_flashdata('success', 'Add Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect($this->lang . '/backoffice/page/services/list-services');
	}

	public function service_edit($lang, $service_id)
	{
		$service = $this->Service_model->get_service_by_id($service_id);
		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Services - Service - Edit ('. unserialize($service->title)['th'] . ')';
		$this->data['content'] = 'services/service_edit';
		$this->data['service'] = $service;

		$this->load->view('app', $this->data);
	}

	public function service_update($lang, $service_id)
	{
		// Get Old Data
		$service = $this->Service_model->get_service_by_id($service_id);

		// Handle Image
		$meta_og_image_en = unserialize($service->img_og_twitter)['en'];
		$meta_og_image_th = unserialize($service->img_og_twitter)['th'];
		$icon_en = unserialize($service->icon)['en'];
		$icon_th = unserialize($service->icon)['th'];
		$img_on_navbar_en = unserialize($service->img_on_navbar)['en'];
		$img_on_navbar_th = unserialize($service->img_on_navbar)['th'];
		$content_top_img_en = unserialize($service->content_top_img)['en'];
		$content_top_img_th = unserialize($service->content_top_img)['th'];
		$content_bottom_img_en = unserialize($service->content_bottom_img)['en'];
		$content_bottom_img_th = unserialize($service->content_bottom_img)['th'];
		$banner_img_en = unserialize($service->banner_img)['th'];
		$banner_img_th = unserialize($service->banner_img)['th'];

		if (isset($_FILES['meta_og_image_en']) && $_FILES['meta_og_image_en']['name'] != '') {
			$meta_og_image_en = $this->ddoo_upload_service('meta_og_image_en');
		}

		if (isset($_FILES['meta_og_image_th']) && $_FILES['meta_og_image_th']['name'] != '') {
			$meta_og_image_th = $this->ddoo_upload_service('meta_og_image_th');
		}

		if (isset($_FILES['icon_en']) && $_FILES['icon_en']['name'] != '') {
			$icon_en = $this->ddoo_upload_service('icon_en');
		}

		if (isset($_FILES['icon_th']) && $_FILES['icon_th']['name'] != '') {
			$icon_th = $this->ddoo_upload_service('icon_th');
		}

		if (isset($_FILES['img_on_navbar_en']) && $_FILES['img_on_navbar_en']['name'] != '') {
			$icon_en = $this->ddoo_upload_service('img_on_navbar_en');
		}

		if (isset($_FILES['img_on_navbar_th']) && $_FILES['img_on_navbar_th']['name'] != '') {
			$icon_th = $this->ddoo_upload_service('img_on_navbar_th');
		}

		if (isset($_FILES['content_top_img_en']) && $_FILES['content_top_img_en']['name'] != '') {
			$content_top_img_en = $this->ddoo_upload_service('content_top_img_en');
		}

		if (isset($_FILES['content_top_img_th']) && $_FILES['content_top_img_th']['name'] != '') {
			$content_top_img_th = $this->ddoo_upload_service('content_top_img_th');
		}

		if (isset($_FILES['content_bottom_img_en']) && $_FILES['content_bottom_img_en']['name'] != '') {
			$content_bottom_img_en = $this->ddoo_upload_service('content_bottom_img_en');
		}

		if (isset($_FILES['content_bottom_img_th']) && $_FILES['content_bottom_img_th']['name'] != '') {
			$content_bottom_img_th = $this->ddoo_upload_service('content_bottom_img_th');
		}

		if (isset($_FILES['banner_img_en']) && $_FILES['banner_img_en']['name'] != '') {
			$banner_img_en = $this->ddoo_upload_banner('banner_img_en');
		}

		if (isset($_FILES['banner_img_th']) && $_FILES['banner_img_th']['name'] != '') {
			$banner_img_th = $this->ddoo_upload_banner('banner_img_th');
		}

		// Filter Data
		$input_meta_title = ['en' => $this->input->post('meta_tag_title_en'), 'th' => $this->input->post('meta_tag_title_th')];
		$input_meta_description = ['en' => $this->input->post('meta_tag_description_en'), 'th' => $this->input->post('meta_tag_description_th')];
		$input_meta_keyword = ['en' => $this->input->post('meta_tag_keywords_en'), 'th' => $this->input->post('meta_tag_keywords_th')];
		$input_img_og_twitter = ['en' => $meta_og_image_en, 'th' => $meta_og_image_th];
		$input_icon = ['en' => $icon_en, 'th' => $icon_th];
		$input_img_on_navbar = ['en' => $img_on_navbar_en, 'th' => $img_on_navbar_th];
		$input_title = ['en' => $this->input->post('title_en'), 'th' => $this->input->post('title_th')];
		$input_content_top_title = ['en' => $this->input->post('content_top_title_en'), 'th' => $this->input->post('content_top_title_th')];
		$input_content_top_img = ['en' => $content_top_img_en, 'th' => $content_top_img_th];
		$input_content_top_body = ['en' => $this->input->post('content_top_body_en'), 'th' => $this->input->post('content_top_body_th')];
		$input_content_bottom_title = ['en' => $this->input->post('content_bottom_title_en'), 'th' => $this->input->post('content_bottom_title_th')];
		$input_content_bottom_img = ['en' => $content_bottom_img_en, 'th' => $content_bottom_img_th];
		$input_content_bottom_body = ['en' => $this->input->post('content_bottom_body_en'), 'th' => $this->input->post('content_bottom_body_th')];
		$input_text_button = ['en' => $this->input->post('text_button_en'), 'th' => $this->input->post('text_button_th')];
		$input_banner_img = ['en' => $banner_img_en, 'th' => $banner_img_th];
		$input_banner_img_title_alt = ['en' => $this->input->post('banner_img_title_alt_en'), 'th' => $this->input->post('banner_img_title_alt_th')];
		$input_banner_title = ['en' => $this->input->post('banner_title_en'), 'th' => $this->input->post('banner_title_th')];
		$slug_en = slugify($this->input->post('title_en'));
		$slug_th = smm_slug_th($this->input->post('title_th'));
		$slug = ['en' => $slug_en, 'th' => $slug_th];

		// Update Data
		$update_service = $this->Service_model->update_service_by_id($service_id, [
			'meta_tag_title' => serialize($input_meta_title),
			'meta_tag_description' => serialize($input_meta_description),
			'meta_tag_keywords' => serialize($input_meta_keyword),
			'img_og_twitter' => serialize($input_img_og_twitter),
			'banner_img' => serialize($input_banner_img),
			'banner_img_title_alt' => serialize($input_banner_img_title_alt),
			'banner_title' => serialize($input_banner_title),
			'icon' => serialize($input_icon),
			'img_on_navbar' => serialize($input_img_on_navbar),
			'title' => serialize($input_title),
			'content_top_img' => serialize($input_content_top_img),
			'content_top_title' => serialize($input_content_top_title),
			'content_top_body' => serialize($input_content_top_body),
			'slug' => serialize($slug),
			'content_bottom_img' => serialize($input_content_bottom_img),
			'content_bottom_title' => serialize($input_content_bottom_title),
			'content_bottom_body' => serialize($input_content_bottom_body),
			'text_button' => serialize($input_text_button),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		// Set Session To View
		if ($update_service) {

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'แก้ไข Service (Services Page)',
				'event' => 'update',
				'ip' => $this->input->ip_address(),
			]);

			$this->session->set_flashdata('success', 'Update Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect($this->lang . '/backoffice/page/services/list-services');
	}

	public function service_destroy($lang, $service_id)
	{
		$status = 500;
		$response['success'] = 0;

		$service = $this->Service_model->delete_service_by_id($service_id);

		if ($service != false) {
			$status = 200;
			$response['success'] = 1;

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'ลบ Service (Services Page)',
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
	 * Ports
	 * ********************************/

	public function list_service_portfolios($lang, $service_id)
	{
		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Services';
		$this->data['content'] = 'services/port_list';
		$this->data['service'] = $service = $this->Service_model->get_service_by_id($service_id);
		$this->data['portfolios'] =  $this->Service_portfolio_model->get_service_portfolio_by_service_id($service_id);

		$this->load->view('app', $this->data);
	}

	public function service_portfolio_create($lang, $service_id)
	{
		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Services - Portfolio - Add';
		$this->data['content'] = 'services/port_create';
		$this->data['service'] = $service = $this->Service_model->get_service_by_id($service_id);

		$this->load->view('app', $this->data);
	}

	public function service_portfolio_store($lang, $service_id)
	{
		// Handle Image
		$img_en = '';
		$img_th = '';

		if (isset($_FILES['img_en']) && $_FILES['img_en']['name'] != '') {
			$img_en = $this->ddoo_upload_service('img_en');
		}

		if (isset($_FILES['img_th']) && $_FILES['img_th']['name'] != '') {
			$img_th = $this->ddoo_upload_service('img_th');
		}

		// Filter Data
		$input_img = ['en' => $img_en, 'th' => $img_th];
		$input_title = ['en' => $this->input->post('img_title_alt_en'), 'th' => $this->input->post('img_title_alt_th')];

		// Add Data
		$add_service = $this->Service_portfolio_model->insert_service_port([
			'img' => serialize($input_img),
			'img_title_alt' => serialize($input_title),
			'service_id' => $service_id
		]);

		// Set Session To View
		if ($add_service) {

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'เพิ่ม Portfolio (Services Page)',
				'event' => 'add',
				'ip' => $this->input->ip_address(),
			]);

			$this->session->set_flashdata('success', 'Add Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect($this->lang . '/backoffice/page/services/list-service-ports/' . $service_id);
	}

	public function service_portfolio_edit($lang, $service_id, $portfolio_id)
	{
		$service = $this->Service_model->get_service_by_id($service_id);

		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Services - Portfolio - Edit';
		$this->data['content'] = 'services/port_edit';
		$this->data['service'] = $service;
		$this->data['portfolio'] =  $this->Service_portfolio_model->get_service_portfolio_by_id($portfolio_id);

		$this->load->view('app', $this->data);
	}

	public function service_portfolio_update($lang, $service_id, $portfolio_id)
	{
		// Get Old data
		$portfolio = $this->Service_portfolio_model->get_service_portfolio_by_id($portfolio_id);

		// Handle Image
		$img_en = unserialize($portfolio->img)['en'];
		$img_th = unserialize($portfolio->img)['th'];

		if (isset($_FILES['img_en']) && $_FILES['img_en']['name'] != '') {
			$img_en = $this->ddoo_upload_service('img_en');
		}

		if (isset($_FILES['img_th']) && $_FILES['img_th']['name'] != '') {
			$img_th = $this->ddoo_upload_service('img_th');
		}

		// Filter Data
		$input_img = ['en' => $img_en, 'th' => $img_th];
		$input_title = ['en' => $this->input->post('img_title_alt_en'), 'th' => $this->input->post('img_title_alt_th')];

		// Update Data
		$update_client = $this->Service_portfolio_model->update_service_portfolio_by_id($portfolio_id, [
			'img' => serialize($input_img),
			'img_title_alt' => serialize($input_title),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		// Set Session To View
		if ($update_client) {

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'แก้ไข Portfolio (Services Page)',
				'event' => 'update',
				'ip' => $this->input->ip_address(),
			]);

			$this->session->set_flashdata('success', 'Update Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect($this->lang . '/backoffice/page/services/list-service-ports/' . $service_id);
	}

	public function service_portfolio_destroy($lang, $portfolio_id)
	{
		$status = 500;
		$response['success'] = 0;

		$portfolio = $this->Service_portfolio_model->delete_service_portfolio_by_id($portfolio_id);

		if ($portfolio != false) {
			$status = 200;
			$response['success'] = 1;

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'ลบ Portfolio (Services Page)',
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

	public function ajax_get_service_and_sort_show()
	{
		$status = 500;
		$response['success'] = 0;

		$services = $this->Service_model->get_service_all();

		// Set Response
		if ($services != false) {
			$status = 200;
			$response['success'] = 1;

			$counter = 1;
			$html = '<ul id="sortable">';
			foreach ($services as $service) {
				$html .= '<li id="' . $service->id . '" data-sort="' . $service->sort . '"><span style="padding: 0px 10px;">' . $counter . '</span>' . unserialize($service->title)['en'] . '&nbsp;|&nbsp;' . unserialize($service->title)['th'] . '</li>';
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

	public function ajax_get_service_and_sort_update()
	{
		$status = 500;
		$response['success'] = 0;

		// Set Response
		if ($this->input->post()) {

			$bundle_id = $this->input->post('id');
			$bundle_sort = $this->input->post('sort');

			$counter = 1;
			foreach (array_combine($bundle_id, $bundle_sort) as $id => $sort) {

				$this->Service_model->update_service_by_id($id, [
					'sort' => $counter,
					'updated_at' => date('Y-m-d H:i:s')
				]);

				$counter++;
			}

			$status = 200;
			$response['success'] = 1;

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'จัดเรียง Service (Services Page)',
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

	public function ajax_get_service_portfolio_and_sort_show($lang, $service_id)
	{
		$status = 500;
		$response['success'] = 0;

		$portfolios = $this->Service_portfolio_model->get_service_portfolio_by_service_id($service_id);

		// Set Response
		if ($portfolios != false) {
			$status = 200;
			$response['success'] = 1;

			$counter = 1;
			$html = '<ul id="sortable">';
			foreach ($portfolios as $portfolio) {
				$html .= '<li id="' . $portfolio->id . '" data-sort="' . $portfolio->sort . '"><span style="padding: 0px 10px;">' . $counter . ' . </span><img alt="en" width="120px;" src="' . base_url('storage/uploads/images/services/' . unserialize($portfolio->img)['en']) . '">&nbsp;|&nbsp;<img alt="en" width="120px;" src="' . base_url('storage/uploads/images/services/' . unserialize($portfolio->img)['th']) . '"></li>';
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

	public function ajax_get_service_portfolio_and_sort_update()
	{
		$status = 500;
		$response['success'] = 0;

		// Set Response
		if ($this->input->post()) {

			$bundle_id = $this->input->post('id');
			$bundle_sort = $this->input->post('sort');

			$counter = 1;
			foreach (array_combine($bundle_id, $bundle_sort) as $id => $sort) {

				$this->Service_portfolio_model->update_service_portfolio_by_id($id, [
					'sort' => $counter,
					'updated_at' => date('Y-m-d H:i:s')
				]);

				$counter++;
			}

			$status = 200;
			$response['success'] = 1;

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'จัดเรียง Portfolio (Services Page)',
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

	private function ddoo_upload_service($filename)
	{
		$config['upload_path'] = './storage/uploads/images/services';
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

	private function ddoo_upload_banner($filename)
	{
		$config['upload_path'] = './storage/uploads/images/banners';
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
