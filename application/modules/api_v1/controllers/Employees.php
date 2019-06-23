<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Example to override functions from API_Controller
 * TODO: link with real data
 */
class Employees extends API_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Employee_model', 'Employee');
	}

	// [GET] /users
	protected function get_items()
	{
		$urlQuery = $this->input->get();
		$params = array(
			// 'status' => USER_ACTIVE
		);

		if (!empty($urlQuery['name'])) {
			$params['LIKE']['fullname'] = $urlQuery['name'];
		}
		if (!empty($urlQuery['email'])) {
			$params['LIKE']['email'] = $urlQuery['email'];
		}
		if (!empty($urlQuery['contact_number'])) {
			$params['LIKE']['contact_number'] = $urlQuery['contact_number'];
		}
		if (!empty($urlQuery['address'])) {
			$params['LIKE']['address'] = $urlQuery['address'];
		}
		if (!empty($urlQuery['status'])) {
			$params['status'] = $urlQuery['status'];
		}
		if (!empty($urlQuery['gender'])) {
			$params['gender'] = $urlQuery['gender'];
		}
		if (!empty($urlQuery['owner_id'])) {
			$params['owner_id'] = $urlQuery['owner_id'];
		}

		$employees = $this->Employee->fetch_employees_raw([], $params);

		if (!empty($employees)) {
			foreach ($employees as $key => $employee) {
				$fName = !empty($employee['firstname']) ? ucfirst($employee['firstname']) : '';
				$lName = !empty($employee['lastname']) ? ucfirst($employee['lastname']) : '';
				$employees[$key]['fullname'] = $fName.' '.$lName;
			}
		}

		$data = [
			'result' => REQUEST_RESULT_OK,
			'data' => $employees
		];
		
		$this->to_response($data);
	}

	// [GET] /users/{id}
	protected function get_item($id)
	{
		$data = $this->Employee->get($id);
		$this->to_response($data);
	}

	// [POST] /demo
	protected function create_item()
	{
		$params = elements(array('filter', 'valid', 'fields', 'here'), $this->mParams);
		$this->to_created();
	}

	// [PUT] /demo/{id}
	protected function update_item($id)
	{
		$params = elements(array('filter', 'valid', 'fields', 'here'), $this->mParams);
		$this->to_accepted();
	}

	// [DELETE] /demo/{id}
	protected function remove_item($id)
	{
		$this->to_accepted();
	}
}
