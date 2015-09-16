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
		$query = $this->db->query(" SELECT SUM(b.stock) as stock, a.unit, COUNT(b.id) as ctr, SUM(b.price) as total
			FROM item a, delivery b
			WHERE a.id = b.ingredient AND b.ingredient = $id
		");
		return $query->row_array();
	}

	function get_before_prep_detail($id){
		$query = $this->db->query(" SELECT b.stock, a.unit, b.price
			FROM item a, delivery b
			WHERE a.id = b.ingredient AND b.ingredient = $id
		");
		return $query->result_array();
	}

	function get_prep_detail($id){
		$query = $this->db->query("SELECT b.stock, a.unit, b.price, a.ingredient_name
			FROM item a, prepared_items b
			WHERE a.id = b.prep_ingredient AND b.prep_ingredient = $id
		");
		return $query->result_array();
	}

	function get_after_prep(){
		$this->db->order_by('id','ingredient_name');
		$this->db->where('type', 'After Prep');
		$query = $this->db->get('item');
		return $query->result_array();

	}

	function get_before_prep(){
		$this->db->order_by('id','ingredient_name');
		$this->db->where('type', 'Before Prep');
		$query = $this->db->get('item');
		return $query->result_array();

	}

	function add_prep($data){
		$this->db->insert('prepared_items', $data);
	}

	function get_prep(){
		$this->db->select('distinct(prep_ingredient) as id');
		return $this->db->get('prepared_items')->result_array();
	}
}


 ?>
