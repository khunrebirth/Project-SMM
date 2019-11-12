<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Helper extends MX_Controller
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

		// Language
		$this->lang = $this->config->item('language_abbr');

		/*
		| -------------------------------------------------------------------------
		| HANDLE
		| -------------------------------------------------------------------------
		*/

		$this->data['user'] = $this->User_model->get_user_by_id($this->session->userdata('user_id'));
	}

	public function changeStatus()
	{
		$status = 500;
		$response['success'] = 0;

		switch ($this->input->post('table')) {
			case 'banner_pages':

				$this->load->model('Banner_model');

				$update_banner = $this->Banner_model->update_banner_by_id($this->input->post('id'), [
					'status' => $this->input->post('status'),
					'updated_at' => date('Y-m-d H:i:s')
				]);

				if ($update_banner) {

					$status = 200;
					$response['success'] = 1;

					logger_store([
						'user_id' => $this->data['user']->id,
						'detail' => 'แก้ไข Banner',
						'event' => 'update',
						'ip' => $this->input->ip_address()
					]);
				}
				break;

			case 'blog_categories':

				$this->load->model('Blog_category_model');

				$update_blog_category = $this->Blog_category_model->update_blog_category_by_id($this->input->post('id'), [
					'status' => $this->input->post('status'),
					'updated_at' => date('Y-m-d H:i:s')
				]);

				if ($update_blog_category) {

					$status = 200;
					$response['success'] = 1;

					logger_store([
						'user_id' => $this->data['user']->id,
						'detail' => 'แก้ไข Blog Category',
						'event' => 'update',
						'ip' => $this->input->ip_address()
					]);
				}
				break;

			default:
				;
		}

		// Send Response
		return $this->output
			->set_status_header($status)
			->set_content_type('application/json')
			->set_output(json_encode($response));
	}

	public function changeIgnore()
	{
		$status = 500;
		$response['success'] = 0;

		switch ($this->input->post('table')) {
			case 'clients':

				$this->load->model('Client_model');

				$update_client = $this->Client_model->update_client_by_id($this->input->post('id'), [
					'ignore_home' => $this->input->post('status'),
					'updated_at' => date('Y-m-d H:i:s')
				]);

				if ($update_client) {

					$status = 200;
					$response['success'] = 1;

					logger_store([
						'user_id' => $this->data['user']->id,
						'detail' => 'แก้ไข Client',
						'event' => 'update',
						'ip' => $this->input->ip_address()
					]);
				}
				break;

			case 'portfolios':

				$this->load->model('Portfolio_model');

				$update_portfolio = $this->Portfolio_model->update_portfolio_by_id($this->input->post('id'), [
					'ignore_home' => $this->input->post('status'),
					'updated_at' => date('Y-m-d H:i:s')
				]);

				if ($update_portfolio) {

					$status = 200;
					$response['success'] = 1;

					logger_store([
						'user_id' => $this->data['user']->id,
						'detail' => 'แก้ไข Portfolio',
						'event' => 'update',
						'ip' => $this->input->ip_address()
					]);
				}
				break;

			default:
				;
		}

		// Send Response
		return $this->output
			->set_status_header($status)
			->set_content_type('application/json')
			->set_output(json_encode($response));
	}
}
