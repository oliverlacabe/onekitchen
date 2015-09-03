<?php 

/**
* 
*/
class Model_Menu extends CI_Model
{
	
	function add_ing($data){
		$this->db->insert('item', $data);
	}

	function get_ing(){
		$this->db->order_by('ingredient_name');
		$query = $this->db->get('item');
		return $query->result_array();
	}

	function get_specific_ing($ing){
		$this->db->where('id', $ing);
		$query = $this->db->get('item');
		return $query->row_array();
	}

	function check_ing($ing){
		$this->db->where('ingredient_name', $ing);
		$this->db->select('id');
		return $this->db->get('item')->num_rows();
	}

	function add_cat($data){
		$this->db->insert('category', $data);
	}

	function get_cat(){
		$this->db->order_by('cat_name');
		$query = $this->db->get('category');
		return $query->result_array();
	}

	function check_cat($cat){
		$this->db->where('cat_name', $cat);
		$this->db->select('id');
		return $this->db->get('category')->num_rows();
	}
}

 ?>