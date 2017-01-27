<?php
class provider extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','html'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('provider_model');
	}

	function index()
	{
		// $data['result'] = $this->provider_model->get_provider_info();
        $this->load->view('accounts/provider/provider_panel');
	}

	function provider_create()
	{
		$this->load->view('accounts/provider/provider_create');
	}

	function provider_insert()
	{
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[3]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('mname', 'Middle Name', 'trim|min_length[3]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|min_length[3]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|min_length[3]|max_length[10]|xss_clean');
		$this->form_validation->set_rules('phone_2', 'Phone 2', 'trim|min_length[3]|max_length[10]|xss_clean');
		$this->form_validation->set_rules('street', 'Street', 'trim|required|min_length[3]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('city', 'City', 'trim|required|min_length[3]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('state', 'State', 'trim|required|xss_clean');
		$this->form_validation->set_rules('zip_code', 'Zip Code', 'trim|required|min_length[3]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('specialty', 'Specialty', 'trim|required|min_length[3]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('licence_num', 'Licence Number', 'trim|required|min_length[3]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('tax_id', 'Tax ID', 'trim|required|min_length[3]|max_length[30]|xss_clean');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('accounts/provider/provider_create');
		}
		else
		{
			$data = array(
				'fname'	=> $this->input->post('fname'),
				'mname'	=> $this->input->post('mname'),
				'lname'	=> $this->input->post('lname'),
				'phone' => $this->input->post('phone'),
				'phone_2'   => $this->input->post('phone_2'),
				'street'=> $this->input->post('street'),
				'city'	=> $this->input->post('city'),
				'state'	=> $this->input->post('state'),
				'zip_code'	=> $this->input->post('zip_code'),
				'specialty'	=> $this->input->post('specialty'),
				'licence_num'	=> $this->input->post('licence_num'),
				'tax_id'	=> $this->input->post('tax_id'),
			);
			if ($this->provider_model->insert_provider($data))
			{
				$this->session->set_flashdata('msg','<script>Materialize.toast("You are Successfully Registered! Please login to access your Profile!", 5000);</script>');
				redirect('provider/provider_create');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<script>Materialize.toast("Oops! Error.  Please try again later!!!", 5000);</script>');
				redirect('provider/provider_create');
			}
		}
	}
}
