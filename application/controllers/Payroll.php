<?php 

	/**
	* 
	*/
	class Payroll extends CI_Controller
	{
		
		function viewpayroll (){

			$this->load->view('templates/header');
			$this->load->view('payroll/payroll');



		}
	}



 ?>