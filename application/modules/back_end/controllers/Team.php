<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends MX_Controller
{

    private $data = false;

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

		/*
		| -------------------------------------------------------------------------
		| HANDLE
		| -------------------------------------------------------------------------
		*/

        $this->data['user'] = $this->User_model->get_user_by_id($this->session->userdata('user_id'));
    }

    public function index()
    {
        $this->data['title'] = 'Page: Teams';
        $this->data['content'] = 'teams/list';
        $this->data['teams'] = $this->Team_model->get_team_all();

        $this->load->view('app', $this->data);
    }

    public function create()
	{
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
			$this->session->set_flashdata('success', 'Add Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect('backoffice/page/teams/list-teams');
    }

    public function show() {}

    public function edit($id)
	{
		$team = $this->Team_model->get_team_by_id($id);

		$this->data['title'] = 'Page: Teams - Edit (' . $team->title . ')';
		$this->data['content'] = 'teams/list_edit';
		$this->data['team'] = $team;

		$this->load->view('app', $this->data);
	}

    public function update($id)
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
			$this->session->set_flashdata('success', 'Add Done');
		} else {
			$this->session->set_flashdata('error', 'Something wrong');
		}

		redirect('backoffice/page/teams/list-teams');
	}

    public function destroy($id)
    {
        $status = 500;
        $response['success'] = 0;

        $team = $this->Team_model->delete_team_by_id($id);

        if ($team != false) {
            $status = 200;
            $response['success'] = 1;
        }

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
