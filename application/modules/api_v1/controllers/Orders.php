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
		$postData = $this->input->post();
		if(empty($this->mUser) && !isset( $this->mUser)){
		    $myArr = [
		        "error" => "User not found",
		        "result"=> 'NG'
		    ];
		    return $this->to_response($myArr);
		}

		$params = [];
		if (isset($postData['search']) && $postData['search'] != '') {
			$params['name'] = $postData['search'];
		}
		if (isset($postData['customer_id'])) {
			$params['customer_id'] = $postData['customer_id'];
		}
		if (isset($postData['order_status'])) {
			$params['order_status'] = $postData['order_status'];
		}

		$res_order = $this->Order->fetch_orders(null, $params);
		if(!empty($res_order)){
				$myArr = [
			        "data"=> $res_order,
			        "result"=> 'OK'
			    ];

		} else {
		    $myArr = [
		        "data"=>[],
		        "result"=> 'NG'
		    ];
		}
		$this->to_response($myArr);
	}

	public function order_details_list() {
		$postData = $this->input->post();

		if(empty($this->mUser) && !isset( $this->mUser)){
		    $myArr = [
		        "data"=>[],
		        "result"=> 'NG'
		    ];
		    return $this->to_response($myArr);
		}

		$params = [];
		if (isset($postData['status'])) {
			$params['status'] = $postData['status'];
		}
		if (isset($postData['order_id'])) {
			$params['order_id'] = $postData['order_id'];
		}
		$res_order = $this->OrderDetails->fetch_order_details([], $params);
		if(!empty($res_order)){

				$myArr = [
			        "data"=> $res_order,
			        "result"=> 'OK'
			    ];

		} else {
		    $myArr = [
		        "data"=>[],
		        "result"=> 'NG'
		    ];
		}
		$this->to_response($myArr);
	}
	
	public function order_delete()
	{
		$postData = $this->input->post();
		if(empty( $this->mUser) && !isset( $this->mUser)){
		    $myArr = [
		        "data"=>[],
		        "result"=> 'NG'
		    ];
		    return $this->to_response($myArr);
		}

		$myArr = [
	        "data"=>[],
	        "result"=> 'OK'
	    ];
		 $this->Order->delete_order_by($postData["order_id"]);
		$this->to_response($myArr);
	}

	public function order_delete_by_item()
	{
		$postData = $this->input->post();
		if(empty( $this->mUser) && !isset( $this->mUser)){
		    $myArr = [
		        "data"=>[],
		        "result"=> 'NG'
		    ];
		    return $this->to_response($myArr);
		}

		$myArr = [
	        "data"=>[],
	        "result"=> 'OK'
	    ];
		 $this->Order->delete_order_by_item($postData["order_id"]);
		$this->to_response($myArr);
	}
	
	public function add_orders()
	{
		$postData = $this->input->post();
		if(empty( $this->mUser) && !isset( $this->mUser)){
		    $myArr = [
		        "data"=>[],
		        "result"=> 'NG'
		    ];
		    return $this->to_response($myArr);
		}

		$data['orders.customer_id'] = $this->mUser[0]['id'];
		$data['orders.resto_id'] = $postData["resto_id"];
		$data['orders.order_number'] = $this->mUser[0]['id'].time();

		$checkIfHaveOrder = $this->Order->fetch_orders_by([],
			[
				'orders.resto_id' => $postData["resto_id"],
				'orders.customer_id' => $this->mUser[0]['id'],
				'orders.order_status' => 'pending']
			);
		if (!empty($checkIfHaveOrder[0])) {

				$checkIfExist = $this->OrderDetails->get_order_details_by(['order_id'=> $checkIfHaveOrder[0]["id"],'product_id'=>$postData["product_id"]]);
				if(!empty($checkIfExist) && isset($checkIfExist)){

					$order_details['qty'] = $checkIfExist[0]["qty"] + $postData["qty"];
					$new_sub_total = $postData["qty"] * $postData["price"];
					$order_details['sub_total'] = $checkIfExist[0]["sub_total"] + $new_sub_total;
					$order_details['description_request'] = $postData["description"];
					$res = $this->OrderDetails->update_info($checkIfExist[0]["id"],$order_details);
					if($res){
						$myArr = [
					        "data"=>$res,
					        "result"=> 'OK'
					    ];

					} else {
						$myArr = [
					        "data"=>[],
					        "result"=> 'NG'
					    ];
					}

				} else {

					$order_details['order_id'] = $checkIfHaveOrder[0]["id"];
					$order_details['product_id'] = $postData["product_id"];
					$order_details['qty'] = $postData["qty"];
					$order_details['price'] = $postData["price"];
					$order_details['sub_total'] = $postData["qty"] * $postData["price"];
					$order_details['description_request'] = $postData["description"];
					$res = $this->OrderDetails->add_order_details($order_details);

					if($res){
						$myArr = [
					        "data"=>$res,
					        "result"=> 'OK'
					    ];

					} else {
						$myArr = [
					        "data"=>[],
					        "result"=> 'NG'
					    ];

					}
					
				}


		} else {
			$res_order = $this->Order->add_order($data);
			if(!empty($res_order)){

				$order_details['order_id'] = $res_order;
				$order_details['resto_id'] = $postData["resto_id"];
				$order_details['product_id'] = $postData["product_id"];
				$order_details['qty'] = $postData["qty"];
				$order_details['price'] = $postData["price"];
				$order_details['sub_total'] = $postData["qty"] * $postData["price"];
				$order_details['description_request'] = $postData["description"];
				$res = $this->OrderDetails->add_order_details($order_details);

				if($res){
					$myArr = [
				        "data"=>[],
				        "result"=> 'OK'
				    ];
				} else {
					$myArr = [
				        "data"=>[],
				        "result"=> 'NG'
				    ];
				}

			} else {
			    $myArr = [
			        "data"=>[],
			        "result"=> 'NG'
			    ];
			}

		} 


		$this->to_response($myArr);
	}
	
	public function edit_orders()
	{
		$postData = $this->input->post();
		if(empty( $this->mUser) && !isset( $this->mUser)){
		    $myArr = [
		        "data"=>[],
		        "result"=> 'NG'
		    ];
		    return $this->to_response($myArr);
		}

		$data["qty"]= $postData["qty"];
  		$data["price"] =$postData["price"];
  		$data["sub_total"]=($postData["price"] * $postData["qty"]);
  		$data["description_request"]=$postData["description"];
		$res = $this->OrderDetails->update_info($postData["order_details_id"],$data);
		if($res){
			$myArr = [
		        "data"=>[],
		        "result"=> 'OK'
		    ];

		} else {
			$myArr = [
		        "data"=>[],
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
		        "data"=>[],
		        "result"=> 'NG'
		    ];
		    return $this->to_response($myArr);
		}

		$res_order = $this->Order->fetch_orders_by(null,
		[
			'orders.customer_id'=>$this->mUser[0]['id'],
			'orders.resto_id'=>$postData['resto_id'],
			'orders.order_status'=>'pending']
		);
		if(!empty($res_order)){

				$myArr = [
			        "data"=> $res_order,
			        "result"=> 'OK'
			    ];

		} else {
		    $myArr = [
		        "data"=>[],
		        "result"=> 'NG'
		    ];
		}
		$this->to_response($myArr);
	}

	public function order_search() {
		$postData = $this->input->post();
		if(empty($this->mUser) && !isset( $this->mUser)){
		    $myArr = [
		        "data"=>[],
		        "result"=> 'NG'
		    ];
		    return $this->to_response($myArr);
		}

		$params = [];

		if (isset($postData['search']) && $postData['search'] != '') {
			$params['name'] = $postData['search'];
		}
		if (isset($postData['resto_id'])) {
			$params['resto_id'] = $postData['resto_id'];
		}
		if (isset($postData['order_status'])) {
			$params['order_status'] = $postData['order_status'];
		}

		$res_order = $this->Order->fetch_orders_search(null, $params);

		if(!empty($res_order)){
				$myArr = [
			        "data"=> $res_order,
			        "result"=> 'OK'
			    ];

		} else {
		    $myArr = [
		        "data"=>[],
		        "result"=> 'NG'
		    ];
		}

		$this->to_response($myArr);
	}
}
