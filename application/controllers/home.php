<?php
class home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url', 'html'));
		$this->load->library('session');
	}

	function index()
	{
		switch ($this->session->userdata('profile'))
		{
			case '':
				$this->load->view('login_view');
				break;
			case 'Administrator':
				$this->load->view('admin_view');
				break;
			case 'Medical':
				$this->load->view('medical_view');
				break;
			case 'Dentist':
				$this->load->view('dentist_view');
				break;
			default:
				$this->load->view('login_view');
				break;
		}
		// if ($this->session->userdata('profile')=='Administrator') {
		// 	$this->load->view('administrator_view');
		// 	$this->load->view('login_view');
		// } else {
		// }
	}

	function logout()
	{
		// destroy session
        $data = array('login' => '', 'username' => '', 'id_user' => '', 'profile' => '');
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
		redirect('home');
	}
}
