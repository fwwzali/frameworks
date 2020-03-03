<?php 

/**
 * 
 */
class M_menuKantin extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function get_menu()
	{
		//raw SQL
		$result = $this->db->query("SELECT * FROM menu LIMIT 1");

		$queryBuilder = $this->db->get('menu');

		//return $result->result();
		return $queryBuilder->result();

	}
}