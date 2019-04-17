<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends API_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('form_builder');

		$this->load->model('Order_model', 'Order');
		$this->load->model('Order_Details_model', 'OrderDetails');
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
	        	['id' => 1,'name' => 'Adobo','qty' => 60,'price' => 50,'description' => 'Adobo','created_date' => date('Y-m-d h:i:s')],
	        	['id' => 2,'name' => 'Adobo  Sinugba','qty' => 60,'price' => 50,'description' => 'Adobo Sinugba','created_date' => date('Y-m-d h:i:s')]
	        ],
	        "result"=> 'OK'
	    ];
		$this->to_response($myArr);
	}

	public function order_search()
	{
		//$_POST["search"] -> post request for search
		//$_POST["token"] -> post request for search
		$myArr = [
	        "data"=>[
	        	['id' => 1,'name' => 'Bam-e','qty' => 60,'price' => 50,'description' => 'Adobo','created_date' => date('Y-m-d h:i:s')],
	        	['id' => 2,'name' => 'Litson  Sinugba','qty' => 60,'price' => 50,'description' => 'Adobo Sinugba','created_date' => date('Y-m-d h:i:s')]
	        ],
	        "result"=> 'OK'
	    ];
		$this->to_response($myArr);
	}
	
	public function order_delete()
	{
		$postData = $this->input->post();
		if(empty( $this->mUser) && !isset( $this->mUser)){
		    $myArr = [
		        "data"=>[
		        	['id' => 1,'name' => 'Bam-e','qty' => 60,'price' => 50,'description' => 'Adobo','created_date' => date('Y-m-d h:i:s')],
		        	['id' => 2,'name' => 'Litson  Sinugba','qty' => 60,'price' => 50,'description' => 'Adobo Sinugba','created_date' => date('Y-m-d h:i:s')]
		        ],
		        "result"=> 'NG'
		    ];
		}

		$myArr = [
	        "data"=>[
	        	['id' => 1,'name' => 'Bam-e','qty' => 60,'price' => 50,'description' => 'Adobo','created_date' => date('Y-m-d h:i:s')],
	        	['id' => 2,'name' => 'Litson  Sinugba','qty' => 60,'price' => 50,'description' => 'Adobo Sinugba','created_date' => date('Y-m-d h:i:s')]
	        ],
	        "result"=> 'OK'
	    ];
		 $this->Order->delete_order_by($postData["order_id"]);
		$this->to_response($myArr);
	}
	
	public function add_orders()
	{
		$postData = $this->input->post();
		if(empty( $this->mUser) && !isset( $this->mUser)){
		    $myArr = [
		        "data"=>[
		        	['id' => 1,'name' => 'Bam-e','qty' => 60,'price' => 50,'description' => 'Adobo','created_date' => date('Y-m-d h:i:s')],
		        	['id' => 2,'name' => 'Litson  Sinugba','qty' => 60,'price' => 50,'description' => 'Adobo Sinugba','created_date' => date('Y-m-d h:i:s')]
		        ],
		        "result"=> 'NG'
		    ];
		}
		$data['customer_id'] = $this->mUser[0]['id'];
		$data['order_number'] = $this->mUser[0]['id'].time();

		$res_order = $this->Order->add_order($data);
		if(!empty($res_order)){
			$order_details['order_id'] = $res_order;
			$order_details['product_id'] = $postData["product_id"];
			$order_details['qty'] = $postData["qty"];
			$order_details['price'] = $postData["price"];
			$order_details['sub_total'] = $postData["qty"] * $postData["price"];
			$res = $this->OrderDetails->add_order_details($order_details);
			if($res){
				$myArr = [
			        "data"=>[
			        	['id' => 1,'name' => 'Bam-e','qty' => 60,'price' => 50,'description' => 'Adobo','created_date' => date('Y-m-d h:i:s')],
			        	['id' => 2,'name' => 'Litson  Sinugba','qty' => 60,'price' => 50,'description' => 'Adobo Sinugba','created_date' => date('Y-m-d h:i:s')]
			        ],
			        "result"=> 'OK'
			    ];
			} else {
				$myArr = [
			        "data"=>[
			        	['id' => 1,'name' => 'Bam-e','qty' => 60,'price' => 50,'description' => 'Adobo','created_date' => date('Y-m-d h:i:s')],
			        	['id' => 2,'name' => 'Litson  Sinugba','qty' => 60,'price' => 50,'description' => 'Adobo Sinugba','created_date' => date('Y-m-d h:i:s')]
			        ],
			        "result"=> 'NG'
			    ];
			}

		} else {
		    $myArr = [
		        "data"=>[
		        	['id' => 1,'name' => 'Bam-e','qty' => 60,'price' => 50,'description' => 'Adobo','created_date' => date('Y-m-d h:i:s')],
		        	['id' => 2,'name' => 'Litson  Sinugba','qty' => 60,'price' => 50,'description' => 'Adobo Sinugba','created_date' => date('Y-m-d h:i:s')]
		        ],
		        "result"=> 'NG'
		    ];
		}
		$this->to_response($myArr);
	}

	public function order_by_customer()
	{
		$postData = $this->input->post();
		if(empty($this->mUser) && !isset( $this->mUser)){
		    $myArr = [
		        "data"=>[
		        	['id' => 1,'name' => 'Bam-e','qty' => 60,'price' => 50,'description' => 'Adobo','created_date' => date('Y-m-d h:i:s')],
		        	['id' => 2,'name' => 'Litson  Sinugba','qty' => 60,'price' => 50,'description' => 'Adobo Sinugba','created_date' => date('Y-m-d h:i:s')]
		        ],
		        "result"=> 'NG'
		    ];
		}

		$res_order = $this->Order->fetch_orders_by([],['customer_id'=>$this->mUser[0]['id']],[]);
		if(!empty($res_order)){

				$myArr = [
			        "data"=> $res_order,
			        "result"=> 'OK'
			    ];


		} else {
		    $myArr = [
		        "data"=>[
		        	['id' => 1,'name' => 'Bam-e','qty' => 60,'price' => 50,'description' => 'Adobo','created_date' => date('Y-m-d h:i:s')],
		        	['id' => 2,'name' => 'Litson  Sinugba','qty' => 60,'price' => 50,'description' => 'Adobo Sinugba','created_date' => date('Y-m-d h:i:s')]
		        ],
		        "result"=> 'NG'
		    ];
		}
		$this->to_response($myArr);
	}
	
	public function add_orders()
	{
		$this->to_response($this->mUser);
		$res = $this->Order->add_order($postData);
		if($res){
			$myArr = [
		        "data"=>[
		        	['id' => 1,'name' => 'Bam-e','qty' => 60,'price' => 50,'description' => 'Adobo','created_date' => date('Y-m-d h:i:s')],
		        	['id' => 2,'name' => 'Litson  Sinugba','qty' => 60,'price' => 50,'description' => 'Adobo Sinugba','created_date' => date('Y-m-d h:i:s')]
		        ],
		        "result"=> 'OK'
		    ];
		} else {
			$myArr = [
		        "data"=>[
		        	['id' => 1,'name' => 'Bam-e','qty' => 60,'price' => 50,'description' => 'Adobo','created_date' => date('Y-m-d h:i:s')],
		        	['id' => 2,'name' => 'Litson  Sinugba','qty' => 60,'price' => 50,'description' => 'Adobo Sinugba','created_date' => date('Y-m-d h:i:s')]
		        ],
		        "result"=> 'NG'
		    ];
		}
		$this->to_response($myArr);
	}
}
