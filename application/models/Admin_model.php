<?php 

class Admin_model extends MY_Model {

	/**
	 * Authentication
	 */
	public function login($username, $password)
	{
		// only activated user can login
		$where = array('username' => $username, 'status' => 1);
		$user = $this->get_by($where);
		
		if ( !empty($user) && password_verify($password, $user->password) )
		{
			// success - return user object without password field
			unset($user->password);
			return $user;
		}

		// failed
		return NULL;
	}

	public function get_info($id)
	{
		if (empty($id)) {
			return false;
		}

		return $this->get($id);
	}

	/**
	 * Update account info
	 */
	public function update_info($user_id, $data)
	{
		return $this->update($user_id, $data);
	}
	
	/**
	 * Change password
	 */
	public function change_password($user_id, $password)
	{
		$hashed = password_hash($password, PASSWORD_DEFAULT);
		return $this->update_field($user_id, 'password', $hashed);
	}
}