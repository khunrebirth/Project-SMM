<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MX_Controller
{

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
		$this->load->model('Contact_page_model');

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

		$contact_id = 1;
		$page_content = $this->Contact_page_model->get_contact_page_by_id($contact_id);

		/*
		| -------------------------------------------------------------------------
		| SET DATA
		| -------------------------------------------------------------------------
		*/

		// Language
		$data['lang'] = $this->lang;

		// Title Page
		$data['title'] = unserialize($page_content->meta_tag_title)[$this->lang];

		// Meta Tag
		$data['meta']['title'] = unserialize($page_content->meta_tag_title)[$this->lang];
		$data['meta']['description'] = unserialize($page_content->meta_tag_description)[$this->lang];
		$data['meta']['keyword'] = unserialize($page_content->meta_tag_keywords)[$this->lang];

		// OG & Twitter
		$data['og_twitter']['title'] = unserialize($page_content->meta_tag_title)[$this->lang];
		$data['og_twitter']['description'] = unserialize($page_content->meta_tag_description)[$this->lang];
		$data['og_twitter']['image'] = base_url('storage/uploads/images/abouts/'. unserialize($page_content->img_og_twitter)[$this->lang]);

		// Content
		$data['content'] = 'contact';

		// Utilities

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

        // TODO:: redirect to thank you page
        if ($add_contact) {
            $this->session->set_flashdata('success', 'Thank you for contact');
        } else {
            $this->session->set_flashdata('error', 'Something wrong');
        }

        redirect('contact', 'refresh');
    }
}
