<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Example to override functions from API_Controller
 * TODO: link with real data
 */
class Owners extends API_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Owner_model', 'Owner');
	}

	// [GET] /users
	protected function get_items()
	{
		$params = $this->input->get();
		$data = $this->Owner->get_many_by($params);
		$this->to_response($data);
	}

	// [GET] /users/{id}
	protected function get_item($id)
	{
		$data = $this->Owner->get($id);
		$this->to_response($data);
	}
}
