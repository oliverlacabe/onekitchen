<?php 

/**
* 
*/
class Model_Api extends CI_Model
{
	
	function get_resto(){
		return $this->db->get('restaurant')->result_array();
	}
}

 ?>