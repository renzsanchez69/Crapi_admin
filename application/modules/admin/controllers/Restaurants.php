<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restaurants extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->library('form_builder');
		$this->load->model('Restaurant_model', 'Restaurant');
	}

	public function index()
	{
		$urlQuery = $this->input->get();
		$this->mTitle = "Restaurants";

		// - get fields
		$fields = array(
			'restaurants.*'
		);

		$params = array(
			// 'status' => USER_ACTIVE
		);

		if (!empty($urlQuery['owner_fullname'])) {
			$params['LIKE']['owner_fullname'] = $urlQuery['owner_fullname'];
		}
		if (!empty($urlQuery['resto_name'])) {
			$params['LIKE']['resto_name'] = $urlQuery['resto_name'];
		}
		if (!empty($urlQuery['address'])) {
			$params['LIKE']['restaurants.address'] = $urlQuery['address'];
		}
		if (!empty($urlQuery['owner_id'])) {
			$params['owner_id'] = $urlQuery['owner_id'];
		}

		$restaurants = $this->Restaurant->fetch_restaurants_raw($fields, $params);

		$setData = array(
			'restaurants' => $restaurants,
			'urlQuery' => $urlQuery
		);


		$this->mViewData = $setData;
		$this->render('restaurants/index');
	}

	public function edit($id)
	{
		$this->mTitle = "Edit";
		
		$formInfo = $this->form_builder->create_form();

		$restaurant = $this->Restaurant->fetch_restaurants(null, ['restaurants.id' => $id]);

		$setData = array(
			'restaurantInfo' => !empty($restaurant) ? $restaurant[0] : [],
			'formInfo' => $formInfo
		);

		if ($this->input->method() == 'post') {
			$postData = $this->input->post();
			$requiredFields = array(
				'resto_name',
				'address'
			);

			$validation = $this->checkRequiredFields($postData, $requiredFields);

			if (isset($validation['hasError']) && $validation['hasError'] == true) {
				$this->system_message->set_error(implode('<br>', $validation['message']));
				refresh();
			}

			$res = $this->Restaurant->update_info($id, $postData);

			if ($res) {
				$this->system_message->set_success('Successfully updated!');
			} else {
				$this->system_message->set_error('Failed to update!');
			}

			refresh();
		}

		$this->mViewData = $setData;
		$this->render('restaurants/edit');
	}

	public function delete_restaurant()
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

		$res = $this->Restaurant->update_info($postData['id'], array('status' => USER_STOP));

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
