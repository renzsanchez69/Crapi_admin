<?php 

class Owner_model extends MY_Model {

	private $virtualFields = array(
		'fullname'
	);

	/**
	 * Authentication
	 */
	public function login($username, $password)
	{
		// only activated user can login
		$where = array('username' => $username, 'status' => USER_ACTIVE);
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

	// public function validate_password($userid, $password) {
	// 	// only activated user can login
	// 	$where = array('id' => $userid, 'status  ' => 1);
	// 	$user = $this->get_by($where);
		
	// 	if ( !empty($user) && password_verify($password, $user->password) ) {
	// 		return true;
	// 	}
	// 	return false;
	// }

	// public function add_user($data)
	// {
	// 	if (empty($data)) {
	// 		return false;
	// 	}

	// 	return $this->insert($data);
	// }

	public function get_user($id)
	{
		if (empty($id)) {
			return false;
		}

		return $this->get($id);
	}

	public function fetch_users($fields = array(), $params = array()) {
		if (!empty($fields)) {
			$this->db->select($fields);
		} else {
			$this->db->select('*');
		}

		$this->db->from('users');

		if (!empty($params)) {
			$this->db->where($params);
		}
		
		$result = $this->db->get();
		return $result->result_array();
	}

	public function fetch_users_raw($fields = array(), $params = array()) {
		$queryStr = '';
		$select = '*';
		if (!empty($fields)) {
			$select = implode(', ', $fields);
		}
		$select .= ', CONCAT(`firstname`, " ", `lastname`) AS fullname';
		$queryStr = 'SELECT '.$select.' FROM owners';

		if (!empty($params)) {
			$conditions = array();
			$having = array();
			foreach ($params as $key => $value) {
				if (in_array($key, $this->virtualFields)) {
					$having[] = $key.' = "'.$value.'"';
					continue;
				}
				if ($key == 'LIKE') {
					if (!empty($params['LIKE'])) {
						foreach ($params['LIKE'] as $fkey => $fvalue) {
							if (in_array($fkey, $this->virtualFields)) {
								$having[] = $fkey.' LIKE "%'.$fvalue.'%"';
								continue;
							}
							$conditions[] = $fkey.' LIKE "%'.$fvalue.'%"';
						}
					}					
				} else {
					$conditions[] = $key.' = "'.$value.'"';
				}
			}

			if (!empty($conditions)) {
				$conditions = implode(' AND ', $conditions);
				$queryStr .= ' WHERE '.$conditions;
			}

			if (!empty($having)) {
				$having = implode(' AND ', $having);
				$queryStr .= ' HAVING '.$having;
			}
		}

		$result = $this->db->query($queryStr);
		return $result->result_array();
	}

	public function update_info($user_id, $data)
	{
		return $this->update($user_id, $data);
	}

	// public function change_password($user_id, $password) {
	// 	$hashed = password_hash($password, PASSWORD_DEFAULT);
	// 	return $this->update_field($user_id, 'password', $hashed);
	// }
}