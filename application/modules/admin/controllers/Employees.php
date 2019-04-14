<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->library('form_builder');
		$this->load->library('pagination');
		$this->load->model('Employee_model', 'Employee');
	}
	
	public function index()
	{
		$urlQuery = $this->input->get();
		$this->mTitle = "Employees";

		// - get fields
		$fields = array(
			'employees.*'
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

		$employees = $this->Employee->fetch_employees_raw($fields, $params);

		if (!empty($employees)) {
			foreach ($employees as $key => $employee) {
				$fName = !empty($employee['firstname']) ? ucfirst($employee['firstname']) : '';
				$lName = !empty($employee['lastname']) ? ucfirst($employee['lastname']) : '';
				$employees[$key]['fullname'] = $fName.' '.$lName;
			}
		}

		$setData = array(
			'employees' => $employees,
			'urlQuery' => $urlQuery
		);


		$this->mViewData = $setData;
		$this->render('employees/index');

		$viewData = array(
		);
		$this->mViewData = $viewData;

		$this->render('employees/index');
	}

public function edit($id)
	{
		$this->mTitle = "Edit";
		
		$formInfo = $this->form_builder->create_form();
		$formPass = $this->form_builder->create_form('admin/employees/change_pass/'.$id);

		$employee = $this->Employee->get_employee($id);
		$genderSelection = unserialize(GENDER_SELECTION);
		$setData = array(
			'employeeInfo' => $employee,
			'genderSelect' => $genderSelection,
			'formInfo' => $formInfo,
			'formPass' => $formPass
		);

		if ($this->input->method() == 'post') {
			$postData = $this->input->post();
			$requiredFields = array(
				'email',
				'username',
				'firstname',
				'lastname',
				'gender',
				'contact_number'
			);

			$validation = $this->checkRequiredFields($postData, $requiredFields);

			// - check username availabity
			$unameAvail = $this->Employee->fetch_employees(array('id'), array('username' => $postData['username']));
			if (!empty($unameAvail) && (isset($unameAvail['id']) && $unameAvail['id'] != $id)) {
				$this->system_message->set_error('Username already taken.');
				refresh();
			}

			if (isset($validation['hasError']) && $validation['hasError'] == true) {
				$this->system_message->set_error(implode('<br>', $validation['message']));
				refresh();
			}

			$res = $this->Employee->update_info($id, $postData);
			if ($res) {
				$this->system_message->set_success('Successfully updated!');
			} else {
				$this->system_message->set_error('Failed to update!');
			}
			refresh();
		}

		$this->mViewData = $setData;
		$this->render('employees/edit');
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
				redirect('admin/employees/edit/'.$id, 'refresh');
			}

			if ($postData['password'] != $postData['password_confirmation']) {
				$this->system_message->set_error('Password does not match the confirm password.');
				redirect('admin/employees/edit/'.$id, 'refresh');
			}

			$hashed = password_hash($postData['password'], PASSWORD_DEFAULT);

			$res = $this->Employee->update_info($id, array('password' => $hashed));
			if ($res) {
				$this->system_message->set_success('Successfully updated!');
			} else {
				$this->system_message->set_error('Failed to update!');
			}
			redirect('admin/employees/edit/'.$id, 'refresh');
		}
		redirect('admin/employees/edit/'.$id, 'refresh');
	}

	public function delete_employee()
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

		$res = $this->Employee->update_info($postData['id'], array('status' => USER_STOP));

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