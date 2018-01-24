<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{	
		
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation','pagination'));
		$this->load->database();
		$this->load->model('user1');

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
        $config["total_rows"] = $this->user1->countclient();
        $config["per_page"] = 50;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $details['query'] = $this->user1->get_client($config["per_page"], $page);
        $details["links"] = $this->pagination->create_links();
        $this->load->view('admin/header');
		$this->load->view('admin/viewuser',$details);
		$this->load->view('admin/footer');
	}
	public function showcategory()
	{	
        	$details['query']=$this->user1->showcategory();
     		$this->load->view('admin/header');
		    $this->load->view('admin/showcategory',$details);
		    $this->load->view('admin/footer');
    }
    public function addcategory()
	{	$this->form_validation->set_rules('name', 'name', 'required');
		if ($this->form_validation->run() == FALSE)
        {
     		$this->load->view('admin/header');
		    $this->load->view('admin/addcategory');
		    $this->load->view('admin/footer');
        }
		else
		{
			$data = array(
				'name' => $this->input->post('name'),
				'descr' => $this->input->post('descr')
			);
            $result=$this->user1->insert_category($data);
		if ($result)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('admin/admin/addcategory');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('admin/admin/addcategory');
			}
		}
	
		
	}
	public function Deletecategory($id)
	{
			
		$details['query']=$this->user1->showscategory();
     		$this->load->view('header');
		$this->load->view('scategory',$details);
		$this->load->view('footer');
	  
	  echo "<script>
	 x = confirm ('You want to proceed deleting?')";
	 
	  $r=$this->user1->deletescategory($id);
	  if($r){
	  echo "Successfully Deleted Data";
	  }
	  else {
		  echo "Can Not Delete Data";
	  }
	  
	   
	  
	  redirect('admin/scategory');
	 
	} 


	/*service category*/


		public function showscategory()
	{	
        	$details['query']=$this->user1->showscategory();
     		$this->load->view('admin/header');
		    $this->load->view('admin/showscategory',$details);
		    $this->load->view('admin/footer');
    }
    public function addscategory()
	{	$this->form_validation->set_rules('scname', 'scname', 'required');
		if ($this->form_validation->run() == FALSE)
        {
     		$this->load->view('admin/header');
		    $this->load->view('admin/addscategory');
		    $this->load->view('admin/footer');
        }
		else
		{
			$data = array(
				'scname' => $this->input->post('scname'),
				'scdescr' => $this->input->post('scdescr')
			);
            $result=$this->user1->insert_scategory($data);
		if ($result)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('admin/admin/addscategory');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('admin/admin/addscategory');
			}
		}
	
		
	}
	public function Deletescategory($id)
	{
			
		$details['query']=$this->user1->showscategory();
     		$this->load->view('header');
		$this->load->view('scategory',$details);
		$this->load->view('footer');
	  
	  echo "<script>
	 x = confirm ('You want to proceed deleting?')";
	 
	  $r=$this->user1->deletescategory($id);
	  if($r){
	  echo "Successfully Deleted Data";
	  }
	  else {
		  echo "Can Not Delete Data";
	  }
	  
	   
	  
	  redirect('admin/scategory');
	 
	}
	
}
