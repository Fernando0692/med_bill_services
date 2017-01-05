<?php
session_start();

class login extends CI_Controller
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
		if ($this->session->userdata('uid'))
		{
			$data['user'] = $this->user_model->get_user_by_id($this->session->userdata('uid'));
			redirect("profile");
		}
		else
		{
			// get form input
			$email = $this->input->post("email");
			$password = $this->input->post("password");

			// form validation
			$this->form_validation->set_rules("email", "Email-ID", "trim|required|xss_clean");
			$this->form_validation->set_rules("password", "Password", "trim|required|xss_clean");

			if ($this->form_validation->run() == FALSE)
			{
				// validation fail
				$this->load->view('login_view');
			}
			else
			{
				// check for user credentials
				$uresult = $this->user_model->get_user($email, $password);
				if (count($uresult) > 0)
				{
					// set session
					$sess_data = array(
						'login' => TRUE,
						'uname' => $uresult[0]->fname,
						'uid' => $uresult[0]->id
					);
					$this->session->set_userdata($sess_data);
					$data['user'] = $this->user_model->get_user_by_id($this->session->userdata('uid'));
					redirect("profile");
				}
				else
				{
					$this->session->set_flashdata('msg', '<script>Materialize.toast("Wrong Username or Password!", 5000);</script>');
					redirect('login');
				}
			}
		}
	}

	public function email_check()
    {

        $this->load->model('user_model');
		$email = $this->input->post('email');

        if ($this->name->reset_pass($email) == false)
        {
            $this->form_validation->set_message('email_check', '<script>Materialize.toast("This Email-ID field is required", 5000);</script>');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }

}
