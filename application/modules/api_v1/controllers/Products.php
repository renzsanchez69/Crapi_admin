<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends API_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Product_model', 'product');
	}

	public function index()
	{
		// API Doc page only accessible during development env
		if (ENVIRONMENT=='development')
			$this->render('home');
		else
			redirect();
	}

	public function product_list()
	{
		$data = $this->product->fetch_product();
		$myArr = [
            "data"=>$data,
            "result"=> 'OK'
		];
		$this->to_response($myArr);
	}

	public function menu_list()
	{
		$postData = $this->input->post();
		if(empty($this->mUser) && !isset( $this->mUser)){
		    $myArr = [
		        "data"=>[],
		        "result"=> 'NG'
		    ];
		}

		$params = array();

		if (!empty($postData['resto_id'])) {
			$params['resto_id'] = $postData['resto_id'];
		}
		if (!empty($postData['name'])) {
			$params['LIKE']['name'] = $postData['name'];
		}

		$data = $this->product->fetch_product_raw([], $params);
		
		$myArr = [
            "data"=>$data,
            "result"=> 'OK'
		];
		$this->to_response($myArr);
	}

	public function product_search()
	{
		$postData = $this->input->post();
		if(empty($this->mUser) && !isset( $this->mUser)){
		    $myArr = [
		        "data"=>[],
		        "result"=> 'NG'
		    ];
		}
		// - get fields
		$fields = array(
			'menus.*'
		);
		$params = array(

		);

		if (!empty($postData['search'])) {
			$params['LIKE']['name'] = $postData['search'];
		}

		$data = $this->product->fetch_product_raw($fields, $params);
		
		$myArr = [
            "data"=>$data,
            "result"=> 'OK'
		];
		$this->to_response($myArr);
	}
}
