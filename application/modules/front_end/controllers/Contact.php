<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MX_Controller
{

	private $lang = 'th';

    public function __construct()
    {
        parent::__construct();

        /*
        | -------------------------------------------------------------------------
        | SET UTILITIES
        | -------------------------------------------------------------------------
        */

        // Model
        $this->load->model('Contact_model');
		$this->load->model('Page_model');
		$this->load->model('Banner_model');

		// Language
		$this->lang = $this->config->item('language_abbr');
    }

    public function index()
    {
		/*
		| -------------------------------------------------------------------------
		| HANDLE
		| -------------------------------------------------------------------------
		*/

		$page_content = $this->Page_model->get_page_by_id(9);

		/*
		| -------------------------------------------------------------------------
		| SET DATA
		| -------------------------------------------------------------------------
		*/

		// Language
		$data['lang'] = $this->lang;

		// Title Page
		$data['title'] = unserialize($page_content->meta_tag_title)[$this->lang];
		$data['title_moblie'] = unserialize($page_content->meta_tag_moblie_title)[$this->lang];

		// Meta Tag
		$data['meta']['title'] = unserialize($page_content->meta_tag_title)[$this->lang];
		$data['meta']['description'] = unserialize($page_content->meta_tag_description)[$this->lang];
		$data['meta']['keyword'] = unserialize($page_content->meta_tag_keywords)[$this->lang];
		$data['meta']['title_moblie'] = unserialize($page_content->meta_tag_moblie_title)[$this->lang];
		$data['meta']['description_moblie'] = unserialize($page_content->meta_tag_moblie_description)[$this->lang];
		$data['meta']['keyword_moblie'] = unserialize($page_content->meta_tag_moblie_keywords)[$this->lang];

		// OG & Twitter
		$data['og_twitter']['title'] = unserialize($page_content->meta_tag_title)[$this->lang];
		$data['og_twitter']['description'] = unserialize($page_content->meta_tag_description)[$this->lang];
		$data['og_twitter']['title_moblie'] = unserialize($page_content->meta_tag_moblie_title)[$this->lang];
		$data['og_twitter']['description_moblie'] = unserialize($page_content->meta_tag_moblie_description)[$this->lang];
		$data['og_twitter']['image'] = base_url('storage/uploads/images/abouts/'. unserialize($page_content->img_og_twitter)[$this->lang]);

		// Content
		$data['content'] = 'contact';

		// Utilities
		$data['banner'] = $this->Banner_model->get_banner_active_by_id(5);

		/*
		| -------------------------------------------------------------------------
		| EXECUTE VIEWS
		| -------------------------------------------------------------------------
		*/

        $this->load->view('app', $data);
    }

    public function send()
    {
        $add_contact = $this->Contact_model->insert_contact([
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'company' => $this->input->post('company'),
			'detail' => $this->input->post('detail')
		]);

        if ($add_contact) {
			redirect($this->lang == 'th' ?  $this->lang . '/thanks' : $this->lang . '/ขอบคุณ');
        } else {
            $this->session->set_flashdata('error', 'Something wrong');
        }

		redirect('contact', 'refresh');
    }

	public function career_contact()
	{

		echo 'asd'; exit();

		// Handle File Upload
		$file_resume = '';
		$img = '';

		if (isset($_FILES['img']) && $_FILES['img']['name'] != '') {
			$img = $this->ddoo_upload_img_contact('img');
		}

		if (isset($_FILES['file_resume']) && $_FILES['file_resume']['name'] != '') {
			$file_resume = $this->do_upload_file_contact('file_resume');
		}

		// Handle Education
		$education = '';

		// Add Career Contact
		$add_career_contact = $this->Career_contact_model->insert_contact([
			'card_id' => $this->input->post('card_id'),
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'birthday' => $this->input->post('birthday'),
			'status' => $this->input->post('status'),
			'gender' => $this->input->post('gender'),
			'addr_no' => $this->input->post('addr_no'),
			'addr_soi' => $this->input->post('addr_soi'),
			'addr_road' => $this->input->post('addr_road'),
			'addr_district' => $this->input->post('addr_district'),
			'addr_amphoe' => $this->input->post('addr_amphoe'),
			'addr_province' => $this->input->post('addr_province'),
			'addr_zip' => $this->input->post('addr_zip'),
			'old_company_name' => $this->input->post('old_company_name'),
			'old_company_position' => $this->input->post('old_company_position'),
			'old_company_status' => '',
			'old_company_salary' => $this->input->post('old_company_salary'),
			'old_company_start_work' => $this->input->post('old_company_start_work'),
			'old_company_exp' => $this->input->post('old_company_exp'),
			'old_company_comment' => $this->input->post('old_company_comment'),
			'education' => $education,
			'file_resume' => $file_resume,
			'img' => $img
		]);

		if ($add_contact) {
			redirect($this->lang == 'th' ?  $this->lang . '/thanks' : $this->lang . '/ขอบคุณ');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect('contact', 'refresh');
	}

	private function ddoo_upload_img_contact($filename)
	{
		$config['upload_path'] = './storage/uploads/images/contact';
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

	public function do_upload_file_contact($filename)
	{
		$config['upload_path'] = './storage/uploads/files/contact';
		$config['allowed_types'] = 'pdf';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload($filename)) {
			$error = array('error' => $this->upload->display_errors());

			return false;
		} else {
			$data = array('upload_data' => $this->upload->data());

			return $data['upload_data']['file_name'];
		}
	}
}
