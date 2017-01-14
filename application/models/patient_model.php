<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class patient_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }

	// insert
	function insert_patient($data)
    {
		return $this->db->insert('patient', $data);
	}

	//get information
	function get_patient_info()
	{
		$this->db->select('*');
		$query = $this->db->get('patient');

		if ($query->num_rows() > 0) {
			return $query->result();
		}
	}
}
?>
