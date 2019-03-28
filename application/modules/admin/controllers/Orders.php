<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->library('form_builder');
	}

	public function index(){
		$this->mTitle = 'Calculator';
		$setData = array(
		);


		$this->mViewData = $setData;
		$this->render('orders/index');
	}

}
