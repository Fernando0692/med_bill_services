<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class aboutUs extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','html'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('aboutUs_model');
	}

	public function index()
	{
		$data = array();
		$data['result'] = $this->aboutUs_model->get_company_info();
		$this->load->view('aboutUs_view', $data);
	}

	// public function show_info()
	// {
	// 	$data
	// }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
