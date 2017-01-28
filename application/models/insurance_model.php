<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class insurance_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }

	// insert
	function insert_insurance($data)
    {
		return $this->db->insert('insurance', $data);
	}

	//get information
	function get_insurance_info()
	{
		$this->db->select('*');
		$query = $this->db->get('insurance');

		if ($query->num_rows() > 0) {
			return $query->result();
		}
	}
}
?>
