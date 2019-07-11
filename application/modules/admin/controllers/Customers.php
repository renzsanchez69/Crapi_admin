<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->library('form_builder');
		$this->load->model('Customer_model', 'Customer');
	}

	public function index()
	{
		$urlQuery = $this->input->get();
		$this->mTitle = "Customers";

		// - get fields
		$fields = array(
			'customers.*'
		);

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

		$customers = $this->Customer->fetch_customers_raw($fields, $params);

		if (!empty($customers)) {
			foreach ($customers as $key => $customer) {
				$fName = !empty($customer['firstname']) ? ucfirst($customer['firstname']) : '';
				$lName = !empty($customer['lastname']) ? ucfirst($customer['lastname']) : '';
				$customers[$key]['fullname'] = $fName.' '.$lName;
			}
		}

		$setData = array(
			'customers' => $customers,
			'urlQuery' => $urlQuery
		);


		$this->mViewData = $setData;
		$this->render('customers/index');
	}

	public function edit($id)
	{
		$this->mTitle = "Edit";
		
		$formInfo = $this->form_builder->create_form();
		$formPass = $this->form_builder->create_form('admin/customers/change_pass/'.$id);

		$customer = $this->Customer->get_customer($id);
		$genderSelection = unserialize(GENDER_SELECTION);
		$userStatusSelection = unserialize(USER_STATUS_SELECTION);
		$setData = array(
			'customerInfo' => $customer,
			'genderSelect' => $genderSelection,
			'userStatusSelect' => $userStatusSelection,
			'formInfo' => $formInfo,
			'formPass' => $formPass
		);

		if ($this->input->method() == 'post') {
			$postData = $this->input->post();
			$requiredFields = array(
				'email',
				// 'username',
				'firstname',
				'lastname',
				'gender',
				'contact_number',
				'status'
			);

			$validation = $this->checkRequiredFields($postData, $requiredFields);

			// - check email availabity
			$unameAvail = $this->Customer->fetch_customers(array('id'), array('email' => $postData['email']));
			if (!empty($unameAvail) && (isset($unameAvail['id']) && $unameAvail['id'] != $id)) {
				$this->system_message->set_error('Email already in use.');
				refresh();
			}

			if (isset($validation['hasError']) && $validation['hasError'] == true) {
				$this->system_message->set_error(implode('<br>', $validation['message']));
				refresh();
			}

			$res = $this->Customer->update_info($id, $postData);
			if ($res) {
				$this->system_message->set_success('Successfully updated!');
			} else {
				$this->system_message->set_error('Failed to update!');
			}
			refresh();
		}

		$this->mViewData = $setData;
		$this->render('customers/edit');
	}

	public function change_pass($id)
	{
		if ($this->input->method() == 'post') {
			$postData = $this->input->post();
			$requiredFields = array(
				'password',
				'password_confirmation'
			);

			$validation = $this->checkRequiredFields($postData, $requiredFields);

			if (isset($validation['hasError']) && $validation['hasError'] == true) {
				$this->system_message->set_error(implode('<br>', $validation['message']));
				redirect('admin/customers/edit/'.$id, 'refresh');
			}

			if ($postData['password'] != $postData['password_confirmation']) {
				$this->system_message->set_error('Password does not match the confirm password.');
				redirect('admin/customers/edit/'.$id, 'refresh');
			}

			$hashed = password_hash($postData['password'], PASSWORD_DEFAULT);

			$res = $this->Customer->update_info($id, array('password' => $hashed));
			if ($res) {
				$this->system_message->set_success('Successfully updated!');
			} else {
				$this->system_message->set_error('Failed to update!');
			}
			redirect('admin/customers/edit/'.$id, 'refresh');
		}
		redirect('admin/customers/edit/'.$id, 'refresh');
	}

	public function delete_customer()
	{
		// - allow ajax request only
		if (!$this->input->is_ajax_request()) {
			echo json_encode(array('result' => 'NG'));
			exit;
		}
		$postData = $this->input->post();

		if (empty($postData['id'])) {
			echo json_encode(array('result' => 'NG'));
			exit;
		}

		$res = $this->Customer->update_info($postData['id'], array('status' => USER_STOP));

		if ($res) {
			echo json_encode(array('result' => 'OK'));
			exit;
		}
		
		echo json_encode(array('result' => 'NG'));
		exit;
	}

	private function checkRequiredFields($data, $requiredFields){
		$message = array();
		$hasError = false;
		foreach ($requiredFields as $value) {
			if (empty($data[$value])) {
				$message[] = $value." is required.";
				$hasError = true;
			}
		}

		return array(
			'message' => $message,
			'hasError' => $hasError
		);
	}
}
