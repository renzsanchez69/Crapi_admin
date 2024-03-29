<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PayMaya\PayMayaSDK;
use PayMaya\API\Checkout;
use PayMaya\Model\Checkout\Item;
use PayMaya\Model\Checkout\ItemAmount;
use PayMaya\Model\Checkout\ItemAmountDetails;
use PayMaya\Model\Checkout\Buyer;
use PayMaya\Model\Checkout\Address;
use PayMaya\Model\Checkout\Contact;
/**
 * Home page
 */
class Payments extends API_Controller {

	private $firstName;
	private $middleName;
	private $lastName;
	private $contact;
	private $shippingAddress;
	private $billingAddress;

	public function __construct(){
		parent::__construct();
		$this->load->model('Order_model', 'Order');
		$this->load->model('Customer_model', 'Customer');

		PayMayaSDK::getInstance()->initCheckout(
			"pk-eo4sL393CWU5KmveJUaW8V730TTei2zY8zE4dHJDxkF", 
			"sk-KfmfLJXFdV5t1inYN8lIOwSrueC1G27SCAklBqYCdrU", 
			"SANDBOX"
		);

		$this->firstName = "John";
		$this->middleName = "Michaels";
		$this->lastName = "Doe";

		// Contact
		$this->contact = new Contact();
		$this->contact->phone = "+63(2)1234567890";
		$this->contact->email = "paymayabuyer1@gmail.com";

		// Address
		$address = new Address();
		$address->line1 = "9F Robinsons Cybergate 3";
		$address->line2 = "Pioneer Street";
		$address->city = "Mandaluyong City";
		$address->state = "Metro Manila";
		$address->zipCode = "12345";
		$address->countryCode = "PH";
		$this->shippingAddress = $address;
		$this->billingAddress = $address;
	}

	public function paymaya_checkout(){
		// $postData = $this->input->get();
		$postData = $this->input->post();

		if (!isset($postData['order_id'])) {
			$this->to_response([
				"error"=> "OrderID is missing.",
				"result"=> REQUEST_RESULT_NG
			]);
		}
		if (!isset($postData['callback_url'])) {
			$this->to_response([
				"error"=> "callback url is missing.",
				"result"=> REQUEST_RESULT_NG
			]);
		}

		$params = [
			'orders.id' => $postData['order_id'],
			'orders.order_status' => ORDER_STATUS_PENDING
		];

		$order_details = $this->Order->fetch_orders_by(null, $params);

		$items = self::prepare_items($order_details);

		// Checkout
		$itemCheckout = new Checkout();
		$itemCheckout->buyer = $this->buyerInfo();

		$itemCheckout->items = $items['items'];
		$itemCheckout->totalAmount = $items['totalAmount'];

		// - generate reference number
		$reference_number = 'ORDPAY_'.$postData['order_id'].time();
		$itemCheckout->requestReferenceNumber = $reference_number;
		$urlparams = "";
		$urlparams .= "&refno=".$reference_number;
		$urlparams .= "&ordid=".$postData['order_id'];
		$itemCheckout->redirectUrl = array(
			"success" => $postData['callback_url']."/payment_callback.html?status=success".$urlparams,
			"failure" => $postData['callback_url']."/payment_callback.html?status=fail".$urlparams,
			"cancel" => $postData['callback_url']."/payment_callback.html?status=cancel".$urlparams
		);

		$itemCheckout->execute();
		$itemCheckout->retrieve();

		$result = [
			"result"=> REQUEST_RESULT_OK,
			"data" => [
				'checkout_id' => $itemCheckout->id,
				'checkout_url' => $itemCheckout->url,
			],
		];
		$this->to_response($result);

	}

	private function prepare_items($order_details){
		$order_items = [];
		$totalAmount = 0;
		foreach ($order_details as $product) {
			// Item
			$item = new Item();
			$item->name = $product['name'];
			// $item->code = "pm_belt";
			$item->description = $product['details'];
			$item->quantity = $product['qty'];


			$itemAmountDetails = new ItemAmountDetails();
			$itemAmountDetails->subtotal = $product['sub_total'];

			$itemAmount = new ItemAmount();
			$itemAmount->currency = "PHP";
			$itemAmount->value = $product['price'];
			$itemAmount->details = $itemAmountDetails;

			$itemSubtotal = new ItemAmount();
			$itemSubtotal->currency = "PHP";
			$itemSubtotal->value = $product['price'] * $product['qty'];
			$itemSubtotal->details = $itemAmountDetails;

			$item->amount = $itemAmount;
			$item->totalAmount = $itemSubtotal;

			// - push item to orders list
			$order_items[] = $item;

			// - get subtotal amount
			$totalAmount += $product['sub_total'];
		}

		// - compute tax
		// $tax = $totalAmount * .12;
		$tax = 0;
		$totalAmountPayable = $tax + $totalAmount;

		$itemAmountDetails = new ItemAmountDetails();
		$itemAmountDetails->shippingFee = 0;
		$itemAmountDetails->tax = $tax;
		$itemAmountDetails->subtotal = $totalAmount;
		$itemAmount = new ItemAmount();
		$itemAmount->currency = "PHP";
		$itemAmount->value = $totalAmountPayable;
		$itemAmount->details = $itemAmountDetails;

		return array(
			'items' => $order_items,
			'totalAmount' => $itemAmount
		);
	}

	public function subcribeByPaymaya() {


		$postData = $this->input->post();
		$subItem = [
			[
				'name' => 'Subscription',
				'details' => 'Monthly Subscription',
				'qty' => 1,
				'sub_total' => 500,
				'price' => 500
			]
		];

		$itemAmountDetails = new ItemAmountDetails();
		$itemAmountDetails->shippingFee = 0;
		$itemAmountDetails->tax = 0;
		$itemAmountDetails->subtotal = 0;
		$itemAmount = new ItemAmount();
		$itemAmount->currency = "PHP";
		$itemAmount->value = 0;
		$itemAmount->details = $itemAmountDetails;

		$items = self::prepare_items($subItem);

		// Checkout
		$itemCheckout = new Checkout();
		$itemCheckout->buyer = $this->buyerInfo();

		$itemCheckout->items = $items['items'];
		$itemCheckout->totalAmount = $items['totalAmount'];

		// - generate reference number
		$reference_number = 'SUBPAY_'.$postData['owner_id'].time();
		$itemCheckout->requestReferenceNumber = $reference_number;
		$urlparams = "";
		$urlparams .= "&refno=".$reference_number;
		$itemCheckout->redirectUrl = array(
			"success" => $postData['callback_url']."/o-sub.html?status=success".$urlparams,
			"failure" => $postData['callback_url']."/o-sub.html?status=fail".$urlparams,
			"cancel" => $postData['callback_url']."/o-sub.html?status=cancel".$urlparams
		);

		$itemCheckout->execute();
		$itemCheckout->retrieve();

		$result = [
			"result"=> REQUEST_RESULT_OK,
			"data" => [
				'checkout_id' => $itemCheckout->id,
				'checkout_url' => $itemCheckout->url,
			],
		];
		// echo('<pre>');
		// var_dump($result);
		// die();
		$this->to_response($result);

	}

	public function buyerInfo()
	{
		$buyer = new Buyer();
		$buyer->firstName = $this->firstName;
		$buyer->middleName = $this->middleName;
		$buyer->lastName = $this->lastName;
		$buyer->contact = $this->contact;
		$buyer->shippingAddress = $this->shippingAddress;
		$buyer->billingAddress = $this->billingAddress;
		return $buyer;
	}
}	
