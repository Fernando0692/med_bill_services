<?php
class patient extends CI_Controller
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
        $this->load->view('accounts/patient/patient_panel');
	}

	function patient_create()
	{
		$this->load->view('accounts/patient/patient_create');

	}
}
