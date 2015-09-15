<?php
/**
*
*/
class Inventory_model extends CI_Model
{

	function get_receiver(){
		$this->db->order_by('fname','lname','mname');
		$query = $this->db->get('employees');
		return $query->result_array();
	}

	function add_del($data){
		$this->db->insert('delivery_batch', $data); //data array ha controller
		return $this->db->insert_id(); // returns last inserted id..
	}

	function add_del_detail($data){
		$this->db->insert('delivery', $data);
	}

	function get_item(){
		$query = $this->db->query(" SELECT a.id, a.ingredient_name FROM item a, delivery b
			WHERE a.id = b.ingredient GROUP BY b.ingredient
		");
		return $query->result_array();
	}

	function count_before_prep_stock($id){
		$query = $this->db->query(" SELECT SUM(b.stock) as stock, a.unit  FROM item a, delivery b
			WHERE a.id = b.ingredient AND b.ingredient = $id
		");
		return $query->row_array();
	}

	function get_after_prep(){
		$this->db->order_by('id','ingredient_name');
		$this->db->where('type', 'After Prep');
		$query = $this->db->get('item');
		return $query->result_array();

	}
}


 ?>
