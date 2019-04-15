<?php 

class Restaurant_model extends MY_Model {

	private $virtualFields = array(
		'owner_fullname'
	);

	public function add_restaurant($data)
	{
		if (empty($data)) {
			return false;
		}

		return $this->insert($data);
	}

	public function get_restaurant($id)
	{
		if (empty($id)) {
			return false;
		}

		return $this->get($id);
	}

	public function fetch_restaurants($fields = array(), $params = array(), $conditions = array()) {
		if (!empty($fields)) {
			$this->db->select($fields);
		} else {
			$this->db->select('restaurants.*');
		}

		$this->db->select('CONCAT(`owners`.`firstname`, " ", `owners`.`lastname`) AS owner_fullname');

		$this->db->from('restaurants');

		if (!empty($params)) {
			$this->db->where($params);
		}

		if (!empty($conditions['having'])) {
			$this->db->having($conditions['having']);
		}

		$this->db->join('owners as owners', 'owners.id = restaurants.owner_id', 'INNER');
		
		$result = $this->db->get();
		return $result->result_array();
	}

	public function fetch_restaurants_raw($fields = array(), $params = array()) {
		$queryStr = '';
		$select = '*';
		if (!empty($fields)) {
			$select = implode(', ', $fields);
		}
		$select .= ', CONCAT(`owners`.`firstname`, " ", `owners`.`lastname`) AS owner_fullname';
		$queryStr = 'SELECT '.$select.' FROM restaurants';

		$queryStr .= " INNER JOIN owners AS owners ON owners.id = restaurants.owner_id  ";

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

		$queryStr .= " ORDER BY restaurants.id DESC ";

		$result = $this->db->query($queryStr);

		return $result->result_array();
	}

	public function update_info($restaurant_id, $data)
	{
		return $this->update($restaurant_id, $data);
	}

	public function delete_restaurant($id){
		$this->db->where('id', $id);

		$this->db->delete('restaurants');
	}
}