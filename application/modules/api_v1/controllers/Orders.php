<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends API_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// API Doc page only accessible during development env
		if (ENVIRONMENT=='development')
			$this->render('home');
		else
			redirect();
	}

	public function order_list()
	{
		//$_POST["usr_id"] -> post request  for list
		$myArr = [
	        "data"=>[
	        	['id' => 1,'food_name' => 'Adobo','qty' => 60,'price' => 50,'description' => 'Adobo','created_date' => date('Y-m-d h:i:s')],
	        	['id' => 2,'food_name' => 'Adobo  Sinugba','qty' => 60,'price' => 50,'description' => 'Adobo Sinugba','created_date' => date('Y-m-d h:i:s')]
	        ],
	        "result"=> 'OK'
	    ];
		$this->to_response($myArr);
	}

	public function order_search()
	{
		//$_POST["search"] -> post request for search
		$myArr = [
	        "data"=>[
	        	['id' => 1,'food_name' => 'Bam-e','qty' => 60,'price' => 50,'description' => 'Adobo','created_date' => date('Y-m-d h:i:s')],
	        	['id' => 2,'food_name' => 'Litson  Sinugba','qty' => 60,'price' => 50,'description' => 'Adobo Sinugba','created_date' => date('Y-m-d h:i:s')]
	        ],
	        "result"=> 'OK'
	    ];
		$this->to_response($myArr);
	}
	public function order_delete()
	{
		//$_POST["oid"] -> post request for delete
		$myArr = [
	        "data"=>[
	        	['id' => 1,'food_name' => 'Bam-e','qty' => 60,'price' => 50,'description' => 'Adobo','created_date' => date('Y-m-d h:i:s')],
	        	['id' => 2,'food_name' => 'Litson  Sinugba','qty' => 60,'price' => 50,'description' => 'Adobo Sinugba','created_date' => date('Y-m-d h:i:s')]
	        ],
	        "result"=> 'OK'
	    ];
		$this->to_response($myArr);
	}
}
