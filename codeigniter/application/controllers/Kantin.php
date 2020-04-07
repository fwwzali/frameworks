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
		$this->template->render('V_listKantin',$data);
	}

	public function get_allKantin()
	{
		$data_menu = $this->menu->get_menu();
		$data['menu'] = $data_menu;
		$data['judul'] = "Menu Kantin UPN Jatim";
		//print_r($data_menu);
		$this->template->render('V_menu_boots',$data);
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
			$this->template->render('kantin/v_create', $data);
		}
	}


	public function update($k_menu = null)
	{
		//cek proses update dilakukan
		if ($this->input->post()) {
			$data = $this->input->post();
			$result = $this->menu->update($data);
			if ($result > 0) {
				$this->session->set_flashdata('msg',template_success_msg("Data Menu Kantin Berhasil diupdate"));
			}
			else{
				$this->session->set_flashdata('msg',template_error_msg("Menu Kantin gagal diupdate"));
			}

			//redirect
			redirect(base_url().'index.php/Kantin/get_allKantin');

		}
		else{
			//proses mengambil dan menampilkan
			//data spesifik sesuai dengan data yang diupdate
			$data['menu'] = $this->menu->get_menu_specific($k_menu);
			$data['judul'] = 'Update Data Menu Kantin';
			$this->template->render('kantin/v_update',$data);
		}
	}

	public function delete($k_menu)
	{
		$result = $this->menu->delete($k_menu);

		if ($result > 0) {
			$this->session->set_flashdata('msg',template_success_msg("Data Menu Kantin Berhasil delete"));
		}
		else{
			$this->session->set_flashdata('msg',template_error_msg("Menu Kantin gagal didelete"));
		}

			//redirect
			redirect(base_url().'index.php/Kantin/get_allKantin');


	}
}