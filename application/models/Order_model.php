<?php 

class Order_model extends MY_Model {

	private $virtualFields = array(
		'customer_fullname'
	);

	public function add_order($data)
	{
		if (empty($data)) {
			return false;
		}
		$this->insert($data);

		return  $this->db->insert_id();
	}

	public function get_order($id)
	{
		if (empty($id)) {
			return false;
		}

		return $this->get($id);
	}

	public function fetch_orders($fields = array(), $params = array(), $conditions = array()) {
		if (!empty($fields)) {
			$this->db->select($fields);
		} else {
			$this->db->select('orders.*');
		}

		$this->db->select('CONCAT(`customers`.`firstname`, " ", `customers`.`lastname`) AS customer_fullname');

		$this->db->from('orders');

		if (!empty($params)) {
			$this->db->where($params);
		}

		if (!empty($conditions['having'])) {
			$this->db->having($conditions['having']);
		}

		$this->db->join('customers as customers', 'customers.id = orders.customer_id', 'INNER');
		
		$result = $this->db->get();
		return $result->result_array();
	}

	public function fetch_orders_by($fields = array(), $params = array(), $conditions = array()) {
		if (!empty($fields)) {
			$this->db->select($fields);
		} else {
			$this->db->select('orders.*');
		}

		$this->db->select('order_details.qty,order_details.price,order_details.sub_total');
		$this->db->select('products.name');

		$this->db->from('orders');

		if (!empty($params)) {
			$this->db->where($params);
		}

		if (!empty($conditions['having'])) {
			$this->db->having($conditions['having']);
		}

		$this->db->join('order_details', 'order_details.order_id = orders.id', 'LEFT');
		$this->db->join('products', 'products.id = order_details.product_id', 'LEFT');
		
		$result = $this->db->get();
		return $result->result_array();
	}

	public function fetch_orders_raw($fields = array(), $params = array()) {
		$queryStr = '';
		$select = '*';
		if (!empty($fields)) {
			$select = implode(', ', $fields);
		}
		$select .= ', CONCAT(`customers`.`firstname`, " ", `customers`.`lastname`) AS customer_fullname';
		$queryStr = 'SELECT '.$select.' FROM orders';

		$queryStr .= " INNER JOIN customers AS customers ON customers.id = orders.customer_id  ";

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

		$queryStr .= " ORDER BY orders.id DESC ";

		$result = $this->db->query($queryStr);

		return $result->result_array();
	}

	public function update_info($order_id, $data)
	{
		return $this->update($order_id, $data);
	}

	public function delete_order($id){
		$this->db->where('id', $id);

		$this->db->delete('orders');
	}

	public function delete_order_by($id){
		$this->db->where('id', $id);
		$this->db->delete('orders');
		
		$this->db->where('order_id', $id);
		$this->db->delete('order_details');
	}
}