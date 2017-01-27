<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class client_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }

	// insert
	function insert_client($data)
    {
		return $this->db->insert('client', $data);
	}

	//get information
	function get_client_info()
	{
		$this->db->select('*');
		$query = $this->db->get('client');

		if ($query->num_rows() > 0) {
			return $query->result();
		}
	}
}
?>
