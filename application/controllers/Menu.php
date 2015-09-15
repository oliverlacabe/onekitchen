<?php
/**
*
*/
class Menu extends CI_Controller
{
	function menumanagement(){
		$this->load->model('Model_Menu');
		$this->load->view('templates/header');
		$this->load->view('menu/menu');
	}

	function add_ing(){
		$data = array(
			'ingredient_name' => $this->input->post('ingredient'),
			'type' 			  => $this->input->post('type')
		);

		$this->load->model('Model_Menu');

		$check = $this->Model_Menu->check_ing($this->input->post('ingredient'), $this->input->post('type'));

		if ($check > 0) {
			echo "err1";
		}
		else{

			$this->Model_Menu->add_ing($data);

	        $this->load->view('menu/_ingredient');

		}
	}

	function add_cat(){
		$data = array(
			'cat_name' => $this->input->post('category'),
		);

		$this->load->model('Model_Menu');

		$check = $this->Model_Menu->check_cat($this->input->post('category'));

		if ($check > 0) {
			echo "err1";
		}
		else{

			$this->Model_Menu->add_cat($data);

	        $this->load->view('menu/_category');

		}
	}

	function add_menu(){

		$data = array(
			'menu_name'  => $this->input->post('menuname'),
			'menu_owner' => $this->input->post('owner'),
			'price' 	 => $this->input->post('price'),
			'category' 	 => $this->input->post('category')
		);

		$this->load->model('Model_Menu');

		$check = $this->Model_Menu->check_menu($this->input->post('menuname'));

		if ($check > 0) {
			echo "err1";
		}
		elseif (!$this->input->post('menu_ing')) {
			echo "err2";
		}
		else{
			$ing = $this->input->post('menu_ing');
			$res = $this->Model_Menu->add_menu($data);
			foreach ($ing as $key => $value) {
				$data = array(
					'menu' => $res,
					'ing'  => $value
				);
				$this->Model_Menu->add_menu_ing($data);
			}

	        $this->load->view('menu/_menu');

		}
	}

	function append_ing(){
		$append = "";

		$this->load->model('Model_Menu');

		$ing = $this->input->post('ing');
		$qty = $this->input->post('qty');

		$res = $this->Model_Menu->get_specific_ing($ing);

		if ($res) {
			extract($res);
	        $append = '
              <tr>
	          	<input type="hidden" name="menu_ing[]" value="'.$id.'">
                <td>'.$ingredient_name.'</td>
                <td>'.$qty.'</td>
                <td>
                   <a class="label label-danger a-label remove_ing">Remove <span class="glyphicon glyphicon-trash"></span></a>
                </td>
              </tr>
	        ';
		}

	   echo $append;
	}

	function view_ing(){
	    $this->load->model('Model_Menu');
		$data = array('id' => $this->input->post('id'));
		$this->load->view('menu/_ing_list', $data);
	}

	function delete_menu(){
		$this->load->model('Model_Menu');
		$this->Model_Menu->delete_menu($this->input->post('id'));
	}

	function delete_ing(){
		$this->load->model('Model_Menu');
		$this->Model_Menu->delete_ing($this->input->post('id'));
	}

	function delete_cat(){
		$this->load->model('Model_Menu');
		$this->Model_Menu->delete_cat($this->input->post('id'));
	}
}
 ?>
