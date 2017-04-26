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

	public function index()
	{
		if ($this->session->userdata('id_user'))
		{
			$data['result'] = $this->user_model->get_user_info();
			$this->load->view('accounts/user/user_panel', $data);
		}
		else
		{
			$data['user'] = $this->user_model->get_user_by_id($this->session->userdata('id_user'));
			redirect('home');
		}
	}

	public function create()
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
				$this->load->view('accounts/user/user_create');
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
					redirect('user');
					$this->session->set_flashdata('msg','<script>Materialize.toast("You are Successfully Registered! Please login to access your Profile!", 5000);</script>');
				}
				else
				{
					// error
					$this->session->set_flashdata('msg','<script>Materialize.toast("Oops! Error.  Please try again later!!!", 5000);</script>');
					redirect('user');
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
		//This for User edition
		if ($this->session->userdata('id_user'))
		{
			echo "hola";
		}
		else
		{
			$data['user'] = $this->user_model->get_user_by_id($this->session->userdata('id_user'));
			redirect('home');
		}
	}

	public function delete()
	{
		//This for delete user
		if ($this->session->userdata('id_user'))
		{
			$id = $this->uri->segment(3);
			if (empty($id))
			{
				show_404();
			}
			$user_item = $this->user_model->get_user_by_id($id);
			$this->user_model->delete_user($id);
			redirect( 'user');
		}
		else
		{
			$data['user'] = $this->user_model->get_user_by_id($this->session->userdata('id_user'));
			redirect('home');
		}
	}
}
