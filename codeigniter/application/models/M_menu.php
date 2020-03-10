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

	public function get_menu_specific($k_menu)
	{
		//RAW SQL
		// $query = "SELECT * from menu WHERE k_menu = ?";
		// $result = $this->db->query($query, array($k_menu));
		// return $result->result();

		//QUERY BUILDER
		// return $this->db->get_where('menu', array('k_menu'=> $k_menu))->result();

		//equivalent
		$result = $this->db->get_where('menu', array('k_menu'=> $k_menu));
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

	public function update($data)
	{
		$query = "UPDATE menu
				SET nama_warung = ?,
					menu = ?,
					harga = ?
				WHERE k_menu = ?";

		$this->db->query($query,array($data['nama_warung'],$data['menu'],$data['harga'],$data['k_menu']));

		return $this->db->affected_rows();
	}

	public function delete($k_menu)
	{
		$this->db->where('k_menu',$k_menu);
		$this->db->delete('menu');

		return $this->db->affected_rows();
	}
}