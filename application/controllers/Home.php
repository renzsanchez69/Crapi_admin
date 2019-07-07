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
class Home extends MY_Controller {

	private $firstName;
	private $middleName;
	private $lastName;
	private $contact;
	private $shippingAddress;
	private $billingAddress;

	public function __construct(){

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

	public function index() {

		PayMayaSDK::getInstance()->initCheckout(
			"pk-eo4sL393CWU5KmveJUaW8V730TTei2zY8zE4dHJDxkF", 
			"sk-KfmfLJXFdV5t1inYN8lIOwSrueC1G27SCAklBqYCdrU", 
			"SANDBOX"
		);

		// Item
		$itemAmountDetails = new ItemAmountDetails();
		$itemAmountDetails->shippingFee = "14.00";
		$itemAmountDetails->tax = "5.00";
		$itemAmountDetails->subtotal = "50.00";
		$itemAmount = new ItemAmount();
		$itemAmount->currency = "PHP";
		$itemAmount->value = "69.00";
		$itemAmount->details = $itemAmountDetails;
		$item = new Item();
		$item->name = "Leather Belt";
		$item->code = "pm_belt";
		$item->description = "Medium-sized belt made from authentic leather";
		$item->quantity = "1";
		$item->amount = $itemAmount;
		$item->totalAmount = $itemAmount;

		// Checkout
		$itemCheckout = new Checkout();
		$itemCheckout->buyer = $this->buyerInfo();
		$itemCheckout->items = array($item);
		$itemCheckout->totalAmount = $itemAmount;
		$itemCheckout->requestReferenceNumber = "TESTABC123zzz";
		$itemCheckout->redirectUrl = array(
			"success" => "http://crapicebu.site/",
			"failure" => "https://shop.com/failure",
			"cancel" => "https://shop.com/cancel"
			);

		$itemCheckout->execute();
		$itemCheckout->retrieve();
		echo "<pre>";
		var_dump($itemCheckout);
		echo "Checkout ID: " . $itemCheckout->id . "\n";
		echo "Checkout URL: " . $itemCheckout->url . "\n";

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
