<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Example to override functions from API_Controller
 * TODO: link with real data
 */
class Login extends API_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Owner_model', 'Owner');
		$this->load->model('Customer_model', 'Customer');
		$this->load->model('Employee_model', 'Employee');
		// var_dump($this->mAction);
	}

	// [GET] /users
	public function login()
	{
		$params = $this->input->post();
		$data = array(
			'result' => REQUEST_RESULT_NG,
			'description' => 'Login Failed.'
		);

		if (empty($params['email'])) {
			$data['description'] = 'Email is required.';
		}
		if (empty($params['password'])) {
			$data['description'] = 'Password is required.';
		}

		$ownerData = $this->Owner->login($params['email'], $params['password']);
		$customerData = $this->Customer->login($params['email'], $params['password']);
		$employeeData = $this->Employee->login($params['email'], $params['password']);

		if (!empty($ownerData)) {
			$loginData = $ownerData;
			$loginData->role = ROLE_OWNER;
		} elseif (!empty($customerData)) {
			$loginData = $customerData;
			$loginData->role = ROLE_CUSTOMER;
		} elseif(!empty($employeeData)) {
			$loginData = $employeeData;
			$loginData->role = ROLE_EMPLOYEE;
		} 

		if (isset($loginData)) {
			$data = array(
				'result' => REQUEST_RESULT_OK,
				'login_token' => $loginData->login_token,
				'role' => $loginData->role,
			);
		}
		$this->to_response($data);
	}

}
