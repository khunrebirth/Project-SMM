<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teams extends MX_Controller
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
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    private $data = false;

    public function __construct()
    {
        parent::__construct();

        // Middleware
        require_login('backoffice/login');

        // Set Model
        $this->load->model('User_model');
        $this->load->model('Team_model');

        $this->data['user'] = $this->User_model->get_user_by_id($this->session->userdata('user_id'));
    }

    public function index()
    {
        $this->data['title'] = 'Manage Item: Teams';
        $this->data['content'] = 'team';
        $this->data['teams'] = $this->Team_model->get_team_all();

        $this->load->view('app', $this->data);
    }

    public function create() {}

    public function store()
    {
        // TODO:: Validate
        $config['upload_path'] = './storage/images';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = 'img-team-' . $this->input->post('title') . '-' . time();

        $status = 500;
        $response['success'] = 0;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());

            $team = $this->Team_model->insert_team(array(
                'title' => $this->input->post('title'),
                'body' => $this->input->post('body'),
                'image' => $data['upload_data']['file_name'],
                'created_at' => date('Y-m-d H:i:s')
            ));

            if ($team != false) {
                $status = 200;
                $response['success'] = 1;
            }
        }


        return $this->output
            ->set_status_header($status)
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    public function show() {}

    public function edit() {
        $status = 500;
        $response['success'] = 0;

        $team = $this->Team_model->get_team_by_id($this->input->post('id'));

        print_r($this->input->post('id')); exit();

        if ($team != false) {
            $status = 200;
            $response['success'] = 1;
        }

        return $this->output
            ->set_status_header($status)
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    public function update() {}

    public function destroy()
    {
        $status = 500;
        $response['success'] = 0;

        $team = $this->Team_model->delete_team_by_id($this->input->post('id'));

        if ($team != false) {
            $status = 200;
            $response['success'] = 1;
        }

        return $this->output
            ->set_status_header($status)
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }
}
