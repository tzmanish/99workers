<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
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
		$this->load->view('admin/header');
		$this->load->view('admin/home');
		$this->load->view('admin/footer');
	}
	public function portfolio()
	{
		$this->load->view('header');
		$this->load->view('portfolio');
		$this->load->view('footer');
	}
	public function portfolio_details()
	{
		$this->load->view('header');
		$this->load->view('portfoliodetails');
		$this->load->view('footer');
	}
	public function client()
	{
		$config = array();
        $config["base_url"] = base_url() . "index.php/admin/client";
        $config["total_rows"] = $this->user->countclient();
        $config["per_page"] = 50;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $details['query'] = $this->user->get_client($config["per_page"], $page);
        $details["links"] = $this->pagination->create_links();
        $this->load->view('header');
		$this->load->view('viewuser',$details);
		$this->load->view('footer');
	}
    public function scategory()
	{	$this->form_validation->set_rules('name', 'name', 'required');
		if ($this->form_validation->run() == FALSE)
        {
        	$details['query']=$this->user->showcategory();
     		$this->load->view('header');
		$this->load->view('scategory',$details);
		$this->load->view('footer');
        }
		else
		{
			
			$name=$_POST['name'];
		    $descr=$_POST['descr'];

		    $categorys = $_POST['category'];


					    
			
			$result=$this->user->insert_scategory( $name,$descr,$categorys);
		if ($result)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('admin/scategory');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('admin/scategory');
			}
		}
	
		
	}
	public function Deletescategory($id)
	{
			
		$details['query']=$this->user->showscategory();
     		$this->load->view('header');
		$this->load->view('scategory',$details);
		$this->load->view('footer');
	  
	  echo "<script>
	 x = confirm ('You want to proceed deleting?')";
	 
	  $r=$this->user->deletescategory($id);
	  if($r){
	  echo "Successfully Deleted Data";
	  }
	  else {
		  echo "Can Not Delete Data";
	  }
	  
	   
	  
	  redirect('admin/scategory');
	 
	}

	
}
