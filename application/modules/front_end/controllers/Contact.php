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
		$this->load->model('Career_contact_model');
		$this->load->model('Page_model');
		$this->load->model('Banner_model');

		// Language
		$this->lang = $this->config->item('language_abbr');
    }

	private function load_css_critical()
	{
		return '<link rel="stylesheet" href="' . base_url('resources/front_end/css/style_contact.min.css') . '">';
	}

	private function load_js_critical()
	{
		return '';
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

		// Load CSS & JS Critical
		$data['css_critical'] = $this->load_css_critical();
		$data['js_critical'] = $this->load_js_critical();

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

		// Handle File Upload
		$file_resume = '';
		$img = '';

//		if (isset($_FILES['img']) && $_FILES['img']['name'] != '') {
//			$img = $this->ddoo_upload_img_contact('img');
//		}

		if (isset($_FILES['file_resume']) && $_FILES['file_resume']['name'] != '') {
			$file_resume = $this->do_upload_file_contact('file_resume');
		}

		// Handle Address
		$address = '';
		$address .= 'เลขที่ / หมู่บ้าน / คอนโด ' . $this->input->post('addr_no') . '<br>';
		$address .= 'ซอย ' . $this->input->post('addr_soi') . '<br>';
		$address .= 'ถนน ' . $this->input->post('addr_road') . '<br>';
		$address .= 'ตำบล ' . $this->input->post('addr_district') . '<br>';
		$address .= 'อำเภอ ' . $this->input->post('addr_amphoe') . '<br>';
		$address .= 'จังหวัด ' . $this->input->post('addr_province') . '<br>';
		$address .= 'รหัสไปรษณีย์ ' . $this->input->post('addr_zip') . '<br>';

		// Handle Education
		$education = '';
		$education .= 'ระดับการศึกษา (group 1): ' . $this->input->post('edu_level_group1') . '<br>';
		$education .= 'ชื่อ สถาบัน (group 1): ' . $this->input->post('edu_name_group1') . '<br>';
		$education .= 'คณะ (group 1): ' . $this->input->post('edu_pos_group1') . '<br>';
		$education .= 'ปี เริ่ม - จบ (group 1): ' . $this->input->post('edu_date_start_to_end_group1') . '<br>';
		$education .= 'เกรดเฉลี่ย (group 1): ' . $this->input->post('edu_gpa_group1') . '<br><hr>';

		$education .= 'ระดับการศึกษา (group 2): ' . $this->input->post('edu_level_group2') . '<br>';
		$education .= 'ชื่อ สถาบัน (group 2): ' . $this->input->post('edu_name_group2') . '<br>';
		$education .= 'คณะ (group 2): ' . $this->input->post('edu_pos_group2') . '<br>';
		$education .= 'ปี เริ่ม - จบ (group 2): ' . $this->input->post('edu_date_start_to_end_group2') . '<br>';
		$education .= 'เกรดเฉลี่ย (group 2): ' . $this->input->post('edu_gpa_group2') . '<br><hr>';

		$education .= 'ระดับการศึกษา (group 3): ' . $this->input->post('edu_level_group3') . '<br>';
		$education .= 'ชื่อ สถาบัน (group 3): ' . $this->input->post('edu_name_group3') . '<br>';
		$education .= 'คณะ (group 3): ' . $this->input->post('edu_pos_group3') . '<br>';
		$education .= 'ปี เริ่ม - จบ (group 3): ' . $this->input->post('edu_date_start_to_end_group3') . '<br>';
		$education .= 'เกรดเฉลี่ย (group 3): ' . $this->input->post('edu_gpa_group3') . '<br><hr>';

		$education .= 'ระดับการศึกษา (group 4): ' . $this->input->post('edu_level_group4') . '<br>';
		$education .= 'ชื่อ สถาบัน (group 4): ' . $this->input->post('edu_name_group4') . '<br>';
		$education .= 'คณะ (group 4): ' . $this->input->post('edu_pos_group4') . '<br>';
		$education .= 'ปี เริ่ม - จบ (group 4): ' . $this->input->post('edu_date_start_to_end_group4') . '<br>';
		$education .= 'เกรดเฉลี่ย (group 4): ' . $this->input->post('edu_gpa_group4') . '<br><hr>';

		$education .= 'ระดับการศึกษา (group 5): ' . $this->input->post('edu_level_group5') . '<br>';
		$education .= 'ชื่อ สถาบัน (group 5): ' . $this->input->post('edu_name_group5') . '<br>';
		$education .= 'คณะ (group 5): ' . $this->input->post('edu_pos_group5') . '<br>';
		$education .= 'ปี เริ่ม - จบ (group 5): ' . $this->input->post('edu_date_start_to_end_group5') . '<br>';
		$education .= 'เกรดเฉลี่ย (group 5): ' . $this->input->post('edu_gpa_group5') . '<br><hr>';

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
			'addr' => $address,
			'old_company_name' => $this->input->post('old_company_name'),
			'old_company_position' => $this->input->post('old_company_position'),
			'old_company_status' => $this->input->post('old_company_status'),
			'old_company_salary' => $this->input->post('old_company_salary'),
			'old_company_start_work' => $this->input->post('old_company_start_work'),
			'old_company_exp' => $this->input->post('old_company_exp'),
			'old_company_comment' => $this->input->post('old_company_comment'),
			'education' => $education,
			'file_resume' => $file_resume,
			'img' => $img
		]);

		if ($add_career_contact) {
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
		$config['allowed_types'] = '*';
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
