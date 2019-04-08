<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// NOTE: this controller inherits from MY_Controller,
// instead of Admin_Controller since no authentication is required
class Login extends MY_Controller {

	/**
	 * Login page and submission
	 */
	public function index()
	{
		if ($this->session->has_userdata('admin_user')) {
			redirect('admin');
		}
		$this->load->library('form_builder');
		$form = $this->form_builder->create_form();

		if ($form->validate())
		{
			// passed validation
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			// - add additional validation here

			$this->load->model('admin_model', 'users');
			$user = $this->users->login($username, $password);

			if ( empty($user) )
			{
				// login failed
				$this->system_message->set_error('<b>Failed to login your account</b>.<br> Please check your username and password.');
				refresh();
			}
			else
			{
				// login success
				$this->session->set_userdata('admin_user', $user);
				redirect('admin', 'refresh');
			}
		}
		
		// display form when no POST data, or validation failed
		$this->mViewData['body_class'] = 'login-page';
		$this->mViewData['body_id'] = 'loginForm';
		$this->mViewData['form'] = $form;
		$this->mBodyClass = 'login-page';
		$this->render('login', 'empty');
	}
}
