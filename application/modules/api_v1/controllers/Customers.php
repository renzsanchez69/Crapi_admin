<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends API_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Customer_model', 'customer');
	}

	public function index()
	{
		// API Doc page only accessible during development env
		if (ENVIRONMENT=='development')
			$this->render('home');
		else
			redirect();
	}

	public function users()
	{
		$usr   = trim($_POST["email"]);
		$pw    = trim($_POST["pw"]);
		$data  = $this->customer->login($usr,$pw);

		if(empty($data)){
			$myArr = [
		        "message"=>'Invalid username and password',
		        "result"=> 'NG'
		    ];
			$this->to_response($myArr);
		}

		$myArr = [
            "id"=> $data->id,
            "password"=> md5(uniqid($usr, true)),
            "message"=>'Your logged successfully!',
            "result"=> 'OK'
		];
		$this->to_response($myArr);
	}

	public function order_list($id)
	{
		var_dump($id);
	}
}
