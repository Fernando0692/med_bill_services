<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class insured_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }

	// insert
	function insert_insured($data)
    {
		return $this->db->insert('insured', $data);
	}

	//get information
	function get_insured_info()
	{
		$this->db->select('*');
		$query = $this->db->get('insured');

		if ($query->num_rows() > 0) {
			return $query->result();
		}
	}
}
?>
