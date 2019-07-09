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

	public function regist()
	{
		$data = ['result' => REQUEST_RESULT_OK];
		$postData = $this->input->post();

		// - check incomplete params
		$incomplete = self::check_required_fields($postData);

		if (!empty($incomplete)) {
			$data['result'] = REQUEST_RESULT_NG;
			$data['error'] = "Please input required fields.";
			$this->to_response($data);
		}

		//TODO - add checker if owner email already in use

		$hashed = password_hash($postData['password'], PASSWORD_DEFAULT);

		// - prepare data
		$custData = array(
			'firstname' => $postData['firstname'],
			'lastname' => $postData['lastname'],
			'address' => $postData['address'],
			'contact_number' => $postData['contact_number'],
			'gender' => $postData['gender'],
			'email' => $postData['email'],
			'password' => $hashed,
		);

		$customer = $this->customer->add_customer($custData);

		if (!$customer) {
			$data['result'] = REQUEST_RESULT_NG;
			$data['error'] = "Failed to save data.";
		}

		$this->to_response($data);
	}

	private function check_required_fields($params, $fields_required = []){
		$incomplete = [];
		$required_fields = array(
			'firstname',
			'lastname',
			'address',
			'contact_number',
			'gender',
			'email',
			'password'
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
