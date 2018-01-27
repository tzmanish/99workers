<?php
class loginadmin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','html'));
		$this->load->library(array('session', 'form_validation','cart'));
		$this->load->database();
		$this->load->model('user1');
		
	}
    public function index()
    {
		// get form input
		$aaid = $this->input->post("aaid");
        $pass = $this->input->post("pass");

		// form validation
		$this->form_validation->set_rules("aaid", "aaid", "trim|required");
		$this->form_validation->set_rules("pass", "Pass", "trim|required");
		
		if ($this->form_validation->run() == FALSE)
        {
			$this->load->view('admin/login');
		}
		else
		{
			// check for user credentials
			$uresult = $this->user1->get_user($aaid, $pass);
			if (count($uresult) > 0)
			{
				// set session
				
				$sess_data = array('login' => TRUE,'aaid' => $uresult[0]->aaid);

				$this->session->set_userdata($sess_data);
				redirect('admin/admin');
		    }
			else
			{
				$this->session->set_flashdata('msg', '<div class="alert text-center">Wrong Email-ID or Password!</div>');
				redirect('admin/loginadmin');
			}
		}
    }
    function logout()
	{   $data = array('login' =>'','aaid' =>'');
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
		redirect('admin/loginadmin');
	}
	
}