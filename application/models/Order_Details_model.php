<?php 

class Order_Details_model extends MY_Model {

	private $virtualFields = array(
		'customer_fullname'
	);

	public function add_order_details($data)
	{
		if (empty($data)) {
			return false;
		}
		
		return $this->insert($data);;
	}

	public function get_order_details($id)
	{
		if (empty($id)) {
			return false;
		}

		return $this->get($id);
	}

	public function get_order_details_by($params)
	{
		$this->db->select('order_details.*');
		$this->db->from('order_details');
		$this->db->where($params);

		$result = $this->db->get();
		return $result->result_array();
	}

	public function fetch_order_details($fields = array(), $params = array(), $conditions = array()) {
		
		if (!empty($fields)) {
			$this->db->select($fields);
		} else {
			$this->db->select('order_details.*');
		}
			$this->db->select('products.name');

		$this->db->from('order_details');
		$this->db->join('products as products', 'products.id = order_details.product_id', 'INNER');

		if (!empty($params)) {
			$this->db->where($params);
		}

		if (!empty($conditions['having'])) {
			$this->db->having($conditions['having']);
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