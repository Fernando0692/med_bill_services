<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
    }

	public function get_user($username, $pwd)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $pwd);
        $query = $this->db->get('user');
		return $query->result();
	}

	public function get_user_by_id($id)
	{
		$this->db->where('id_user', $id);
        $query = $this->db->get('user');
		return $query->result();
	}

	public function get_user_info()
	{
		$this->db->select('*');
		$query = $this->db->get('user');

		if ($query->num_rows() > 0) {
			return $query->result();
		}
	}

	public function insert_user($data)
	{
		return $this->db->insert('user', $data);
	}

	public function update_user($id)
	{
		$this->db->where('id_user', $id);
		return $this->db->insert('user', $data);
	}

	public function delete_user($id)
	{
		$this->db->where('id_user', $id);
		return $this->db->delete('user');
	}
}
?>
