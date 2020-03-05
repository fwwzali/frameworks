<?php 


/**
 * 
 */
class Pelanggan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_pelanggan','pelanggan');
	}

	public function create()
	{
		
		//cek jika ada inputan dari user
		if ($this->input->post()) {
			//lakukan insert data
			$input_user = $this->input->post();
			//print_r($input_user);
			//exit();
			$this->pelanggan->insert_pelanggan($input_user);
			echo "success"; exit;
		}
		else{
			//tampilkan form
			$data['judul'] = 'Input Data Pelanggan';
			$this->load->view("pelanggan/v_create",$data);
	
		}
		

	}
}