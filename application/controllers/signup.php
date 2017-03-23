<?php
class signup extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('user_model');
	}

	public function index()
	{
		if ($this->session->userdata('id_user'))
		{
			// set form validation rules
			$this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('lname', 'Last Name', 'trim|min_length[3]|max_length[30]|xss_clean');
			$this->form_validation->set_rules('email', 'Email', 'trim|valid_email');
			$this->form_validation->set_rules('profile', 'Profile', 'trim|required|xss_clean');
			$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|is_unique[user.username]');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[cpassword]');
			$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required');

			// submit
			if ($this->form_validation->run() == FALSE)
			{
				// fails
				// $this->load->view('signup_view');
				$this->load->view('signup_view');
			}
			else
			{
				//insert user details into db
				$data = array(
					'fname' => $this->input->post('fname'),
					'lname' => $this->input->post('lname'),
					'email' => $this->input->post('email'),
					'profile' => $this->input->post('profile'),
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password')
				);

				if ($this->user_model->insert_user($data))
				{
					$this->session->set_flashdata('msg','<script>Materialize.toast("You are Successfully Registered! Please login to access your Profile!", 5000);</script>');
					redirect('signup');
				}
				else
				{
					// error
					$this->session->set_flashdata('msg','<script>Materialize.toast("Oops! Error.  Please try again later!!!", 5000);</script>');
					redirect('signup');
				}
			}
		}
		else
		{
			$data['user'] = $this->user_model->get_user_by_id($this->session->userdata('id_user'));
			redirect('home');

		}
	}

	public function edit()
	{
		echo "hola mama";
	}

	public function delete()
	{
		$id = $this->uri->segment(3);

			$this->session->set_flashdata('msg','<script>Materialize.toast("You are Successfully Registered! Please login to access your Profile!", 5000);</script>');
			redirect(base_url('user'));
	}
}
