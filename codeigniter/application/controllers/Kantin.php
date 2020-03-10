<?php 


/**
 * 
 */
class Kantin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_menu','menu');
		$this->load->helper('kantin');
	}

	public function index()
	{
		$data['judul'] = "Daftar Warung";
		$data['warung'] = $this->menu->get_warung();
		$this->load->view('V_listKantin',$data);
	}

	public function get_allKantin()
	{
		$data_menu = $this->menu->get_menu();
		$data['menu'] = $data_menu;
		$data['judul'] = "Menu Kantin UPN Jatim";
		//print_r($data_menu);
		$this->load->view('V_menu_boots',$data);
	}

	public function create_menu()
	{
		if ($this->input->post()) {
			//aksi ketika ada request create data
			//echo "Voila";
			//exit;

			//proses input ke database
			$input = $this->input->post();
			$result = $this->menu->insert_menu($input);

			if ($result > 0) {
				$this->session->set_flashdata('msg',template_success_msg("Data Menu Kantin Berhasil Disimpan"));
			}
			else{
				$this->session->set_flashdata('msg', template_error_msg("Error, Terjadi Kesalahan. Silakan anda ulangi lagi"));
			}

			//redirect
			redirect(base_url().'index.php/Kantin/get_allKantin');



		}
		else{
			//request form input
			$data['judul'] = "Buat Menu Baru";
			$this->load->view('kantin/v_create', $data);
		}
	}
}