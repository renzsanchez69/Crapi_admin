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
		$result = ['result' => REQUEST_RESULT_OK];
		$data = $this->Owner->get($id);
		$is_expired = true;
		$datenow = time();
		if (!empty($data->subscription_end) && $data->subscription_end != null && $data->subscription_end != "0000-00-00 00:00:00") {
			$subscription_end = strtotime($data->subscription_end);
			if ($datenow < $subscription_end) {
				$data->next_expire_date = date('F j, Y', $subscription_end);
				$is_expired = false;
			}
		}
		$data->is_expired = $is_expired;
		$result['data'] = $data;
		$this->to_response($result);
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

		// $required_fields = array(
		// 	'id',
		// 	'firstname',
		// 	'lastname',
		// 	'address',
		// 	'contact_number',
		// 	'gender',
		// 	'email'
		// );
		// $incomplete = self::check_required_fields($this->mParams, $required_fields);
		// if (!empty($incomplete)) {
		// 	$data['result'] = REQUEST_RESULT_NG;
		// 	$data['error'] = "Please input required fields.";
		// 	$this->to_response($data);
		// }
		$ownerInfo = $this->Owner->get_owner($id);
		if (empty($ownerInfo)) {
			$data['result'] = REQUEST_RESULT_NG;
			$data['error'] = "Owner info not found.";
			$this->to_response($data);
		}

		$update_data = [];

		// $update_data = array(
		// 	'firstname' => $this->mParams['firstname'],
		// 	'lastname' => $this->mParams['lastname'],
		// 	'address' => $this->mParams['address'],
		// 	'contact_number' => $this->mParams['contact_number'],
		// 	'gender' => $this->mParams['gender'],
		// 	'email' => $this->mParams['email']
		// );

		if (isset($this->mParams['subscription']) && !empty($this->mParams['subscription'])) {
			// var_dump('expression');
			// die();
			$subscription_end = null;
			if (!empty($ownerInfo->subscription_end) && $ownerInfo->subscription_end != null && $ownerInfo->subscription_end != "0000-00-00 00:00:00") {
				$subscription_end = date('Y-m-d H:i:s', strtotime("+1 month", $ownerInfo->subscription_end));
			} else {
				$subscription_end = date('Y-m-d H:i:s', strtotime("+1 month", time()));
			}
			$update_data['status'] = 1;
			$update_data['subscription_end'] = $subscription_end;
		}
		if (isset($this->mParams['password']) && !empty($this->mParams['password'])) {
			$hashed = password_hash($this->mParams['password'], PASSWORD_DEFAULT);
			$update_data['password'] = $hashed;
		}

		$update_res = $this->Owner->update_info($id, $update_data);

		if (!$update_res) {
			$data['result'] = REQUEST_RESULT_NG;
			$data['error'] = "Failed to update data.";
			$this->to_response($data);
		}

		$this->to_response($data);
	}


	public function regist()
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
		$ownData = array(
			'firstname' => $postData['firstname'],
			'lastname' => $postData['lastname'],
			'address' => $postData['address'],
			'contact_number' => $postData['contact_number'],
			'gender' => $postData['gender'],
			'email' => $postData['email'],
			'password' => $hashed,
		);

		$customer = $this->Owner->add_owner($ownData);

		if (!$customer) {
			$data['result'] = REQUEST_RESULT_NG;
			$data['error'] = "Failed to save data.";
		}

		$this->to_response($data);
	}

	private function check_required_fields($params, $fields_required = []){
		$incomplete = [];
		$required_fields = array(
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
