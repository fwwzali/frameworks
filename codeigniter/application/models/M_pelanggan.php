<?php 

/**
 * 
 */


class M_pelanggan extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function insert_pelanggan($data)
	{
		
		//RAW SQL
		/*
		$query = "INSERT INTO pelanggan(npm,nama,jurusan,fakultas) VALUES (?,?,?,?)";
		$this->db->query($query, array($data['npm'], $data['nama'], $data['jurusan'], $data['fakultas']));
		*/
		//QUERY BUILDER
		$this->db->insert('pelanggan',$data);

		return $this->db->affected_rows();
	}

	public function get_pelanggan($npm = null)
	{
		if ($npm) {
			return $this->db->get_where('pelanggan',array('npm'=>$npm))->result();
		}
		else return $this->db->get('pelanggan')->result();
	}

	public function update($data)
	{
		$query = "UPDATE pelanggan SET 
				  nama = ?,
				  jurusan = ?,
				  fakultas = ?
				  WHERE npm = ?";

		$this->db->query($query, array($data['nama'], $data['jurusan'], $data['fakultas'], $data['npm']));
		return $this->db->affected_rows();
	}


	public function delete($npm)
	{
		$this->db->where('npm', $npm);
		$this->db->delete('pelanggan');
		//cek status
		return $this->db->affected_rows();
	}
}