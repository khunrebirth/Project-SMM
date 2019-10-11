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
    }

    public function index()
    {
        $data['content'] = 'contact';

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
