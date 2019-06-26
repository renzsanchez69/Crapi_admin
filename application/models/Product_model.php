<?php 

class Product_model extends MY_Model {

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
		$owner = $this->get_by($where);
		
		if ( !empty($owner) && password_verify($password, $owner->password) )
		{
			// success - return owner object without password field
			unset($owner->password);
			return $owner;
		}

		// failed
		return NULL;
	}

	// public function validate_password($ownerid, $password) {
	// 	// only activated owner can login
	// 	$where = array('id' => $ownerid, 'status  ' => 1);
	// 	$owner = $this->get_by($where);
		
	// 	if ( !empty($owner) && password_verify($password, $owner->password) ) {
	// 		return true;
	// 	}
	// 	return false;
	// }

	public function add_product($data)
	{
		if (empty($data)) {
			return false;
		}

		return $this->insert($data);
	}

	public function get_product($id)
	{
		if (empty($id)) {
			return false;
		}

		return $this->get($id);
	}

	public function fetch_product($fields = array(), $params = array()) {
		if (!empty($fields)) {
			$this->db->select($fields);
		} else {
			$this->db->select('*');
		}

		$this->db->from('products');

		if (!empty($params)) {
			$this->db->where($params);
		}
		
		$result = $this->db->get();
		return $result->result_array();
	}

	public function fetch_product_raw($fields = array(), $params = array()) {
		$queryStr = '';
		$select = '*';
		if (!empty($fields)) {
			$select = implode(', ', $fields);
		}
		$queryStr = 'SELECT '.$select.' FROM products';

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
		$queryStr .= ' ORDER BY products.id DESC';

		$result = $this->db->query($queryStr);
		return $result->result_array();
	}

	public function update_info($owner_id, $data)
	{
		return $this->update($owner_id, $data);
	}

	public function change_password($owner_id, $password) {
		$hashed = password_hash($password, PASSWORD_DEFAULT);
		return $this->update_field($user_id, 'password', $hashed);
	}
}