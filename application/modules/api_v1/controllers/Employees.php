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
		$employee = $this->Employee->get($id);

		$data = [
			'result' => REQUEST_RESULT_OK,
			'data' => $employee
		];
		
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
			$this->to_response($data);
		}

		//TODO - add checker if owner email already in use

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
		$data = ['result' => REQUEST_RESULT_OK];
		if (empty($this->mParams)) {
			$data['result'] = REQUEST_RESULT_NG;
			$data['error'] = "Incomplete parameters.";
			$this->to_response($data);
		}

		$required_fields = array(
			'id',
			'firstname',
			'lastname',
			'address',
			'contact_number',
			'gender',
			'email'
		);
		$incomplete = self::check_required_fields($this->mParams, $required_fields);
		if (!empty($incomplete)) {
			$data['result'] = REQUEST_RESULT_NG;
			$data['error'] = "Please input required fields.";
			$this->to_response($data);
		}

		$update_data = array(
			'firstname' => $this->mParams['firstname'],
			'lastname' => $this->mParams['lastname'],
			'address' => $this->mParams['address'],
			'contact_number' => $this->mParams['contact_number'],
			'gender' => $this->mParams['gender'],
			'email' => $this->mParams['email']
		);

		$update_res = $this->Employee->update_info($this->mParams['id'], $update_data);

		if (!$update_res) {
			$data['result'] = REQUEST_RESULT_NG;
			$data['error'] = "Failed to update data.";
			$this->to_response($data);
		}

		$this->to_response($data);
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

	private function check_required_fields($params, $fields_required = []){
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

		if (!empty($fields_required)) {
			$required_fields = $fields_required;
		}

		foreach ($required_fields as $field) {
			if (!isset($params[$field]) || empty($params[$field])) {
				$incomplete[] = $field;
			}
		}

		return $incomplete;
	}
}
