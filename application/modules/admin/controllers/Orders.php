<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->library('form_builder');
		$this->load->model('Order_model', 'Order');
	}

	public function index()
	{
		$urlQuery = $this->input->get();
		$this->mTitle = "Orders";

		// - get fields
		$fields = array(
			'orders.*'
		);

		$params = array(
			// 'status' => USER_ACTIVE
		);

		if (!empty($urlQuery['customer_fullname'])) {
			$params['LIKE']['customer_fullname'] = $urlQuery['customer_fullname'];
		}
		if (!empty($urlQuery['resto_name'])) {
			$params['LIKE']['resto_name'] = $urlQuery['resto_name'];
		}
		if (!empty($urlQuery['address'])) {
			$params['LIKE']['orders.address'] = $urlQuery['address'];
		}
		if (!empty($urlQuery['customer_id'])) {
			$params['customer_id'] = $urlQuery['customer_id'];
		}

		$orders = $this->Order->fetch_orders_raw($fields, $params);

		$setData = array(
			'orders' => $orders,
			'urlQuery' => $urlQuery
		);


		$this->mViewData = $setData;
		$this->render('orders/index');
	}

	public function view($id)
	{
		$this->mTitle = "View Order";
		
		// $formInfo = $this->form_builder->create_form();
		$fields = array(
			'orders.*',
			'customers.address',
			'customers.longitude',
			'customers.latitude'
		);

		$order = $this->Order->fetch_orders($fields, ['orders.id' => $id]);

		$setData = array(
			'orderInfo' => !empty($order) ? $order[0] : [],
			// 'formInfo' => $formInfo
		);

		// if ($this->input->method() == 'post') {
		// 	$postData = $this->input->post();
		// 	$requiredFields = array(
		// 		'resto_name',
		// 		'address'
		// 	);

		// 	$validation = $this->checkRequiredFields($postData, $requiredFields);

		// 	if (isset($validation['hasError']) && $validation['hasError'] == true) {
		// 		$this->system_message->set_error(implode('<br>', $validation['message']));
		// 		refresh();
		// 	}

		// 	$res = $this->Order->update_info($id, $postData);

		// 	if ($res) {
		// 		$this->system_message->set_success('Successfully updated!');
		// 	} else {
		// 		$this->system_message->set_error('Failed to update!');
		// 	}

		// 	refresh();
		// }

		$this->mViewData = $setData;
		$this->render('orders/view');
	}

	public function delete_order()
	{
		// - allow ajax request only
		if (!$this->input->is_ajax_request()) {
			echo json_encode(array('result' => 'NG'));
			exit;
		}
		$postData = $this->input->post();

		if (empty($postData['id'])) {
			echo json_encode(array('result' => 'NG'));
			exit;
		}

		$res = $this->Order->update_info($postData['id'], array('status' => USER_STOP));

		if ($res) {
			echo json_encode(array('result' => 'OK'));
			exit;
		}
		
		echo json_encode(array('result' => 'NG'));
		exit;
	}

	private function checkRequiredFields($data, $requiredFields){
		$message = array();
		$hasError = false;
		foreach ($requiredFields as $value) {
			if (empty($data[$value])) {
				$message[] = $value." is required.";
				$hasError = true;
			}
		}

		return array(
			'message' => $message,
			'hasError' => $hasError
		);
	}
}
