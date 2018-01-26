<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
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
		$this->load->view('home');
		$this->load->view('footer');
	}
	public function portfolio()
	{
		$details['query']=$this->user->showportfolio();
		$this->load->view('header');
		$this->load->view('portfolio',$details);
		$this->load->view('footer');
	}
	public function pdetails($id)
	{   $details=$this->user->showportfolio1($id);
        $data['pname']=$details[0]->pname;
        $data['name']=$details[0]->name;
		$data['pdescr']=$details[0]->pdescr;
		$data['pimage']=$details[0]->pimage;
		$this->load->view('header');
		$this->load->view('pdetails',$data);
		$this->load->view('footer');
	}
	public function services()
	{   
		$details['query']=$this->user->showservice();
		$this->load->view('header');
		$this->load->view('services',$details);
		$this->load->view('footer');
	}
    
	public function sdetails($id)
	{

		$details=$this->user->showservice1($id);
		$data['sname']=$details[0]->sname;
		$data['sdescr']=$details[0]->sdescr;
		$data['image']=$details[0]->image;
		$data['scname']=$details[0]->scname;
		$this->load->view('header');
		$this->load->view('sdetails',$data);
		$this->load->view('footer');
	}
	public function product()
	{   
		$details['query']=$this->user->showproduct();
		$this->load->view('header');
		$this->load->view('product',$details);
		$this->load->view('footer');
	}
	public function productdetails($id)
	{   $details=$this->user->showproduct1($id);
        $data['pname']=$details[0]->pname;
		$data['pdescr']=$details[0]->pdescr;
		$data['pimage']=$details[0]->pimage;
		$data['cost']=$details[0]->cost;
		$data['link']=$details[0]->link;
		$this->load->view('header');
		$this->load->view('productdetails',$data);
		$this->load->view('footer');
	}
	public function userdash()
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
