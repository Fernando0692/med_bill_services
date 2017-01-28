<?php
class insurance extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','html'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('insurance_model');
	}

	function index()
	{
		$data['result'] = $this->insurance_model->get_insurance_info();
        $this->load->view('insurant/insurance/insurance_panel',$data);
	}

	function insurance_create()
	{
		$this->load->view('insurant/insurance/insurance_create');
	}

	function insurance_insert()
	{
		if ($this->session->userdata('id_user'))
		{
			$this->form_validation->set_rules('name', 'Name / Company', 'trim|required|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('phone', 'Phone', 'trim|min_length[3]|max_length[10]|xss_clean');
			$this->form_validation->set_rules('phone_2', 'Phone 2', 'trim|min_length[3]|max_length[10]|xss_clean');
			$this->form_validation->set_rules('fax', 'Fax', 'trim|min_length[3]|max_length[10]|xss_clean');
			$this->form_validation->set_rules('street', 'Street', 'trim|required|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('city', 'City', 'trim|required|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('state', 'State', 'trim|required|xss_clean');
			$this->form_validation->set_rules('zip_code', 'Zip Code', 'trim|required|min_length[3]|max_length[30]|xss_clean');

			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('insurant/insurance/insurance_create');
			}
			else
			{
				$data = array(
					'name'	=> $this->input->post('name'),
					'phone'=> $this->input->post('phone'),
					'phone_2'=> $this->input->post('phone_2'),
					'fax'=> $this->input->post('fax'),
					'street'=> $this->input->post('street'),
					'city'	=> $this->input->post('city'),
					'state'	=> $this->input->post('state'),
					'zip_code'	=> $this->input->post('zip_code'),
				);
				if ($this->insurance_model->insert_insurance($data))
				{
					$this->session->set_flashdata('msg','<script>Materialize.toast("You are Successfully Registered! Please login to access your Profile!", 5000);</script>');
					redirect('insurance/insurance_create');
				}
				else
				{
					// error
					$this->session->set_flashdata('msg','<script>Materialize.toast("Oops! Error.  Please try again later!!!", 5000);</script>');
					redirect('insurance/insurance_create');
				}
			}
		}
		else
		{
			$data['user'] = $this->user_model->get_user_by_id($this->session->userdata('id_user'));
			redirect('home');

		}
	}
}
