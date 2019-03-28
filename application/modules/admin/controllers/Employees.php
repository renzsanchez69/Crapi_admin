<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->library('form_builder');
		$this->load->library('pagination');
		// $this->load->model('Property_model', 'Property');
	}
	
	public function index()
	{

		$viewData = array(
		);
		$this->mViewData = $viewData;

		$this->render('employees/index');
	}

	public function edit($pid){
		$this->mTitle = 'Edit';
		$this->push_breadcrumb('Properties', base_url('admin/properties'));

		$property = $this->Property->get_property($pid);

		$property->youtube_video = $this->convertYoutube($property->youtube_link);

		$viewData = array(
			'property' => $property
		);

		$this->mViewData = $viewData;

		$this->render('employees/edit');
	}

	private function convertYoutube($string) {
		return preg_replace(
			"/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
			"<iframe class=\"embed-responsive-item\" width=\"200\" height=\"120\" src=\"//www.youtube.com/embed/$2\" frameborder=\"0\" allow=\"autoplay; encrypted-media\"></iframe>",
			$string
		);
	}
}