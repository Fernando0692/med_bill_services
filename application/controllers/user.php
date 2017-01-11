<?php
class user extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','html'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('user_model');
	}

	function index()
	{
		$data['result'] = $this->user_model->get_user_info();
        $this->load->view('accounts/user/user_panel', $data);
	}
}
