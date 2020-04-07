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

	public function index()
	{
		
		$data['pelanggan'] = $this->pelanggan->get_pelanggan();
		$data['judul'] = 'Data Pelanggan';
		$this->template->render('pelanggan/v_pelanggan',$data);

	}

	public function create()
	{
		
		//cek jika ada inputan dari user
		if ($this->input->post()) {
			//lakukan insert data
			$input_user = $this->input->post();
			//print_r($input_user);
			//exit();
			$status = $this->pelanggan->insert_pelanggan($input_user);
			//echo "success"; exit;
			//pesan gagal/sukses
			if ($status > 0) {
				//kirim pesan sukses
				$this->session->set_flashdata('msg',template_success_msg("Data Pelanggan Berhasil disimpan"));
			}
			else{
				//pesan error
				$this->session->set_flashdata('msg',template_error_msg("Data Pelanggan Gagal disimpan"));
			}

			redirect(base_url().'index.php/Pelanggan/index');
		}
		else{
			//tampilkan form
			$data['judul'] = 'Input Data Pelanggan';
			$this->template->render("pelanggan/v_create",$data);
			

		}
	
	}

	public function edit($npm = null)
	{
		if ($this->input->post()) {
			//proses edit data
			$data = $this->input->post();
			$status = $this->pelanggan->update($data);

			//pesan gagal/sukses
			if ($status > 0) {
				//kirim pesan sukses
				$this->session->set_flashdata('msg',template_success_msg("Data Pelanggan Berhasil diperbarui"));
			}
			else{
				//pesan error
				$this->session->set_flashdata('msg',template_error_msg("Data Pelanggan Gagal diperbarui"));
			}

			redirect(base_url().'index.php/Pelanggan/index');

		}
		else{
			$data['pelanggan'] = $this->pelanggan->get_pelanggan($npm);
			$data['judul'] = 'Edit Data Pelanggan';
			$this->template->render('pelanggan/v_update',$data);
		}
	}


	public function delete($npm)
	{
		$status = $this->pelanggan->delete($npm);
		//pesan gagal/sukses
		if ($status > 0) {
			//kirim pesan sukses
			$this->session->set_flashdata('msg',template_success_msg("Data Pelanggan Berhasil dihapus"));
		}
		else{
			//pesan error
			$this->session->set_flashdata('msg',template_error_msg("Data Pelanggan Gagal dihapus"));
		}

		redirect(base_url().'index.php/Pelanggan/index');

	}


}