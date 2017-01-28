<?php
class insured extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','html'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('insured_model');
	}

	function index()
	{
		$data['result'] = $this->insured_model->get_insured_info();
        $this->load->view('insurant/insured/insured_panel',$data);
	}

	function insured_create()
	{
		$this->load->view('insurant/insured/insured_create');
	}

	function insured_insert()
	{
		if ($this->session->userdata('id_user'))
		{
			$this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('mname', 'Middle Name', 'trim|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('bdate', 'Birth of Date', 'trim|required|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('sex', 'Sex', 'trim|required|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('phone', 'Phone', 'trim|min_length[3]|max_length[10]|xss_clean');
			$this->form_validation->set_rules('insured_ssn', 'Insured S.S.N.', 'trim|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('street', 'Street', 'trim|required|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('city', 'City', 'trim|required|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('state', 'State', 'trim|required|xss_clean');
			$this->form_validation->set_rules('zip_code', 'Zip Code', 'trim|required|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('e_fname', 'First Name', 'trim|required|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('e_mname', 'Middle Name', 'trim|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('e_lname', 'Last Name', 'trim|required|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('e_phone', 'Phone', 'trim|min_length[3]|max_length[10]|xss_clean');
			$this->form_validation->set_rules('policy_group', 'Policy or Group', 'trim|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('insurance_plan', 'Insurance Plan', 'trim|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('e_street', 'Street', 'trim|required|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('e_city', 'City', 'trim|required|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('e_state', 'State', 'trim|required|xss_clean');
			$this->form_validation->set_rules('e_zip_code', 'Zip Code', 'trim|required|min_length[3]|max_length[30]|xss_clean');

			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('insurant/insured/insured_create');
			}
			else
			{
				$data = array(
					'fname'	=> $this->input->post('fname'),
					'mname'	=> $this->input->post('mname'),
					'lname'	=> $this->input->post('lname'),
					'bdate'	=> $this->input->post('bdate'),
					'sex'	=> $this->input->post('sex'),
					'insured_ssn'	=> $this->input->post('insured_ssn'),
					'phone'=> $this->input->post('phone'),
					'street'=> $this->input->post('street'),
					'city'	=> $this->input->post('city'),
					'state'	=> $this->input->post('state'),
					'zip_code'	=> $this->input->post('zip_code'),
					'e_fname'	=> $this->input->post('e_fname'),
					'e_mname'	=> $this->input->post('e_mname'),
					'e_lname'	=> $this->input->post('e_lname'),
					'e_phone'	=> $this->input->post('e_phone'),
					'policy_group'	=> $this->input->post('policy_group'),
					'insurance_plan'	=> $this->input->post('insurance_plan'),
					'e_street'	=> $this->input->post('e_street'),
					'e_city'	=> $this->input->post('e_city'),
					'e_state'	=> $this->input->post('e_state'),
					'e_zip_code'		=> $this->input->post('e_zip_code'),
				);
				if ($this->insured_model->insert_insured($data))
				{
					$this->session->set_flashdata('msg','<script>Materialize.toast("You are Successfully Registered! Please login to access your Profile!", 5000);</script>');
					redirect('insured/insured_create');
				}
				else
				{
					// error
					$this->session->set_flashdata('msg','<script>Materialize.toast("Oops! Error.  Please try again later!!!", 5000);</script>');
					redirect('insured/insured_create');
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
