<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Example to override functions from API_Controller
 * TODO: link with real data
 */
class Reports extends API_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Report_model', 'Report');
	}

	public function reports_list() {
		$result = [
			"data"=> [],
			"result" => 'NG'
		];
		$postData = $this->input->post();

		$conditions = [];

		if (!empty($postData['name'])) {
			$conditions['emp_name'] = $postData['name'];
		}
		if (!empty($postData['date_from'])) {
			$conditions['date_from'] = $postData['date_from'];
		}
		if (!empty($postData['date_to'])) {
			$conditions['date_to'] = $postData['date_to'];
		}

		if (!empty($postData['resto_id'])) {
			$conditions['resto_id'] = $postData['resto_id'];
		}

		$orders_list = $this->Report->get_restaurants_orders_list($conditions);


		if(!empty($orders_list)){
			$result = [
				"data"=> $orders_list,
				"result"=> 'OK'
			];
		}
		
		$this->to_response($result);
	}

}
