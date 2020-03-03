<?php 

/**
 * 
 */
class MenuKantin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_menuKantin','menu');
		$this->load->helper('kantin');
	}

	public function index()
	{
		$data_menu = $this->menu->get_menu();
		$data['menu'] = $data_menu;
		$data['judul'] = "Menu Kantin UPN Jatim";
		//print_r($data_menu);
		$this->load->view('V_menu_boots',$data);
	}
}