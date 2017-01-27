<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class provider_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }

	// insert
	function insert_provider($data)
    {
		return $this->db->insert('provider', $data);
	}

	//get information
	function get_provider_info()
	{
		$this->db->select('*');
		$query = $this->db->get('provider');

		if ($query->num_rows() > 0) {
			return $query->result();
		}
	}
}
?>
