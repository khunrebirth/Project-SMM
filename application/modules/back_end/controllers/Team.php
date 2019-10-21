<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends MX_Controller
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
		$this->load->model('Team_model');
		$this->load->model('Team_page_model');

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
		$this->data['title'] = 'Page: Teams';
		$this->data['content'] = 'teams/list';
		$this->data['teams'] = $this->Team_model->get_team_all();

		$this->load->view('app', $this->data);
	}

	public function create()
	{
		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Teams - Add';
		$this->data['content'] = 'teams/list_create';
		$this->data['teams'] = $this->Team_model->get_team_all();

		$this->load->view('app', $this->data);
	}

	public function store()
	{
		// Handle Image
		$img_en = '';
		$img_th = '';

		if (isset($_FILES['img_en']) && $_FILES['img_en']['name'] != '') {
			$img_en = $this->ddoo_upload_team('img_en');
		}

		if (isset($_FILES['img_th']) && $_FILES['img_th']['name'] != '') {
			$img_th = $this->ddoo_upload_team('img_th');
		}

		// Filter Data
		$input_title = ['en' => $this->input->post('title_en'), 'th' => $this->input->post('title_th')];
		$input_body = ['en' => $this->input->post('body_en'), 'th' => $this->input->post('body_th')];
		$input_img = ['en' => $img_en, 'th' => $img_th];

		// Add Data
		$add_team = $this->Team_model->insert_team([
			'title' => serialize($input_title),
			'body' => serialize($input_body),
			'image' => serialize($input_img)
		]);

		// Set Session To View
		if ($add_team) {

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'เพิ่ม Team (Team Page)',
				'event' => 'add',
				'ip' => $this->input->ip_address(),
			]);

			$this->session->set_flashdata('success', 'Add Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect($this->lang . '/backoffice/page/teams/list-teams');
	}

	public function show() {}

	public function edit($lang, $id)
	{
		$team = $this->Team_model->get_team_by_id($id);

		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Teams - Edit (' . $team->title . ')';
		$this->data['content'] = 'teams/list_edit';
		$this->data['team'] = $team;

		$this->load->view('app', $this->data);
	}

	public function update($lang, $id)
	{
		// Get Old data
		$team = $this->Team_model->get_team_by_id($id);

		// Handle Image
		$img_en = unserialize($team->image)['en'];
		$img_th = unserialize($team->image)['th'];

		if (isset($_FILES['img_en']) && $_FILES['img_en']['name'] != '') {
			$img_en = $this->ddoo_upload_team('img_en');
		}

		if (isset($_FILES['img_th']) && $_FILES['img_th']['name'] != '') {
			$img_th = $this->ddoo_upload_team('img_th');
		}

		// Filter Data
		$input_title = ['en' => $this->input->post('title_en'), 'th' => $this->input->post('title_th')];
		$input_body = ['en' => $this->input->post('body_en'), 'th' => $this->input->post('body_th')];
		$input_img = ['en' => $img_en, 'th' => $img_th];

		// Add Data
		$update_team = $this->Team_model->update_team_by_id($id, [
			'title' => serialize($input_title),
			'body' => serialize($input_body),
			'image' => serialize($input_img),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		// Set Session To View
		if ($update_team) {

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'แก้ไข Team (Team Page)',
				'event' => 'update',
				'ip' => $this->input->ip_address(),
			]);

			$this->session->set_flashdata('success', 'Add Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect($lang . '/backoffice/page/teams/list-teams');
	}

	public function destroy($lang, $id)
	{
		$status = 500;
		$response['success'] = 0;

		$team = $this->Team_model->delete_team_by_id($id);

		if ($team != false) {
			$status = 200;
			$response['success'] = 1;

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'ลบ Team (Team Page)',
				'event' => 'delete',
				'ip' => $this->input->ip_address(),
			]);
		}

		return $this->output
			->set_status_header($status)
			->set_content_type('application/json')
			->set_output(json_encode($response));
	}

	public function edit_content($lang, $id)
	{
		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Teams - Content - Edit';
		$this->data['content'] = 'teams/content';
		$this->data['page_content'] =  $this->Team_page_model->get_team_page_by_id($id);

		$this->load->view('app', $this->data);
	}

	public function update_content($lang, $id)
	{
		// Get Old data
		$page_content = $this->Team_page_model->get_team_page_by_id($id);

		// Handle Image
		$meta_og_image_en = unserialize($page_content->img_og_twitter)['en'];
		$meta_og_image_th = unserialize($page_content->img_og_twitter)['th'];

		if (isset($_FILES['meta_og_image_en']) && $_FILES['meta_og_image_en']['name'] != '') {
			$meta_og_image_en = $this->ddoo_upload_team('meta_og_image_en');
		}

		if (isset($_FILES['meta_og_image_th']) && $_FILES['meta_og_image_th']['name'] != '') {
			$meta_og_image_th = $this->ddoo_upload_team('meta_og_image_th');
		}

		// Filter Data
		$input_meta_tag_title = ['en' => $this->input->post('meta_tag_title_en'), 'th' => $this->input->post('meta_tag_title_th')];
		$input_meta_tag_description = ['en' => $this->input->post('meta_tag_description_en'), 'th' => $this->input->post('meta_tag_description_th')];
		$input_meta_tag_keywords = ['en' => $this->input->post('meta_tag_keywords_en'), 'th' => $this->input->post('meta_tag_keywords_th')];
		$input_img_og_twitter = ['en' => $meta_og_image_en, 'th' => $meta_og_image_th];

		// Update Data
		$update_page_content = $this->Team_page_model->update_team_page_by_id($id, [
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
				'detail' => 'แก้ไข Content (Team Page)',
				'event' => 'update',
				'ip' => $this->input->ip_address(),
			]);

			$this->session->set_flashdata('success', 'Update Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect($lang . '/backoffice/page/teams/content/' . $id);
	}

	/***********************************
	 * Sorting (Using Ajax)
	 * ********************************/

	public function ajax_get_team_and_sort_show()
	{
		$status = 500;
		$response['success'] = 0;

		$teams = $this->Team_model->get_team_all();

		// Set Response
		if ($teams != false) {
			$status = 200;
			$response['success'] = 1;

			$counter = 1;
			$html = '<ul id="sortable">';
			foreach ($teams as $team) {
				$html .= '<li id="' . $team->id . '" data-sort="' . $team->sort . '"><span style="padding: 0px 10px;">' . $counter . '</span>' . unserialize($team->title)['en'] . '&nbsp;|&nbsp;' . unserialize($team->title)['th'] . '</li>';
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

	public function ajax_get_team_and_sort_update()
	{
		$status = 500;
		$response['success'] = 0;

		// Set Response
		if ($this->input->post()) {

			$bundle_id = $this->input->post('id');
			$bundle_sort = $this->input->post('sort');

			$counter = 1;
			foreach (array_combine($bundle_id, $bundle_sort) as $id => $sort) {

				$this->Team_model->update_team_by_id($id, [
					'sort' => $counter
				]);

				$counter++;
			}

			$status = 200;
			$response['success'] = 1;

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'จัดเรียง Team (Team Page)',
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

	private function ddoo_upload_team($filename)
	{
		$config['upload_path'] = './storage/uploads/images/teams';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;

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
