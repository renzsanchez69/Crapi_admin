<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Admin_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		
		$setData = array(
			// - DATA
		);


		$this->mViewData = $setData;

		// echo "<pre>";
		// var_dump($this->mViewData);
		// die();
		$this->render('home');
	}
}
