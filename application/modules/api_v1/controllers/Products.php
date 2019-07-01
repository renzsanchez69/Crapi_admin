<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends API_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Product_model', 'product');
	}

	// public function index()
	// {
		// API Doc page only accessible during development env
	// 	if (ENVIRONMENT=='development')
	// 		$this->render('home');
	// 	else
	// 		redirect();
	// }

	public function product_list()
	{
		$data = $this->product->fetch_product();
		$myArr = [
            "data" => $data,
            "result" => 'OK'
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

	// [DELETE] /products/{id}
	protected function remove_item($id) {
		$this->product->delete_product($id);
		$data = [
			'result' => REQUEST_RESULT_OK
		];
		$this->to_response($data);
	}

	// [GET] /products/{id}
	protected function get_item($id)
	{
		$product = $this->product->get($id);

		$data = [
			'result' => REQUEST_RESULT_OK,
			'data' => $product
		];
		
		$this->to_response($data);
	}

	// [PUT] /products/{id}
	protected function update_item($id)
	{
		$data = ['result' => REQUEST_RESULT_OK];
		if (empty($this->mParams)) {
			$data['result'] = REQUEST_RESULT_NG;
			$data['error'] = "Incomplete parameters.";
			$this->to_response($data);
		}

		$required_fields = array(
			'id',
			'name',
			'details',
			'price'
		);

		$incomplete = self::check_required_fields($this->mParams, $required_fields);

		if (!empty($incomplete)) {
			$data['result'] = REQUEST_RESULT_NG;
			$data['error'] = "Please input required fields.";
			$this->to_response($data);
		}

		$update_data = array(
			'name' => $this->mParams['name'],
			'details' => $this->mParams['details'],
			'price' => $this->mParams['price']
		);

		if (isset($this->mParams['image']) && !empty($this->mParams['image'])) {
			// $hashed = password_hash($this->mParams['password'], PASSWORD_DEFAULT);
			// $this->mParams['password'] = $hashed;
		}

		$update_res = $this->product->update_info($this->mParams['id'], $update_data);

		if (!$update_res) {
			$data['result'] = REQUEST_RESULT_NG;
			$data['error'] = "Failed to update data.";
			$this->to_response($data);
		}

		$this->to_response($data);
	}

	private function check_required_fields($params, $fields_required = []){
		$incomplete = [];
		$required_fields = array(
			'resto_id',
			'name',
			'details',
			'type',
			'price',
			'image_url'
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
