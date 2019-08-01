<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->library('form_builder');
		$this->load->model('Order_model', 'Order');
		$this->load->model('Order_Details_model', 'OrderDetails');
		$this->load->model('Restaurant_model', 'Restaurant');
		$this->load->model('Report_model', 'Report');
	}

	public function index()
	{
		$urlQuery = $this->input->get();
		$this->mTitle = "Reports";

		$conditions = [];
		if (!empty($urlQuery['resto_name'])) {
			$conditions['resto_name'] = $urlQuery['resto_name'];
		}

		$setData = array(
			'urlQuery' => $urlQuery
		);

		$res_order = $this->Report->get_restaurants_sales_list($conditions);

		$setData['reports'] = $res_order;

		$this->mViewData = $setData;
		$this->render('reports/index');
	}

	public function view($id)
	{
		$urlQuery = $this->input->get();
		$this->mTitle = "Reports";

		$conditions = [
			'resto_id' => $id
		];

		if (!empty($urlQuery['emp_name'])) {
			$conditions['emp_name'] = $urlQuery['emp_name'];
		}
		if (!empty($urlQuery['date_from'])) {
			$conditions['date_from'] = $urlQuery['date_from'];
		}
		if (!empty($urlQuery['date_to'])) {
			$conditions['date_to'] = $urlQuery['date_to'];
		}

		// echo('<pre>');
		// var_dump($conditions);
		// die();

		$setData = array(
			'urlQuery' => $urlQuery
		);

		$orders_list = $this->Report->get_restaurants_orders_list($conditions);

		// echo "<pre>";
		// var_dump($res_order);
		// die();

		$setData['orders'] = $orders_list;

		$this->mViewData = $setData;
		$this->render('reports/orders');
	}
}
