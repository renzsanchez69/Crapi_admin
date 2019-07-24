<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends Admin_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->database();
		$this->load->model('Admin_model', 'Admin');
	}

	public function index(){

		$userInfo = $this->Admin->get_info($this->mUser->id);

		$setData = [
			'user' => $userInfo
		];
		$this->mViewData = $setData;

		$this->render('account');
	}
}
