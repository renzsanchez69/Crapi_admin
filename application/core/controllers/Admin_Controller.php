<?php

/**
 * Base Controller for Admin module
 */
class Admin_Controller extends MY_Controller {

	// Constructor
	public function __construct()
	{
		parent::__construct();
		$this->verify_auth();
		// get menu belongs to a user role
		$this->mMenu = $this->mMenu[ROLE_ADMIN];
		
	}

	// Verify user authentication
	protected function verify_auth($redirect_url = 'admin/login')
	{
		// obtain user data from session; redirect to Login page if not found
		if ($this->session->has_userdata('admin_user'))
			$this->mUser = $this->session->userdata('admin_user');
		else
			redirect($redirect_url);
	}

	// Verify if the login user belongs to target role
	// ($role can be string or string array)
	protected function verify_role($role)
	{
		if ( empty($this->mUser) )
			redirect('admin/login');

		$pass = is_array($role) ? in_array(ROLE_ADMIN, $role) : (ROLE_ADMIN==$role);
		
		if (!$pass)
			redirect('admin');
	}

	// Render template (override parent)
	protected function render($view_file)
	{
		// load skin according to user role
		$config = $this->mSiteConfig['adminlte'];
		$this->mViewData['body_class'] = $config['skins'][ROLE_ADMIN];
		parent::render($view_file);
	}
}