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
		$data = $this->resto->fetch_restaurants_raw($fields,$params);
		$myArr = [
            "data"=>$data,
            "result"=> 'OK'
		];
		$this->to_response($myArr);
	}
}
