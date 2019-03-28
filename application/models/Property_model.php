<?php 

class Property_model extends MY_Model {

	public function add_property($data)
	{
		if (empty($data)) {
			return false;
		}

		return $this->insert($data);
	}

	public function get_property($id)
	{
		if (empty($id)) {
			return false;
		}

		return $this->get($id);
	}

	public function fetch_properties($fields = array(), $params = array()) {
		if (!empty($fields)) {
			$this->db->select($fields);
		} else {
			$this->db->select('*');
		}

		$this->db->from('properties');

		if (!empty($params)) {
			$this->db->where($params);
		}
		 
		$result = $this->db->get();
		return $result->result_array();
	}

	public function get_compare_properties($ids = array(0,0)) {
		$this->db->from('properties');

		$this->db->where_in(['id' => $ids]);
		
		$result = $this->db->get();
		return $result->result_array();
	}


	public function fetch_properties_raw($fields = array(), $params = array()) {
		$queryStr = '';
		$select = '*';
		if (!empty($fields)) {
			$select = implode(', ', $fields);
		}
		$queryStr = 'SELECT '.$select.' FROM properties';

		if (!empty($params)) {
			$conditions = array();
			$having = array();
			foreach ($params as $key => $value) {
				if ($key == 'LIKE') {
					if (!empty($params['LIKE'])) {
						foreach ($params['LIKE'] as $fkey => $fvalue) {
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
}