<?php 

class Upload_model extends MY_Model {
	public function get_all_attraction_photos($fields = array(), $params = array()) {
		if (!empty($fields)) {
			$this->db->select($fields);
		} else {
			$this->db->select('*');
		}

		$this->db->from('photos');

		if (!empty($params)) {
			$this->db->where($params);
		}
		
		$result = $this->db->get()->result_array();

		return $result;
	}

	public function get_photo($id) {
		if (empty($id)) {
			return false;
		}
		$this->_table = 'photos';
		return $this->get($id);
	}

	public function add_uploads_batch($data){
		$insertResult = $this->db->insert_batch('photos', $data);

		return $insertResult;
	}

	public function delete_photo($id){
		$this->db->where('id', $id);

		$this->db->delete('photos');
	}
}