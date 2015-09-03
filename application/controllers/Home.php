<?php
/**
*
*/
class Home extends CI_Controller
{
	function index(){
		$this->load->view('templates/header');
		$this->load->view('templates/landing');
	}

	function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->load->model('main');
		$res = $this->main->login($username, $password);
		if ($res) {
			echo "1";
		}
		else{
			echo "2";
		}
	}

	function welcome(){
		$this->load->view('templates/header');
		$this->load->view('pages/home');
	}
}

 ?>
