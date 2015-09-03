<?php 

/**
* 
*/
class Inventory extends CI_Controller
{
	function inventorylist(){
		$this->load->view('templates/header');
		$this->load->view('inventory/inventory');
	}
}


 ?>