<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Example to override functions from API_Controller
 * TODO: link with real data
 */
class Account extends API_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Owner_model', 'Owner');
		$this->load->model('Customer_model', 'Customer');
		$this->load->model('Employee_model', 'Employee');
	}

	// [GET] /users
	public function register()
	{
		$data = array(
			'result' => REQUEST_RESULT_NG,
			'error' => 'Registration Failed.'
		);

		if ($this->input->method() != 'post') {
			$this->to_error_method_not_allowed();
		}
		
		$params = $this->input->post();

		if (!isset($params['role']) || empty($params['role'])) {
			$data['error'] = 'Incomplete parameters.';
			$this->to_response($data);
		}

		$requiredFields = [
			'email',
			'password',
			'firstname',
			'lastname',
			'address',
			'contact_number',
		];

		$validation = $this->checkRequiredFields($requiredFields, $params);

		if (!$validation) {
			$data['error'] = 'Incomplete parameters.';
			$this->to_response($data);
		}

		// - check email already used
		$checkEmail1 = $this->Customer->fetch_customers(null, ['email' => $params['email']]);
		$checkEmail2 = $this->Owner->fetch_owners(null, ['email' => $params['email']]);
		$checkEmail3 = $this->Employee->fetch_employees(null, ['email' => $params['email']]);
		if (!empty($checkEmail1) || !empty($checkEmail2) || !empty($checkEmail3)) {
			$data['error'] = 'Email address already in use.';
			$this->to_response($data);
		}


		$params['login_token'] = bin2hex(mcrypt_create_iv(22, MCRYPT_DEV_URANDOM));
		$role = $params['role'];
		switch ($params['role']) {
			case ROLE_CUSTOMER:
				unset($params['role']);
				$id = $this->Customer->add_customer($params);
				$registrationData = $this->Customer->get_customer($id);
				break;
			case ROLE_OWNER:
				unset($params['role']);
				$id = $this->Owner->add_owner($params);
				$registrationData = $this->Owner->get_owner($id);
				break;
			
			default:
				break;
		}

		if (isset($registrationData)) {
			$data = array(
				'result' => REQUEST_RESULT_OK,
				'data' => $registrationData,
				'role' => $role,
			);
		}

		$this->to_response($data);
	}
	
	public function checkRequiredFields($requiredFields, $request){
		foreach ($requiredFields as $value) {
			if (empty($request[$value])) {
				return false;
			}
		}

		return true;
	}
}
