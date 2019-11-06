<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tag extends MX_Controller
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
		$this->load->model('Tag_model');

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

	public function list_tag()
	{
		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Blogs';
		$this->data['content'] = 'tags/list';
		$this->data['tags'] = $this->Tag_model->get_tag_all();

		$this->load->view('app', $this->data);
	}

	public function create()
	{
		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Blogs - Tags - Add';
		$this->data['content'] = 'tags/list_create';

		$this->load->view('app', $this->data);
	}

	public function store()
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
		$input_meta_tag_title = ['en' => $this->input->post('meta_tag_title_en'), 'th' => $this->input->post('meta_tag_title_th')];
		$input_meta_tag_description = ['en' => $this->input->post('meta_tag_description_en'), 'th' => $this->input->post('meta_tag_description_th')];
		$input_meta_tag_keywords = ['en' => $this->input->post('meta_tag_keywords_en'), 'th' => $this->input->post('meta_tag_keywords_th')];
		$input_meta_tag_moblie_title = ['en' => $this->input->post('meta_tag_moblie_title_en'), 'th' => $this->input->post('meta_tag_moblie_title_th')];
		$input_meta_tag_moblie_description = ['en' => $this->input->post('meta_tag_moblie_description_en'), 'th' => $this->input->post('meta_tag_moblie_description_th')];
		$input_meta_tag_moblie_keywords = ['en' => $this->input->post('meta_tag_moblie_keywords_en'), 'th' => $this->input->post('meta_tag_moblie_keywords_th')];
		$input_img_og_twitter = ['en' => $meta_og_image_en, 'th' => $meta_og_image_th];
		$input_title = ['en' => $this->input->post('title_en'), 'th' => $this->input->post('title_th')];
		$slug_en = slugify($this->input->post('slug_en'));
		$slug_th = smm_slug_th($this->input->post('slug_th'));
		$slug = ['en' => $slug_en, 'th' => $slug_th];

		// Add Data
		$add_tag = $this->Tag_model->insert_tag([
			'meta_tag_title' => serialize($input_meta_tag_title),
			'meta_tag_description' => serialize($input_meta_tag_description),
			'meta_tag_keywords' => serialize($input_meta_tag_keywords),
			'meta_tag_moblie_title' => serialize($input_meta_tag_moblie_title),
			'meta_tag_moblie_description' => serialize($input_meta_tag_moblie_description),
			'meta_tag_moblie_keywords' => serialize($input_meta_tag_moblie_keywords),
			'img_og_twitter' => serialize($input_img_og_twitter),
			'title' => serialize($input_title),
			'slug' => serialize($slug)
		]);

		// Set Session To View
		if ($add_tag) {

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'เพิ่ม Tag (Blogs Page)',
				'event' => 'add',
				'ip' => $this->input->ip_address(),
			]);

			$this->session->set_flashdata('success', 'Add Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect($this->lang . '/backoffice/page/blogs/list-tags');
	}

	public function show() {}

	public function edit($lang, $id)
	{
		$tag = $this->Tag_model->get_tag_by_id($id);

		$this->data['lang'] = $this->lang;
		$this->data['title'] = 'Page: Blogs - Tags - Edit (' . unserialize($tag->title)['th'] . ')';
		$this->data['content'] = 'tags/list_edit';
		$this->data['tag'] = $tag;

		$this->load->view('app', $this->data);
	}

	public function update($lang, $id)
	{
		// Get Old data
		$tag = $this->Tag_model->get_tag_by_id($id);

		// Handle Image
		$meta_og_image_en = unserialize($tag->img_og_twitter)['en'];
		$meta_og_image_th = unserialize($tag->img_og_twitter)['th'];

		if (isset($_FILES['meta_og_image_en']) && $_FILES['meta_og_image_en']['name'] != '') {
			$meta_og_image_en = $this->ddoo_upload_blog('meta_og_image_en');
		}

		if (isset($_FILES['meta_og_image_th']) && $_FILES['meta_og_image_th']['name'] != '') {
			$meta_og_image_th = $this->ddoo_upload_blog('meta_og_image_th');
		}

		// Filter Data
		$input_meta_tag_title = ['en' => $this->input->post('meta_tag_title_en'), 'th' => $this->input->post('meta_tag_title_th')];
		$input_meta_tag_description = ['en' => $this->input->post('meta_tag_description_en'), 'th' => $this->input->post('meta_tag_description_th')];
		$input_meta_tag_keywords = ['en' => $this->input->post('meta_tag_keywords_en'), 'th' => $this->input->post('meta_tag_keywords_th')];
		$input_meta_tag_moblie_title = ['en' => $this->input->post('meta_tag_moblie_title_en'), 'th' => $this->input->post('meta_tag_moblie_title_th')];
		$input_meta_tag_moblie_description = ['en' => $this->input->post('meta_tag_moblie_description_en'), 'th' => $this->input->post('meta_tag_moblie_description_th')];
		$input_meta_tag_moblie_keywords = ['en' => $this->input->post('meta_tag_moblie_keywords_en'), 'th' => $this->input->post('meta_tag_moblie_keywords_th')];
		$input_img_og_twitter = ['en' => $meta_og_image_en, 'th' => $meta_og_image_th];
		$input_title = ['en' => $this->input->post('title_en'), 'th' => $this->input->post('title_th')];
		$slug_en = slugify($this->input->post('slug_en'));
		$slug_th = smm_slug_th($this->input->post('slug_th'));
		$slug = ['en' => $slug_en, 'th' => $slug_th];

		// Update Data
		$update_tag = $this->Tag_model->update_tag_by_id($id, [
			'meta_tag_title' => serialize($input_meta_tag_title),
			'meta_tag_description' => serialize($input_meta_tag_description),
			'meta_tag_keywords' => serialize($input_meta_tag_keywords),
			'meta_tag_moblie_title' => serialize($input_meta_tag_moblie_title),
			'meta_tag_moblie_description' => serialize($input_meta_tag_moblie_description),
			'meta_tag_moblie_keywords' => serialize($input_meta_tag_moblie_keywords),
			'img_og_twitter' => serialize($input_img_og_twitter),
			'title' => serialize($input_title),
			'slug' => serialize($slug),
			'updated_at' => date('Y-m-d H:i:s')
		]);

		// Set Session To View
		if ($update_tag) {

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'แก้ไข Tag (Blogs Page)',
				'event' => 'update',
				'ip' => $this->input->ip_address(),
			]);

			$this->session->set_flashdata('success', 'Update Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect($lang . '/backoffice/page/blogs/list-tags');
	}

	public function destroy($lang, $id)
	{
		$status = 500;
		$response['success'] = 0;

		$delete_tag = $this->Tag_model->delete_tag_by_id($id);

		if ($delete_tag != false) {
			$status = 200;
			$response['success'] = 1;

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'ลบ Tag (Blogs Page)',
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

	public function ajax_get_tag_and_sort_show()
	{
		$status = 500;
		$response['success'] = 0;

		$tags = $this->Tag_model->get_tag_all();

		// Set Response
		if ($tags != false) {
			$status = 200;
			$response['success'] = 1;

			$counter = 1;
			$html = '<ul id="sortable">';
			foreach ($tags as $tag) {
				$html .= '<li id="' . $tag->id . '" data-sort="' . $tag->sort . '"><span style="padding: 0px 10px;">' . $counter . '</span>' . unserialize($tag->title)['en'] . '&nbsp;|&nbsp;' . unserialize($tag->title)['th'] . '</li>';
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

	public function ajax_get_tag_and_sort_update()
	{
		$status = 500;
		$response['success'] = 0;

		// Set Response
		if ($this->input->post()) {

			$bundle_id = $this->input->post('id');
			$bundle_sort = $this->input->post('sort');

			$counter = 1;
			foreach (array_combine($bundle_id, $bundle_sort) as $id => $sort) {

				$this->Tag_model->update_tag_by_id($id, [
					'sort' => $counter,
					'updated_at' => date('Y-m-d H:i:s')
				]);

				$counter++;
			}

			$status = 200;
			$response['success'] = 1;

			logger_store([
				'user_id' => $this->data['user']->id,
				'detail' => 'จัดเรียง Tag (Blogs Page)',
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

	private function ddoo_upload_blog($filename)
	{
		$config['upload_path'] = './storage/uploads/images/blogs';
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
