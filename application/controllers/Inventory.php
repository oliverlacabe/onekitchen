<?php

/**
*
*/
class Inventory extends CI_Controller
{
	function inventorylist(){
		$this->load->model('inventory_model');
		$this->load->view('templates/header');
		$this->load->view('inventory/inventory');
	}

	function append_delivery(){
		$item 	= $this->input->post('item');
		$price 	= $this->input->post('price');
		$qty 	= $this->input->post('qty');
		$unit	= $this->input->post('unit');

		$del = $item.",".$price.",".$qty.",".$unit;
		echo "<tr>
		<input type='hidden' name='menu_ing[]' value='".$del."'>
        <td colspan='2'>".$item."</td>
        <td>".$price."</td>
        <td>".$qty."</td>
        <td>".$unit."</td>
        <td width='200px;'>
          <a class='label label-danger a-label remove_delivery'>Remove<span class='glyphicon glyphicon-trash'></span></a>
        </td>
      </tr>";
	}

	function add_delivery(){
		$receiver = $this->input->post('receiver');//form na php
		$date = $this->input->post('date');			//form na php

		if (!$this->input->post('menu_ing')) { //hidden input
			echo "err1";
		}
		else{
			$delv = $this->input->post('menu_ing');
			$data = array (
				'in_charge' => $receiver, //db ngan form
				'date'	  	=> $date	  //db ngan form
			);

			$this->load->model('inventory_model');
			$del_id = $this->inventory_model->add_del($data); //*

			// $del_array serves as container of all delivery items from input type hidden
			$del_array = $this->input->post('menu_ing');

			// looping for saving hidden input containing delivery details
			// such as ingredient, stock, price and unit
			foreach ($del_array as $key => $value) {

				// put details to array by exploding the string detail from line 20
				$items = explode(',', $value);

				$item  = $items[0];
				$price = $items[1];
				$qty   = $items[2];
				$unit  = $items[3];

				$data = array(
					'batch_id' 		=> $del_id, // $del_id is an insertion id from *
					'ingredient' 	=> $item,
					'price' 		=> $price,
					'stock' 		=> $qty,
					'unit'			=> $unit
				);

				// adding of delivery detail. Function is called from inventory_model
				$this->inventory_model->add_del_detail($data);
			}
		}

	}

	function compute_price(){
		$id = $this->input->post('id');
		$this->load->model('inventory_model');
		$res = $this->inventory_model->get_before_prep_detail($id);

		if ($res) {
			$total = 0;
			$price = 0;
			$count = 0;

			foreach ($res as $key => $value) {
				extract($value);
				$total = $total + ( $price * $stock );
				$count = $count + $stock;
			}

			$price = $total/$count;
			echo $price;
		}
	}

	function save_prep(){
		$bef  	= $this->input->post('before_item');
		$aft  	= $this->input->post('after_item');
		$qty1 	= $this->input->post('out_quantity');
		$qty2 	= $this->input->post('in_quantity');
		$price 	= $this->input->post('hidden_price');

		if ($bef == 0) {
			echo "err1";
		}
		elseif ($aft == 0) {
			echo "err2";
		}
		else{
			$this->load->model('inventory_model');
			$data = array(
				'ingredient' => $bef,
				'prep_ingredient' => $aft,
				'pull_qty' => $qty1,
				'stock' => $qty2,
				'price' => $price,
				'prep_date' => date('Y-m-d')
			);
			$this->inventory_model->add_prep($data);
			$this->load->view('inventory/_prep_list');
		}
	}

	function get_prep(){

	}
}


 ?>
