<?php 
/**
* 
*/
class Sales_model extends CI_Model
{
	function get_menu(){
		$query = $this->db->get('menu');
		return $query->result_array();
	}

	function get_spec_menu($id){
		$this->db->where('id', $id);
		$query=$this->db->get('menu');
		return $query->row_array();
	}

	function add_bill($data){
		$this->db->insert('bill_batch', $data);
		return $this->db->insert_id();
	}

	function add_bill_detail($data){
		$this->db->insert('bill_detail', $data);
	}
}







 ?>