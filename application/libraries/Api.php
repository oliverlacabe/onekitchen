<?php
class Api
{
	protected $CI;

	//initialize the $CI variable
	function __construct()
	{
		$this->CI =& get_instance();
	}

	function get_resto()
	{
		$this->CI->load->model('Model_Api');
		return $this->CI->Model_Api->get_resto();
	}
}
?>