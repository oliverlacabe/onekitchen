<?php 

	/**
	* 
	*/
	class Employee extends CI_Controller
	{
		function employeemanagement(){
			$this->load->model('employees');
			$this->load->view('templates/header');
			$this->load->view('employee/employee');
		}

		function add_emp(){

			if ($this->input->post('designation') == 0) {
				echo "err1";
			}
			elseif ($this->input->post('resto') == 0) {
				echo "err2";
			}
			else{
				$data = array(
					'id' 			=> $this->input->post('id'),
					'lname' 		=> $this->input->post('lname'),
					'fname' 		=> $this->input->post('fname'),
					'mname' 		=> $this->input->post('mname'),
					'designation'   => $this->input->post('designation'),
					'address' 	 	=> $this->input->post('address'),
					'contact_no' 	=> $this->input->post('contact'),
					'tin_no' 		=> $this->input->post('tin'),
					'restaurant' 	=> $this->input->post('resto')
				);

				$this->load->model('employees');

				$this->employees->add_emp($data);

				$this->load->view('employee/tables/emp_table');
			}
		}
		
	}


 ?>