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
			'type' 			  => 'ingredient'
		);

		$this->load->model('Model_Menu');

		$check = $this->Model_Menu->check_ing($this->input->post('ingredient'));

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

	function append_ing(){
		$append = "";

		$this->load->model('Model_Menu');

		$ing = $this->input->post('ingredient');
		$qty = $this->input->post('quantity');

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
}
 ?>