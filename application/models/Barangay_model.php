<?php 

class Barangay_model extends MY_Model {
	public function fetch_barangays($fields = array(), $params = array()) {
		if (!empty($fields)) {
			$this->db->select($fields);
		} else {
			$this->db->select('*');
		}

		$this->db->from('barangays');

		if (!empty($params)) {
			$this->db->where($params);
		}
		 
		$result = $this->db->get();
		return $result->result_array();
	}

	public function update_info($id, $data){
		return $this->update($id, $data);
	}
}