<?php 

/**
 * 
 */
class Menu extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_menu');
	}

	public function index()
	{
		$menu = $this->M_menu->get_menu();
		print_r($menu);
	}
}