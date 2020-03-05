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
	}
}