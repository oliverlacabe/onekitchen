<?php 

	/**
	* 
	*/
	class Sales extends CI_Controller 
	{
		function salesinfo (){

			$this->load->model('Sales_model');
			$this->load->view('templates/header');
			$this->load->view('sales/sales');
		}

		function append_sales(){
			$menu    = $this->input->post('menu');
			$sold	 = $this->input->post('sold');

			$sale = $menu."|".$sold;
			$this->load->model('Sales_model');
			$res = $this->Sales_model->get_spec_menu($menu);
			extract($res);
			$total = $price * $sold;

			echo "<tr>
			<input type='hidden' name='sale[]' value='".$sale."'>
            <td>".$menu_name."</td>
            <td>".$price."</td>
            <td>".$sold."</td>
            <td>".$total."</td>
            <td width='200px;''>
              <a class='label label-primary a-label' >Edit<span class='glyphicon glyphicon-pencil'></span></a>
              <a class='label label-danger a-label remove_sales' >Remove<span class='glyphicon glyphicon-trash'></span></a>
            </td>
          </tr>";

		}


		function add_bills(){
			$bill = $this->input->post('bill_no');
			$cust = $this->input->post('cust_name');
			$date = $this->input->post('date');

			if (!$this->input->post('sale')) {
				echo "err1";
			}
			else{
				$order = $this->input->post('sale');
				$data = array (
					'bill_no' 	=> $bill,
					'date'	  	=> $date,
					'customer'	=> $cust
				);
				$this->load->model('Sales_model');
				$bill_id = $this->Sales_model->add_bill($data);

				foreach ($order as $key => $value) {
					$ex = explode('|', $value);
					$menu = $ex[0];
					$qty  = $ex[1];

					$data = array(
						'menu'	  => $menu,
						'quantity'=> $qty
					);

					$this->Sales_model->add_bill_detail($data);
				}

				echo "succes";

			}
		}



	}





 ?>