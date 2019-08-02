<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends Admin_Controller {

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
			'customers.latitude',
			'restaurants.resto_name',
			'restaurants.longitude AS resto_longitude',
			'restaurants.latitude AS resto_latitude',
			'restaurants.address AS resto_address'
		);
		$order = $this->Order->fetch_orders($fields, ['orders.id' => $id]);

		$returnData = array(
			'order_details.*',
			'products.name',
		);

		$orderDetails = $this->OrderDetails->fetch_order_details($returnData, ['order_details.order_id' => $id]);
		$setData = array(
			'orderInfo' => !empty($order) ? $order[0] : [],
			'orderDetails' => !empty($orderDetails) ? $orderDetails : []
		);
		$order_status = null;
		if (!empty($order[0])){
			$order = $order[0];
			if (
				$order['order_status'] == 'pending' &&
				$order['is_approved'] == 2 &&
				$order['is_preparing'] == 1 &&
				$order['is_delivered'] == 0 &&
				$order['is_received'] == 0
			) {
				$order_status = 'preparing';
			} elseif ($order['order_status'] == 'failed') {
				$order_status = 'rejected';
			} elseif ($order['is_received'] == 1) {
				$order_status = 'claimed';
			} elseif ($order['is_received'] == 2) {
				$order_status = 'not_claimed';
			}
		}
		$setData['ordStatus'] = $order_status;

		if ($this->input->method() == 'post') {
			$postData = $this->input->post();
			$update_params = [];

			if (!empty($postData['order_status'])) {
				switch ($postData['order_status']) {
					case 'preparing':
						$update_params['order_status'] = 'pending';
						$update_params['is_approved'] = 2;
						$update_params['is_preparing'] = 1;
						$update_params['is_delivered'] = 0;
						$update_params['is_received'] = 0;
						break;
					case 'claimed':
						$update_params['order_status'] = 'success';
						$update_params['is_approved'] = 2;
						$update_params['is_preparing'] = 1;
						$update_params['is_delivered'] = 1;
						$update_params['is_received'] = 1;
						break;
					case 'not_claimed':
						$update_params['order_status'] = 'success';
						$update_params['is_approved'] = 2;
						$update_params['is_preparing'] = 1;
						$update_params['is_delivered'] = 1;
						$update_params['is_received'] = 2;
						break;
					case 'rejected':
						$update_params['order_status'] = 'failed';
						$update_params['is_approved'] = 0;
						$update_params['is_preparing'] = 0;
						$update_params['is_delivered'] = 0;
						$update_params['is_received'] = 0;
						break;
					
					default:
						break;
				}
			}

			if (empty($update_params)) {
				$this->system_message->set_error(implode('<br>', 'Nothing to update.'));
				refresh();
			}

			$res = $this->Order->update_info($id, $update_params);

			if ($res) {
				$this->system_message->set_success('Successfully updated!');
				refresh();
			} else {
				$this->system_message->set_error('Failed to updated!');
				refresh();
			}
		}

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
