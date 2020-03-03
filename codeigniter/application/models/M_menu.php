<?php 

/**
 * 
 */
class M_menu extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function get_menu()
	{
		$result = $this->db->query("SELECT * FROM menu");

		return $result->result();
	}

	public function get_warung()
	{
		$result = $this->db->select('nama_warung')
						   ->get('menu')
						   ->result();
						   //SELECT nama_warung FROM menu
		return $result;
	}

	public function insert_menu($data)
	{
		
		//versi RAW SQL
		/*
		$query = "INSERT INTO menu (nama_warung, menu, harga) VALUES (?,?,?)";

		$this->db->query($query,array($data['nama_warung'],$data['menu'],$data['harga']));
		*/
		//versi Query Builder
		$this->db->insert('menu',$data);

		//check status query
		return $this->db->affected_rows();
	}
}