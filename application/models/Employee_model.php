<?php 

class Employee_model extends MY_Model {

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
		$employee = $this->get_by($where);
		
		if ( !empty($employee) && password_verify($password, $employee->password) )
		{
			// success - return employee object without password field
			unset($employee->password);
			return $employee;
		}

		// failed
		return NULL;
	}

	public function validate_password($employeeid, $password) {
		// only activated employee can login
		$where = array('id' => $employeeid, 'status  ' => 1);
		$employee = $this->get_by($where);
		
		if ( !empty($employee) && password_verify($password, $employee->password) ) {
			return true;
		}
		return false;
	}

	public function add_employee($data)
	{
		if (empty($data)) {
			return false;
		}

		return $this->insert($data);
	}

	public function get_employee($id)
	{
		if (empty($id)) {
			return false;
		}

		return $this->get($id);
	}

	public function fetch_employees($fields = array(), $params = array()) {
		if (!empty($fields)) {
			$this->db->select($fields);
		} else {
			$this->db->select('*');
		}

		$this->db->from('employees');

		if (!empty($params)) {
			$this->db->where($params);
		}
		
		$result = $this->db->get();
		return $result->result_array();
	}

	public function fetch_employees_raw($fields = array(), $params = array()) {
		$queryStr = '';
		$select = '*';
		if (!empty($fields)) {
			$select = implode(', ', $fields);
		}
		$select .= ', CONCAT(`firstname`, " ", `lastname`) AS fullname';
		$queryStr = 'SELECT '.$select.' FROM employees';

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

	public function update_info($employee_id, $data)
	{
		return $this->update($employee_id, $data);
	}

	public function change_password($employee_id, $password) {
		$hashed = password_hash($password, PASSWORD_DEFAULT);
		return $this->update_field($user_id, 'password', $hashed);
	}
} 