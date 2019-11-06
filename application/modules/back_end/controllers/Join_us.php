<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Join_us extends MX_Controller
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
		$this->load->model('Career_model');
		$this->load->model('Career_gallery_model');

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
		$page_join_us_id = 8;

		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Join Us - Content - Edit';
		$this->data['content'] = 'join_us/content';
		$this->data['page_content'] =  $this->Page_model->get_page_by_id($page_join_us_id);

		$this->load->view('app', $this->data);
	}

	public function update_content($lang, $id)
	{
		$page_join_us_id = $id;

		// Get Old data
		$page_content = $this->Page_model->get_page_by_id($page_join_us_id);

		// Handle Image
		$meta_og_image_en = unserialize($page_content->img_og_twitter)['en'];
		$meta_og_image_th = unserialize($page_content->img_og_twitter)['th'];

		if (isset($_FILES['meta_og_image_en']) && $_FILES['meta_og_image_en']['name'] != '') {
			$meta_og_image_en = $this->ddoo_upload_join_us('meta_og_image_en');
		}

		if (isset($_FILES['meta_og_image_th']) && $_FILES['meta_og_image_th']['name'] != '') {
			$meta_og_image_th = $this->ddoo_upload_join_us('meta_og_image_th');
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

		// Update Data
		$update_page_content = $this->Page_model->update_page_by_id($page_join_us_id, [
			'meta_tag_title' => serialize($input_meta_tag_title),
			'meta_tag_description' => serialize($input_meta_tag_description),
			'meta_tag_keywords' => serialize($input_meta_tag_keywords),
			'meta_tag_moblie_title' => serialize($input_meta_tag_moblie_title),
			'meta_tag_moblie_description' => serialize($input_meta_tag_moblie_description),
			'meta_tag_moblie_keywords' => serialize($input_meta_tag_moblie_keywords),
			'img_og_twitter' => serialize($input_img_og_twitter),
			'content_left' => serialize($input_content_left),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		// Set Session To View
		if ($update_page_content) {

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'แก้ไข Content (Join Us Page)',
				'event' => 'update',
				'ip' => $this->input->ip_address(),
			]);

			$this->session->set_flashdata('success', 'Update Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect($lang . '/backoffice/page/join-us/content/' . $page_join_us_id);
	}

	/***********************************
	 * Careers
	 * ********************************/

	public function list_careers()
	{
		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Join Us - List Careers';
		$this->data['content'] = 'join_us/list_careers';
		$this->data['careers'] = $this->Career_model->get_career_all();

		$this->load->view('app', $this->data);
	}

	public function career_create()
	{
		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Join Us - Careers - Add';
		$this->data['content'] = 'join_us/list_careers_create';

		$this->load->view('app', $this->data);
	}

	public function career_store()
	{
		// Handle Image
		$meta_og_image_en = '';
		$meta_og_image_th = '';
		$img_cover_en = '';
		$img_cover_th = '';
		$img_cover_moblie_en = '';
		$img_cover_moblie_th = '';

		if (isset($_FILES['meta_og_image_en']) && $_FILES['meta_og_image_en']['name'] != '') {
			$meta_og_image_en = $this->ddoo_upload_join_us('meta_og_image_en');
		}

		if (isset($_FILES['meta_og_image_th']) && $_FILES['meta_og_image_th']['name'] != '') {
			$meta_og_image_th = $this->ddoo_upload_join_us('meta_og_image_th');
		}

		if (isset($_FILES['img_cover_en']) && $_FILES['img_cover_en']['name'] != '') {
			$img_cover_en = $this->ddoo_upload_join_us('img_cover_en');
		}

		if (isset($_FILES['img_cover_th']) && $_FILES['img_cover_th']['name'] != '') {
			$img_cover_th = $this->ddoo_upload_join_us('img_cover_th');
		}

		if (isset($_FILES['img_cover_moblie_en']) && $_FILES['img_cover_moblie_en']['name'] != '') {
			$img_cover_moblie_en = $this->ddoo_upload_join_us('img_cover_moblie_en');
		}

		if (isset($_FILES['img_cover_moblie_th']) && $_FILES['img_cover_moblie_th']['name'] != '') {
			$img_cover_moblie_th = $this->ddoo_upload_join_us('img_cover_moblie_th');
		}

		// Filter Data
		$input_meta_tag_title = ['en' => $this->input->post('meta_tag_title_en'), 'th' => $this->input->post('meta_tag_title_th')];
		$input_meta_tag_description = ['en' => $this->input->post('meta_tag_description_en'), 'th' => $this->input->post('meta_tag_description_th')];
		$input_meta_tag_keywords = ['en' => $this->input->post('meta_tag_keywords_en'), 'th' => $this->input->post('meta_tag_keywords_th')];
		$input_meta_tag_moblie_title = ['en' => $this->input->post('meta_tag_moblie_title_en'), 'th' => $this->input->post('meta_tag_moblie_title_th')];
		$input_meta_tag_moblie_description = ['en' => $this->input->post('meta_tag_moblie_description_en'), 'th' => $this->input->post('meta_tag_moblie_description_th')];
		$input_meta_tag_moblie_keywords = ['en' => $this->input->post('meta_tag_moblie_keywords_en'), 'th' => $this->input->post('meta_tag_moblie_keywords_th')];
		$input_img_og_twitter = ['en' => $meta_og_image_en, 'th' => $meta_og_image_th];
		$input_img_cover = ['en' => $img_cover_en, 'th' => $img_cover_th];
		$input_img_cover_moblie = ['en' => $img_cover_moblie_en, 'th' => $img_cover_moblie_th];
		$input_img_cover_title_alt = ['en' => $this->input->post('img_cover_title_alt_en'), 'th' => $this->input->post('img_cover_title_alt_th')];
		$input_title = ['en' => $this->input->post('title_en'), 'th' => $this->input->post('title_th')];
		$input_comment = ['en' => $this->input->post('comment_en'), 'th' => $this->input->post('comment_th')];
		$input_type = ['en' => $this->input->post('type_en'), 'th' => $this->input->post('type_th')];
		$input_num = ['en' => $this->input->post('num_en'), 'th' => $this->input->post('num_th')];
		$input_content = ['en' => $this->input->post('content_en'), 'th' => $this->input->post('content_th')];
		$slug_en = slugify($this->input->post('slug_en'));
		$slug_th = smm_slug_th($this->input->post('slug_th'));
		$slug = ['en' => $slug_en, 'th' => $slug_th];

		// Add Data
		$add_career = $this->Career_model->insert_career([
			'meta_tag_title' => serialize($input_meta_tag_title),
			'meta_tag_description' => serialize($input_meta_tag_description),
			'meta_tag_keywords' => serialize($input_meta_tag_keywords),
			'meta_tag_moblie_title' => serialize($input_meta_tag_moblie_title),
			'meta_tag_moblie_description' => serialize($input_meta_tag_moblie_description),
			'meta_tag_moblie_keywords' => serialize($input_meta_tag_moblie_keywords),
			'img_og_twitter' => serialize($input_img_og_twitter),
			'img_cover' => serialize($input_img_cover),
			'img_cover_moblie' => serialize($input_img_cover_moblie),
			'img_cover_title_alt' => serialize($input_img_cover_title_alt),
			'title' => serialize($input_title),
			'comment' => serialize($input_comment),
			'type' => serialize($input_type),
			'num' => serialize($input_num),
			'content' => serialize($input_content),
			'slug' => serialize($slug)
		]);

		// Set Session To View
		if ($add_career) {

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'เพิ่ม Career (Join Us Page)',
				'event' => 'add',
				'ip' => $this->input->ip_address(),
			]);

			$this->session->set_flashdata('success', 'Add Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect($this->lang . '/backoffice/page/join-us/list-careers');
	}

	public function career_edit($lang, $id)
	{
		$career = $this->Career_model->get_career_by_id($id);

		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Join Us - Careers - Edit (' . unserialize($career->title)['th'] . ')';
		$this->data['content'] = 'join_us/list_careers_edit';
		$this->data['career'] = $career;

		$this->load->view('app', $this->data);
	}

	public function career_update($lang, $id)
	{
		// Get Old data
		$career = $this->Career_model->get_career_by_id($id);

		// Handle Image
		$meta_og_image_en = unserialize($career->img_og_twitter)['en'];
		$meta_og_image_th = unserialize($career->img_og_twitter)['th'];
		$img_cover_en = unserialize($career->img_cover)['en'];
		$img_cover_th = unserialize($career->img_cover)['th'];
		$img_cover_moblie_en = unserialize($career->img_cover_moblie)['en'];
		$img_cover_moblie_th = unserialize($career->img_cover_moblie)['th'];

		if (isset($_FILES['meta_og_image_en']) && $_FILES['meta_og_image_en']['name'] != '') {
			$meta_og_image_en = $this->ddoo_upload_join_us('meta_og_image_en');
		}

		if (isset($_FILES['meta_og_image_th']) && $_FILES['meta_og_image_th']['name'] != '') {
			$meta_og_image_th = $this->ddoo_upload_join_us('meta_og_image_th');
		}

		if (isset($_FILES['img_cover_en']) && $_FILES['img_cover_en']['name'] != '') {
			$img_cover_en = $this->ddoo_upload_join_us('img_cover_en');
		}

		if (isset($_FILES['img_cover_th']) && $_FILES['img_cover_th']['name'] != '') {
			$img_cover_th = $this->ddoo_upload_join_us('img_cover_th');
		}

		if (isset($_FILES['img_cover_moblie_en']) && $_FILES['img_cover_moblie_en']['name'] != '') {
			$img_cover_moblie_en = $this->ddoo_upload_join_us('img_cover_moblie_en');
		}

		if (isset($_FILES['img_cover_moblie_th']) && $_FILES['img_cover_moblie_th']['name'] != '') {
			$img_cover_moblie_th = $this->ddoo_upload_join_us('img_cover_moblie_th');
		}

		// Filter Data
		$input_meta_tag_title = ['en' => $this->input->post('meta_tag_title_en'), 'th' => $this->input->post('meta_tag_title_th')];
		$input_meta_tag_description = ['en' => $this->input->post('meta_tag_description_en'), 'th' => $this->input->post('meta_tag_description_th')];
		$input_meta_tag_keywords = ['en' => $this->input->post('meta_tag_keywords_en'), 'th' => $this->input->post('meta_tag_keywords_th')];
		$input_meta_tag_moblie_title = ['en' => $this->input->post('meta_tag_moblie_title_en'), 'th' => $this->input->post('meta_tag_moblie_title_th')];
		$input_meta_tag_moblie_description = ['en' => $this->input->post('meta_tag_moblie_description_en'), 'th' => $this->input->post('meta_tag_moblie_description_th')];
		$input_meta_tag_moblie_keywords = ['en' => $this->input->post('meta_tag_moblie_keywords_en'), 'th' => $this->input->post('meta_tag_moblie_keywords_th')];
		$input_img_og_twitter = ['en' => $meta_og_image_en, 'th' => $meta_og_image_th];
		$input_img_cover = ['en' => $img_cover_en, 'th' => $img_cover_th];
		$input_img_cover_moblie = ['en' => $img_cover_moblie_en, 'th' => $img_cover_moblie_th];
		$input_img_cover_title_alt = ['en' => $this->input->post('img_cover_title_alt_en'), 'th' => $this->input->post('img_cover_title_alt_th')];
		$input_title = ['en' => $this->input->post('title_en'), 'th' => $this->input->post('title_th')];
		$input_comment = ['en' => $this->input->post('comment_en'), 'th' => $this->input->post('comment_th')];
		$input_type = ['en' => $this->input->post('type_en'), 'th' => $this->input->post('type_th')];
		$input_num = ['en' => $this->input->post('num_en'), 'th' => $this->input->post('num_th')];
		$input_content = ['en' => $this->input->post('content_en'), 'th' => $this->input->post('content_th')];
		$slug_en = slugify($this->input->post('slug_en'));
		$slug_th = smm_slug_th($this->input->post('slug_th'));
		$slug = ['en' => $slug_en, 'th' => $slug_th];

		// Update Data
		$update_career = $this->Career_model->update_career_by_id($id, [
			'meta_tag_title' => serialize($input_meta_tag_title),
			'meta_tag_description' => serialize($input_meta_tag_description),
			'meta_tag_keywords' => serialize($input_meta_tag_keywords),
			'meta_tag_moblie_title' => serialize($input_meta_tag_moblie_title),
			'meta_tag_moblie_description' => serialize($input_meta_tag_moblie_description),
			'meta_tag_moblie_keywords' => serialize($input_meta_tag_moblie_keywords),
			'img_og_twitter' => serialize($input_img_og_twitter),
			'img_cover' => serialize($input_img_cover),
			'img_cover_moblie' => serialize($input_img_cover_moblie),
			'img_cover_title_alt' => serialize($input_img_cover_title_alt),
			'title' => serialize($input_title),
			'comment' => serialize($input_comment),
			'type' => serialize($input_type),
			'num' => serialize($input_num),
			'content' => serialize($input_content),
			'slug' => serialize($slug),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		// Set Session To View
		if ($update_career) {

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'แก้ไข Career (Join Us Page)',
				'event' => 'update',
				'ip' => $this->input->ip_address(),
			]);

			$this->session->set_flashdata('success', 'Update Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect($this->lang . '/backoffice/page/join-us/list-careers');
	}

	public function career_destroy($lang, $id)
	{
		$status = 500;
		$response['success'] = 0;

		$delete_career = $this->Career_model->delete_career_by_id($id);

		if ($delete_career != false) {
			$status = 200;
			$response['success'] = 1;

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'ลบ Career (Join Us Page)',
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
	 * Career - Galleries
	 * ********************************/

	public function list_career_galleries($lang, $career_id)
	{
		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Join Us - Career Galleries';
		$this->data['content'] = 'join_us/list_career_galleries';
		$this->data['career'] = $this->Career_model->get_career_by_id($career_id);
		$this->data['career_galleries'] =  $this->Career_gallery_model->get_career_gallery_by_career_id($career_id);

		$this->load->view('app', $this->data);
	}

	public function career_gallery_create($lang, $career_id)
	{
		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Join Us - Career Galleries - Add';
		$this->data['content'] = 'join_us/list_career_galleries_create';
		$this->data['career'] = $this->Career_model->get_career_by_id($career_id);

		$this->load->view('app', $this->data);
	}

	public function career_gallery_store($lang, $career_id)
	{
		// Handle Image
		$img_en = '';
		$img_th = '';

		if (isset($_FILES['img_en']) && $_FILES['img_en']['name'] != '') {
			$img_en = $this->ddoo_upload_join_us('img_en');
		}

		if (isset($_FILES['img_th']) && $_FILES['img_th']['name'] != '') {
			$img_th = $this->ddoo_upload_join_us('img_th');
		}

		// Filter Data
		$input_img = ['en' => $img_en, 'th' => $img_th];
		$input_img_title_alt = ['en' => $this->input->post('img_title_alt_en'), 'th' => $this->input->post('img_title_alt_th')];

		// Add Data
		$add_career_gallery = $this->Career_gallery_model->insert_career_gallery([
			'img' => serialize($input_img),
			'img_title_alt' => serialize($input_img_title_alt),
			'career_id' => $career_id
		]);

		// Set Session To View
		if ($add_career_gallery) {

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'เพิ่ม Career Gallery (Join Us Page)',
				'event' => 'add',
				'ip' => $this->input->ip_address(),
			]);

			$this->session->set_flashdata('success', 'Add Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect($this->lang . '/backoffice/page/join-us/list-career-galleries/' . $career_id);
	}

	public function career_gallery_edit($lang, $career_id, $career_gallery_id)
	{
		$career_gallery = $this->Career_gallery_model->get_career_gallery_by_id($career_gallery_id);

		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Join Us - Career Gallery - Edit';
		$this->data['content'] = 'join_us/list_career_galleries_edit';
		$this->data['career_gallery'] = $career_gallery;
		$this->data['career'] = $this->Career_model->get_career_by_id($career_id);

		$this->load->view('app', $this->data);
	}

	public function career_gallery_update($lang, $career_id, $career_gallery_id)
	{
		// Get Old data
		$career_gallery = $this->Career_gallery_model->get_career_gallery_by_id($career_gallery_id);

		// Handle Image
		$img_en = unserialize($career_gallery->img)['en'];
		$img_th = unserialize($career_gallery->img)['th'];

		if (isset($_FILES['img_en']) && $_FILES['img_en']['name'] != '') {
			$img_en = $this->ddoo_upload_join_us('img_en');
		}

		if (isset($_FILES['img_th']) && $_FILES['img_th']['name'] != '') {
			$img_th = $this->ddoo_upload_join_us('img_th');
		}

		// Filter Data
		$input_img = ['en' => $img_en, 'th' => $img_th];
		$input_img_title_alt = ['en' => $this->input->post('img_title_alt_en'), 'th' => $this->input->post('img_title_alt_th')];

		// Update Data
		$update_career_gallery = $this->Career_gallery_model->update_career_gallery_by_id($career_gallery_id, [
			'img' => serialize($input_img),
			'img_title_alt' => serialize($input_img_title_alt),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		// Set Session To View
		if ($update_career_gallery) {

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'แก้ไข Career Gallery (Join Us Page)',
				'event' => 'update',
				'ip' => $this->input->ip_address(),
			]);

			$this->session->set_flashdata('success', 'Update Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect($this->lang . '/backoffice/page/join-us/list-career-galleries/' . $career_id);
	}

	public function career_gallery_destroy($lang, $career_gallery_id)
	{
		$status = 500;
		$response['success'] = 0;

		$delete_career_gallery = $this->Career_gallery_model->delete_career_gallery_by_id($career_gallery_id);

		if ($delete_career_gallery != false) {
			$status = 200;
			$response['success'] = 1;

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'ลบ Career Gallery (Join Us Page)',
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

	public function ajax_get_career_and_sort_show()
	{
		$status = 500;
		$response['success'] = 0;

		$careers = $this->Career_model->get_career_all();

		// Set Response
		if ($careers != false) {
			$status = 200;
			$response['success'] = 1;

			$counter = 1;
			$html = '<ul id="sortable">';
			foreach ($careers as $career) {
				$html .= '<li id="' . $career->id . '" data-sort="' . $career->sort . '"><span style="padding: 0px 10px;">' . $counter . '</span>' . unserialize($career->title)['en'] . '&nbsp;|&nbsp;' . unserialize($career->title)['th'] . '</li>';
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

	public function ajax_get_career_and_sort_update()
	{
		$status = 500;
		$response['success'] = 0;

		// Set Response
		if ($this->input->post()) {

			$bundle_id = $this->input->post('id');
			$bundle_sort = $this->input->post('sort');

			$counter = 1;
			foreach (array_combine($bundle_id, $bundle_sort) as $id => $sort) {

				$this->Career_model->update_career_by_id($id, [
					'sort' => $counter,
					'updated_at' => date('Y-m-d H:i:s')
				]);

				$counter++;
			}

			$status = 200;
			$response['success'] = 1;

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'จัดเรียง Career (Join Us Page)',
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

	public function ajax_get_career_gallery_and_sort_show($lang, $career_id)
	{
		$status = 500;
		$response['success'] = 0;

		$career_galleries = $this->Career_gallery_model->get_career_gallery_by_career_id($career_id);

		// Set Response
		if ($career_galleries != false) {
			$status = 200;
			$response['success'] = 1;

			$counter = 1;
			$html = '<ul id="sortable">';
			foreach ($career_galleries as $career_gallery) {
				$html .= '<li id="' . $career_gallery->id . '" data-sort="' . $career_gallery->sort . '"><span style="padding: 0px 10px;">' . $counter . ' . </span><img alt="en" width="120px;" src="' . base_url('storage/uploads/images/join_us/' . unserialize($career_gallery->img)['en']) . '">&nbsp;|&nbsp;<img alt="en" width="120px;" src="' . base_url('storage/uploads/images/join_us/' . unserialize($career_gallery->img)['th']) . '"></li>';
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

	public function ajax_get_career_gallery_and_sort_update()
	{
		$status = 500;
		$response['success'] = 0;

		// Set Response
		if ($this->input->post()) {

			$bundle_id = $this->input->post('id');
			$bundle_sort = $this->input->post('sort');

			$counter = 1;
			foreach (array_combine($bundle_id, $bundle_sort) as $id => $sort) {

				$this->Career_gallery_model->update_career_gallery_by_id($id, [
					'sort' => $counter,
					'updated_at' => date('Y-m-d H:i:s')
				]);

				$counter++;
			}

			$status = 200;
			$response['success'] = 1;

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'จัดเรียง Career Gallery (Join Us Page)',
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

	private function ddoo_upload_join_us($filename)
	{
		$config['upload_path'] = './storage/uploads/images/join_us';
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
