<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class myaccount extends CI_Controller {
	public function __construct()
	{	
		
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation','pagination'));
		$this->load->database();
		$this->load->model('user');

	}

	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('userdash');
		$this->load->view('footer');
	}
	public function changepass()
	{
		$this->load->view('header');
		$this->load->view('changepass');
		$this->load->view('footer');
	}
	public function editprofile()
	{
		$this->load->view('header');
		$this->load->view('editprofile');
		$this->load->view('footer');
	}
	public function changemail()
	{
		$this->load->view('header');
		$this->load->view('changemail');
		$this->load->view('footer');
	}
	public function login()
	{
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}
	public function subscribe()
	{  
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[subscription.email]');
	    if ($this->form_validation->run() == FALSE)
        {
			
        		$details['msg']="Email Exist Or Not an Email";
        }
        else
        {   $data = array(
				'email' => $this->input->post('email'),
				'status' => "1"
			);
	    	$result=$this->user->insert_subscriber($data);
            if ($result)
			{
				$details['msg']="Successfully Subscribe";
			}
			else
			{
				$details['msg']="Email Exist Or Not an Email";
			}
        }
        $this->load->view('submsg',$details);
	}
}
