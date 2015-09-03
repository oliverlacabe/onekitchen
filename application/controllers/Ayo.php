<?php 

/**
* 
*/
class Ayo extends CI_Controller
{
	
	function index(){
		$this->load->view('templates/header');
		$this->load->view('ayo/home');
	}

	function services(){
		$this->load->view('templates/header');
		$this->load->view('ayo/services');
	}

	function opportunities(){
		$this->load->view('templates/header');
		$this->load->view('ayo/opportunities');
	}
}

 ?>