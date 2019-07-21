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
		$this->load->model('Restaurant_model', 'Restaurant');
		// var_dump($this->mAction);
	}

	// [GET] /users
	public function login()
	{
		$data = array(
			'result' => REQUEST_RESULT_NG,
			'error' => 'Login Failed.'
		);

		if ($this->input->method() != 'post') {
			$this->to_error_method_not_allowed();
		}
		
		$params = $this->input->post();

		if (empty($params['email'])) {
			$data['error'] = 'Email is required.';
			$this->to_response($data);
		}
		if (empty($params['password'])) {
			$data['error'] = 'Password is required.';
			$this->to_response($data);
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

		//TODO - generate login_token 

		//TODO - update user login_token in DB

		// - return result
		if (isset($loginData)) {
			$data = array(
				'result' => REQUEST_RESULT_OK,
				'data' => [
					'user_id' => $loginData->id,
					'login_token' => $loginData->login_token,
					'role' => $loginData->role,
					'longitude' => ($loginData->role == ROLE_CUSTOMER) ? $loginData->longitude : '',
					'latitude' => ($loginData->role == ROLE_CUSTOMER) ? $loginData->latitude : ''
				]
			);

			if ($loginData->role == ROLE_EMPLOYEE) {
				$restoInfo = self::getOwnerResto($loginData->owner_id);

				// - check if has resto assigned
				if (empty($restoInfo)) {
					return $this->to_response([
						'result' => REQUEST_RESULT_NG,
						'error' => 'No restaurant assigned.'
					]);
				}

				// - check if resto has active employee logged in
				if ($restoInfo['employee_id'] != null) {
					return $this->to_response([
						'result' => REQUEST_RESULT_NG,
						'error' => 'Another employee is logged in.'
					]);
				}

				// - update resto current employee_id
				$this->Restaurant->update_info($restoInfo['id'], ['employee_id' => $loginData->id]);

				$data['data']['owner_id'] = $loginData->owner_id;
				$data['data']['resto_info'] = $restoInfo;
			} elseif ($loginData->role == ROLE_OWNER) {
				$restoInfo = self::getOwnerResto($loginData->id);
				$data['data']['resto_info'] = $restoInfo;
			}
		}
		$this->to_response($data);
	}

	public function getOwnerResto($owner_id){
		$fields = array('restaurants.*');
		$params = array(
			'owner_id' => $owner_id
		);

		$data = $this->Restaurant->fetch_restaurants_raw($fields,$params);
		
		if (!empty($data[0])) {
			return $data[0];
		}

		return $data;
	}

}
