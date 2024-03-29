<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Owners extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->library('form_builder');
		$this->load->model('Owner_model', 'Owner');
	}

	public function index()
	{
		$urlQuery = $this->input->get();
		$this->mTitle = "Owners";

		// - get fields
		$fields = array(
			'owners.*'
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

		$owners = $this->Owner->fetch_owners_raw($fields, $params);

		if (!empty($owners)) {
			foreach ($owners as $key => $owner) {
				$fName = !empty($owner['firstname']) ? ucfirst($owner['firstname']) : '';
				$lName = !empty($owner['lastname']) ? ucfirst($owner['lastname']) : '';
				$owners[$key]['fullname'] = $fName.' '.$lName;
			}
		}

		$setData = array(
			'owners' => $owners,
			'urlQuery' => $urlQuery
		);


		$this->mViewData = $setData;
		$this->render('owners/index');
	}

	public function create()
	{
		$this->mTitle = "Create New Owner";
		
		$formInfo = $this->form_builder->create_form();

		$genderSelection = unserialize(GENDER_SELECTION);
		$setData = array(
			'genderSelect' => $genderSelection,
			'formInfo' => $formInfo
		);

		if ($this->input->method() == 'post') {
			$postData = $this->input->post();
			$requiredFields = array(
				'email',
				'firstname',
				'lastname',
				'contact_number',
				'password'
			);

			$validation = $this->checkRequiredFields($postData, $requiredFields);

			// - check email availabity
			$unameAvail = $this->Owner->fetch_owners(array('id'), array('email' => $postData['email']));
			if (!empty($unameAvail) && (isset($unameAvail['id']) && $unameAvail['id'] != $id)) {
				$this->system_message->set_error('Email already in use.');
				refresh();
			}

			if (isset($validation['hasError']) && $validation['hasError'] == true) {
				$this->system_message->set_error(implode('<br>', $validation['message']));
				refresh();
			}

			$postData['password'] = password_hash($postData['password'], PASSWORD_DEFAULT);

			$res = $this->Owner->add_owner($postData);

			if ($res) {
				$this->system_message->set_success('Successfully added!');
				redirect('admin/owners/edit/'.$res, 'refresh');
			} else {
				$this->system_message->set_error('Failed to add new owner!');
				refresh();
			}
		}

		$this->mViewData = $setData;
		$this->render('owners/create');
	}

	public function edit($id)
	{
		$this->mTitle = "Edit";
		
		$formInfo = $this->form_builder->create_form();
		$formPass = $this->form_builder->create_form('admin/owners/change_pass/'.$id);

		$owner = $this->Owner->get_owner($id);
		$genderSelection = unserialize(GENDER_SELECTION);
		$setData = array(
			'ownerInfo' => $owner,
			'genderSelect' => $genderSelection,
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
				'contact_number'
			);

			$validation = $this->checkRequiredFields($postData, $requiredFields);

			// - check email availabity
			$unameAvail = $this->Owner->fetch_owners(array('id'), array('email' => $postData['email']));
			if (!empty($unameAvail) && (isset($unameAvail['id']) && $unameAvail['id'] != $id)) {
				$this->system_message->set_error('Email already in use.');
				refresh();
			}

			if (isset($validation['hasError']) && $validation['hasError'] == true) {
				$this->system_message->set_error(implode('<br>', $validation['message']));
				refresh();
			}

			$res = $this->Owner->update_info($id, $postData);
			if ($res) {
				$this->system_message->set_success('Successfully updated!');
			} else {
				$this->system_message->set_error('Failed to update!');
			}
			refresh();
		}

		$this->mViewData = $setData;
		$this->render('owners/edit');
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
				redirect('admin/owners/edit/'.$id, 'refresh');
			}

			if ($postData['password'] != $postData['password_confirmation']) {
				$this->system_message->set_error('Password does not match the confirm password.');
				redirect('admin/owners/edit/'.$id, 'refresh');
			}

			$hashed = password_hash($postData['password'], PASSWORD_DEFAULT);

			$res = $this->Owner->update_info($id, array('password' => $hashed));
			if ($res) {
				$this->system_message->set_success('Successfully updated!');
			} else {
				$this->system_message->set_error('Failed to update!');
			}
			redirect('admin/owners/edit/'.$id, 'refresh');
		}
		redirect('admin/owners/edit/'.$id, 'refresh');
	}

	public function delete_owner()
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

		$res = $this->Owner->update_info($postData['id'], array('status' => USER_STOP));

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
