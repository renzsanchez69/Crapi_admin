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

	public function product_search()
	{
		//$_POST["search"] -> post request for search
		//$_POST["token"] -> post request for search
		$data = $this->product->fetch_product();
		$myArr = [
            "data"=>$data,
            "result"=> 'OK'
		];
		$this->to_response($myArr);
	}
}
