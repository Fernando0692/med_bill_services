<?php
class patient extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','html'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('patient_model');
	}

	function index()
	{
		$data['result'] = $this->patient_model->get_patient_info();
        $this->load->view('accounts/patient/patient_panel',$data);
	}

	function patient_create()
	{
		$this->load->view('accounts/patient/patient_create');
	}

	function patient_insert()
	{
		if ($this->session->userdata('id_user'))
		{
			$this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('mname', 'Middle Name', 'trim|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('bdate', 'Bird Date', 'trim|required|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('sex', 'Sex', 'trim|required|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('marital_status', 'Marital Status', 'trim|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('phone', 'Phone', 'trim|min_length[3]|max_length[10]|xss_clean');
			$this->form_validation->set_rules('street', 'Street', 'trim|required|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('city', 'City', 'trim|required|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('state', 'State', 'trim|required|xss_clean');
			$this->form_validation->set_rules('zip_code', 'Zip Code', 'trim|required|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('laboral_status', 'Laboral Status', 'trim|xss_clean');
			$this->form_validation->set_rules('related_insured', 'Related to Insured', 'trim|xss_clean');
			$this->form_validation->set_rules('insured_ssn', 'Insured S.S.N.', 'trim|min_length[3]|max_length[30]|xss_clean');

			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('accounts/patient/patient_create');
			}
			else
			{
				$data = array(
					'fname'	=> $this->input->post('fname'),
					'mname'	=> $this->input->post('mname'),
					'lname'	=> $this->input->post('lname'),
					'bdate'	=> $this->input->post('bdate'),
					'sex'	=> $this->input->post('sex'),
					'marital_status'=> $this->input->post('marital_status'),
					'phone'=> $this->input->post('phone'),
					'street'=> $this->input->post('street'),
					'city'	=> $this->input->post('city'),
					'state'	=> $this->input->post('state'),
					'zip_code'		=> $this->input->post('zip_code'),
					'laboral_status'=> $this->input->post('laboral_status'),
					'related_insured'	=> $this->input->post('related_insured'),
					'insured_ssn'	=> $this->input->post('insured_ssn'),
					'lname'	=> $this->input->post('lname'),
				);
				if ($this->patient_model->insert_patient($data))
				{
					$this->session->set_flashdata('msg','<script>Materialize.toast("You are Successfully Registered! Please login to access your Profile!", 5000);</script>');
					redirect('patient/patient_create');
				}
				else
				{
					// error
					$this->session->set_flashdata('msg','<script>Materialize.toast("Oops! Error.  Please try again later!!!", 5000);</script>');
					redirect('patient/patient_create');
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
