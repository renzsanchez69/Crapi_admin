<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends API_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Owner_model', 'Owner', 'Customers_model', 'Customers');
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
		var_dump("asdfsdf");
		var_dump($_POST);
		die();
	}
}
