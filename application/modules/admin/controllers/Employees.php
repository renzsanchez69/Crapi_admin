<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->library('form_builder');
		$this->load->library('pagination');
		$this->load->model('Employee_model', 'Employee');
	}
	
	public function index()
	{
		$urlQuery = $this->input->get();
		$this->mTitle = "Employees";

		// - get fields
		$fields = array(
			'employees.*'
		);

		$params = array(
			// 'status' => USER_ACTIVE
		);

		if (!empty($urlQuery['name'])) {
			$params['LIKE']['fullname'] = $urlQuery['name'];
		}
		if (!empty($urlQuery['email'])) {
			$params['LIKE']['email'] = $urlQuery['email'];
		}
		if (!empty($urlQuery['contact_number'])) {
			$params['LIKE']['contact_number'] = $urlQuery['contact_number'];
		}
		if (!empty($urlQuery['address'])) {
			$params['LIKE']['address'] = $urlQuery['address'];
		}
		if (!empty($urlQuery['status'])) {
			$params['status'] = $urlQuery['status'];
		}
		if (!empty($urlQuery['gender'])) {
			$params['gender'] = $urlQuery['gender'];
		}

		$employees = $this->Employee->fetch_employees_raw($fields, $params);

		if (!empty($employees)) {
			foreach ($employees as $key => $employee) {
				$fName = !empty($employee['firstname']) ? ucfirst($employee['firstname']) : '';
				$lName = !empty($employee['lastname']) ? ucfirst($employee['lastname']) : '';
				$employees[$key]['fullname'] = $fName.' '.$lName;
			}
		}

		$setData = array(
			'employees' => $employees,
			'urlQuery' => $urlQuery
		);


		$this->mViewData = $setData;
		$this->render('employees/index');

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