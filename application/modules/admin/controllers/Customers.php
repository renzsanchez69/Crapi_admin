<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->library('form_builder');
	}

	public function index(){
		// - set data for view
		$setData = array(
		);
		$this->mViewData = $setData;

		// - render view file
		$this->render('customers/index');
	}

}
