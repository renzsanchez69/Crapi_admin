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
            "token"=> md5(uniqid($usr, true)),
            "role"=> 1, // 1=admin,etc this is sample
            "message"=>'Your logged successfully!',
            "result"=> 'OK'
		];
		$this->to_response($myArr);
	}

	public function order_list()
	{
		//$_POST["search"] -> post request for search
		//$_POST["token"] -> post request for search
		$myArr = [
	        "data"=>[
		        	['id' => 1,
		        	'resto_name' => 'Kaloys Food shop',
		        	'name' => 'Bam-e',
		        	'full_name' => 'Wangdels',
					'address' => 'Cebu City',
					'email_address' => 'delabahan@gmail.com',
					'contact_no' => '093200000',
					'order_hash' => '5v5OCssdhhs',
		        	'qty' => 60,
		        	'price' => 50,
		        	'description' => 'Adobo',
		        	'created_date' => date('Y-m-d h:i:s')
		        ],
		        	['id' => 2,
		        	'resto_name' => 'Wangs Food shop',
		        	'full_name' => 'Kaloys',
					'address' => 'Cebu City',
					'email_address' => 'delabahan@gmail.com',
					'contact_no' => '093200000',
					'order_hash' => '5v5OCsoQBjpSoUF',
		        	'name' => 'Litson  Sinugba',
		        	'qty' => 60,'price' => 50,
		        	'description' => 'Adobo Sinugba',
		        	'created_date' => date('Y-m-d h:i:s')
		        ]
	        ],
	        "result"=> 'OK'
	    ];
		$this->to_response($myArr);
	}

	public function search()
	{
		//$_POST["search"] -> post request for search
		//$_POST["token"] -> post request for search
		//$_POST["role"] -> post request for search
		$myArr = [
	        "data"=>[
		        	['id' => 1,
		        	'resto_name' => 'Search Kaloys Food shop',
		        	'name' => 'Bam-e',
		        	'full_name' => 'Wangdels',
					'address' => 'Cebu City',
					'email_address' => 'delabahan@gmail.com',
					'contact_no' => '093200000',
					'order_hash' => '885v5OCssdhhs',
		        	'qty' => 60,
		        	'price' => 50,
		        	'description' => 'Adobo',
		        	'created_date' => date('Y-m-d h:i:s')
		        ],
		        	['id' => 2,
		        	'resto_name' => 'Search Wangs Food shop',
		        	'full_name' => 'Kaloys',
					'address' => 'Cebu City',
					'email_address' => 'delabahan@gmail.com',
					'contact_no' => '093200000',
					'order_hash' => '995v5OCsoQBjpSoUF',
		        	'name' => 'Litson  Sinugba',
		        	'qty' => 60,'price' => 50,
		        	'description' => 'Adobo Sinugba',
		        	'created_date' => date('Y-m-d h:i:s')
		        ]
	        ],
	        "result"=> 'OK'
	    ];
		$this->to_response($myArr);
	}
}
