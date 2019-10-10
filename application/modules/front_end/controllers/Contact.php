<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MX_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /home.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
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

        $add_contact = $this->Contact_model->insert_contact(

            $add_contact = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'company' => $this->input->post('company'),
                'detail' => $this->input->post('detail'),
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
