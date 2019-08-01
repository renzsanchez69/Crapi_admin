<?php 

class Report_model extends MY_Model {

	private $virtualFields = array(
		'customer_fullname',
		'employee_fullname',
	);

	public function get_restaurants_sales_list($conditions = array()){
		// SELECT resto_id, sum(sub_total) AS total_sales FROM `orders` LEFT OUTER JOIN restaurants ON restaurants.id = orders.resto_id GROUP BY resto_id
		$this->db->select('orders.*');
		$this->db->select('restaurants.*');
		$this->db->select('SUM(orders.sub_total) AS total_sales');
		$this->db->from('orders');
		$this->db->join('restaurants as restaurants', 'restaurants.id = orders.resto_id', 'INNER');
		$this->db->group_by('orders.resto_id');

		if (isset($conditions['resto_name']) && !empty(trim($conditions['resto_name']))) {
			$this->db->like('restaurants.resto_name', $conditions['resto_name']);
		}

		$result = $this->db->get();
		return $result->result_array();
	}

	public function get_restaurants_orders_list($conditions = array()){
		// SELECT resto_id, sum(sub_total) AS total_sales FROM `orders` LEFT OUTER JOIN restaurants ON restaurants.id = orders.resto_id GROUP BY resto_id
		$this->db->select('orders.id AS order_id');
		$this->db->select('orders.order_hash');
		$this->db->select('orders.resto_id');
		$this->db->select('orders.created_at');
		$this->db->select('orders.sub_total');
		$this->db->select('restaurants.resto_name');
		$this->db->select('employees.id AS employee_id');
		$this->db->select('CONCAT(`employees`.`firstname`, " ", `employees`.`lastname`) AS employee_fullname');
		$this->db->from('orders');
		$this->db->join('restaurants as restaurants', 'restaurants.id = orders.resto_id', 'INNER');
		$this->db->join('employees as employees', 'employees.id = orders.employee_id', 'LEFT OUTER');

		// - conditions 
		$this->db->where('is_received', 1);

		if (isset($conditions['emp_name']) && !empty(trim($conditions['emp_name']))) {
			$str = $conditions['emp_name'];
			$where = "(`employees`.`firstname` = '%".$str."%' OR `employees`.`lastname` LIKE '%".$str."%')";
			$this->db->where($where);
		}

		if (isset($conditions['resto_id']) && !empty(trim($conditions['resto_id']))) {
			$this->db->where('orders.resto_id', $conditions['resto_id']);
		}

		// if (!empty($conditions['date_from']) || !empty($conditions['date_to'])) {
		// 	// - init dates
		// 	$date_from = !empty($conditions['date_from']) ? date('Y-m-d 00:00:00', strtotime($conditions['date_from'])) : null;
		// 	$date_to = !empty($conditions['date_to']) ? date('Y-m-d 23:59:59', strtotime($conditions['date_to'])) : null;

		// 	if (empty($date_to)) {
		// 		// $date_to = date('Y-m-d 23:59:59', strtotime($date_from));
		// 		$date_to = date('Y-m-d 23:59:59', time());
		// 	}
		// 	if (empty($date_from)) {
		// 		// $date_from = date('Y-m-d 00:00:00', strtotime($date_to));
		// 		$date_from = date('Y-m-d 00:00:00', time());
		// 	}

		// 	$where = "(orders.created_at >= '".$date_from."' AND orders.created_at <= '".$date_to."')";
		// 	$this->db->where($where);
		// }

		if (!empty($conditions['date_from'])) {
			$date_from = !empty($conditions['date_from']) ? date('Y-m-d 00:00:00', strtotime($conditions['date_from'])) : null;
			$this->db->where("orders.created_at >= '".$date_from."'");
		}
		if (!empty($conditions['date_to'])) {
			$date_to = !empty($conditions['date_to']) ? date('Y-m-d 23:59:59', strtotime($conditions['date_to'])) : null;
			$this->db->where("orders.created_at <= '".$date_to."'");
		}

		$result = $this->db->get();
		return $result->result_array();
	}

	public function update_info($order_id, $data)
	{
		return $this->update($order_id, $data);
	}

	public function delete_order_details($id){
		$this->db->where('id', $id);

		$this->db->delete('order_details');
	}
}