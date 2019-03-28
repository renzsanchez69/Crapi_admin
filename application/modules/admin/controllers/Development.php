<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Development extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_builder');
	}

	public function index()
	{
		$this->mTitle = "DEVELOPMENT INFORMATION";

		// - get all user defined constants
		$constants = get_defined_constants(true);

		$this->mViewData['constants'] = $constants['user'];
		$this->render('dev_info');
	}
}
