<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class aboutUs_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }

	function get_company_info()
	{
		$this->db->select('*');
        $query = $this->db->get('company_info');
		return $query->result();
	}

	// insert
	// function insert_user($data)
    // {
	// 	return $this->db->insert('user', $data);
	// }
}
?>
