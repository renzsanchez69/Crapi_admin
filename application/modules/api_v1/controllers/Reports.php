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
