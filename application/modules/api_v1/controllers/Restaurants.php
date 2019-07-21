<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restaurants extends API_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Restaurant_model', 'resto');
	}

	public function index()
	{
		// API Doc page only accessible during development env
		if (ENVIRONMENT=='development')
			$this->render('home');
		else
			redirect();
	}

	public function resto_list()
	{
		$data = $this->resto->fetch_restaurants();
		$myArr = [
            "data"=>$data,
            "result"=> 'OK'
		];
		$this->to_response($myArr);
	}

	public function resto_search()
	{
		$urlQuery = $this->input->post();
		// - get fields
		$fields = array(
			'restaurants.*'
		);
		$params = array(
		);
		if (!empty($urlQuery['search'])) {
			$params['LIKE']['resto_name'] = $urlQuery['search'];
		}
		if (!empty($urlQuery['owner_id'])) {
			$params['owner_id'] = $urlQuery['owner_id'];
		}
		if (!empty($urlQuery['id'])) {
			$params['restaurants.id'] = $urlQuery['id'];
		}
		$data = $this->resto->fetch_restaurants_raw($fields,$params);
		$myArr = [
            "data"=>$data,
            "result"=> 'OK'
		];
		$this->to_response($myArr);
	}

		// [PUT] /demo/{id}
	public function logout_employee_to_resto()
	{
		$data = ['result' => REQUEST_RESULT_OK];

		if (empty($this->mParams)) {
			$data['result'] = REQUEST_RESULT_NG;
			$data['error'] = "Incomplete parameters.";
			$this->to_response($data);
		}

		$update_data = array(
			'employee_id' => null
		);

		$update_res = $this->resto->update_info($this->mParams['id'], $update_data);

		if (!$update_res) {
			$data['result'] = REQUEST_RESULT_NG;
			$data['error'] = "Failed to update data.";
			$this->to_response($data);
		}

		$this->to_response($data);
	}
}
