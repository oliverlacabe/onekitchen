<?php 

/**
* 
*/
class Employees extends CI_Model
{
	
	function add_emp($data){
		$this->db->insert('employees', $data);
	}

	function get_all_emp(){
		$query = $this->db->query('SELECT a.*, b.designation_name
						  FROM employees a, designation b
						  WHERE a.designation = b.id
						  ORDER BY lname, fname, mname
						');
		return $query->result_array();
	}

	function get_designation(){
		$query = $this->db->get('designation');
		return $query->result_array();
	}

	function get_restaurant(){
		$this->db->select('restaurant');
	}
}

 ?>