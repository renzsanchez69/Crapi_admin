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
		$data = ['result' => REQUEST_RESULT_OK];
		$postData = $this->input->post();

		// - check incomplete params
		$incomplete = self::check_required_fields($postData);

		if (!empty($incomplete)) {
			$data['result'] = REQUEST_RESULT_NG;
			$data['error'] = "Please input required fields.";
		}

		$hashed = password_hash($postData['password'], PASSWORD_DEFAULT);

		// - prepare data
		$empData = array(
			'owner_id' => $postData['owner_id'],
			'firstname' => $postData['firstname'],
			'lastname' => $postData['lastname'],
			'address' => $postData['address'],
			'contact_number' => $postData['contact_number'],
			'gender' => $postData['gender'],
			'email' => $postData['email'],
			'password' => $hashed,
		);

		$employees = $this->Employee->add_employee($empData);

		if (!$employees) {
			$data['result'] = REQUEST_RESULT_NG;
			$data['error'] = "Failed to save data.";
		}

		$this->to_response($data);
	}

	// [PUT] /demo/{id}
	protected function update_item($id)
	{
		$params = elements(array('filter', 'valid', 'fields', 'here'), $this->mParams);
		$this->to_accepted();
	}

	// [DELETE] /demo/{id}
	protected function remove_item($id) {
		$this->Employee->delete_employee($id);
		$data = [
			'result' => REQUEST_RESULT_OK
		];
		$this->to_response($data);
	}

	private function unserialize_form_data($data){
		$return = [];
		if (!empty($data)) {
			foreach ($data as $item) {
				if (isset($item['name']) && isset($item['value'])) {
					$return[$item['name']] = $item['value'];
				}
			}
		} else {
			return $data;
		}
		return $return;
	}

	private function check_required_fields($params){
		$incomplete = [];
		$required_fields = array(
			'owner_id',
			'firstname',
			'lastname',
			'address',
			'contact_number',
			'gender',
			'email',
			'password'
		);

		foreach ($required_fields as $field) {
			if (!isset($params[$field]) || empty($params[$field])) {
				$incomplete[] = $field;
			}
		}

		return $incomplete;
	}
}
