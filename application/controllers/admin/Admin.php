<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{	
		
		parent::__construct();
		$this->load->helper(array('form','url', 'html','text','typography','date'));
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

	public function deletecategory($id)
	{
	  $r=$this->user1->deletecategory($id);
	  if($r){
	  	echo "Successfully Deleted Data";
	  }
	  else {
		  echo "Can Not Delete Data";
	  }
	  redirect('admin/admin/showcategory');
	} 

	public function categorystatus($id,$status)
	{

	  if($status=='1')
	 {
	 	$r=$this->user1->categorystatus($id,'0');
	 }
	 else
	 {
	 	$r=$this->user1->categorystatus($id,'1');
	 }
	  if($r){
	  echo "Successfully Updated Data";
	  }
	  else {
		  echo "Can Not Delete Data";
	  }
	  redirect('admin/admin/showcategory');
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

	public function deletescategory($scid)
	{
	  $r=$this->user1->deletescategory($scid);
	  if($r){
	  	echo "Successfully Deleted Data";
	  }
	  else {
		  echo "Can Not Delete Data";
	  }
	  redirect('admin/admin/showscategory');
	} 

	public function scategorystatus($scid,$scstatus)
	{

	  if($scstatus=='1')
	 {
	 	$r=$this->user1->scategorystatus($scid,'0');
	 }
	 else
	 {
	 	$r=$this->user1->scategorystatus($scid,'1');
	 }
	  if($r){
	  echo "Successfully Updated Data";
	  }
	  else {
		  echo "Can Not Delete Data";
	  }
	  redirect('admin/admin/showcategory');
	}
	
	/* SERVICE */

		public function showservice()
	{	
        	$details['query']=$this->user1->showservice();
     		$this->load->view('admin/header');
		    $this->load->view('admin/showservice',$details);
		    $this->load->view('admin/footer');
    }
    public function addservice()
	{	$this->form_validation->set_rules('sname', 'sname', 'required');
		if ($this->form_validation->run() == FALSE)
        {	$details['query']=$this->user1->showscategory();
     		$this->load->view('admin/header');
		    $this->load->view('admin/addservice',$details);
		    $this->load->view('admin/footer');
        }
		else
		{
			if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = '../uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = time()."product";
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                     $this->gallery_path = realpath(APPPATH . '../../uploads/');//fetching path
                     $config1 = array(
                          'source_image' => $uploadData['full_path'], //get original image
                          'new_image' => $this->gallery_path.'/thumb/', //save as new image //need to create thumbs first
                          'maintain_ratio' => TRUE,
                          'width' => 600
                           
                        );
                        $this->load->library('image_lib', $config1); //load library
                        $this->image_lib->resize(); //generating thumb

                    $picture = $uploadData['file_name'];
                }
                else{
                    $picture = '';
            }
            }else{
                $picture = '';
            }
			$data= array(
				'sname' => $this->input->post('sname'),
				'short_descr' => $this->input->post('short_descr'),
				'sdescr' => $this->input->post('sdescr'),
				'scid' => $this->input->post('scid'),
				'image' => $picture
			);
            $result=$this->user1->insert_service($data);
		if ($result)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('admin/admin/addservice');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('admin/admin/addservice');
			}
		}
	
		
	}
	public function Deleteservice($id)
	{
	 
	  $r=$this->user1->deleteservice($id);
	  if($r){
	  echo "Successfully Deleted Data";
	  }
	  else {
		  echo "Can Not Delete Data";
	  }
	  
	   
	  
	  redirect('admin/admin/showservice');
	 
	} 
	public function servicestatus($id,$status)
	{

	  if($status=='1')
	 {
	 	$r=$this->user1->servicestatus($id,'0');
	 }
	 else
	 {
	 	$r=$this->user1->servicestatus($id,'1');
	 }
	  if($r){
	  echo "Successfully Updated Data";
	  }
	  else {
		  echo "Can Not Delete Data";
	  }
	  redirect('admin/admin/showservice');
	}

	/* product */

	public function showproduct()
	{	
        	$details['query']=$this->user1->showproduct();
     		$this->load->view('admin/header');
		    $this->load->view('admin/showproduct',$details);
		    $this->load->view('admin/footer');
    }

    public function addproduct()
	{	$this->form_validation->set_rules('pname', 'pname', 'required');
		if ($this->form_validation->run() == FALSE)
        {	$details['query']=$this->user1->showproduct();
     		$this->load->view('admin/header');
		    $this->load->view('admin/addproduct',$details);
		    $this->load->view('admin/footer');
        }
		else
		{
			if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = '../uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = time()."product";
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                     $this->gallery_path = realpath(APPPATH . '../../uploads/');//fetching path
                     $config1 = array(
                          'source_image' => $uploadData['full_path'], //get original image
                          'new_image' => $this->gallery_path.'/thumb/', //save as new image //need to create thumbs first
                          'maintain_ratio' => TRUE,
                          'width' => 600
                           
                        );
                        $this->load->library('image_lib', $config1); //load library
                        $this->image_lib->resize(); //generating thumb

                    $picture = $uploadData['file_name'];
                }
                else{
                    $picture = '';
            }
            }
            else{
                $picture = '';
            }
			$data= array(
				'pname' => $this->input->post('pname'),
				'pdescr' => $this->input->post('pdescr'),
				'pid' => $this->input->post('pid'),
				'pimage' => $picture
			);
            $result=$this->user1->insert_product($data);
		if ($result)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('admin/admin/addproduct');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('admin/admin/addproduct');
			}
		}
	
		
	}
	public function Deleteproduct($id)
	{
	 
	  $r=$this->user1->deleteproduct($id);
	  if($r){
	  echo "Successfully Deleted Data";
	  }
	  else {
		  echo "Can Not Delete Data";
	  }
	  
	   
	  
	  redirect('admin/admin/showproduct');
	 
	} 

	/* portfolio */

	public function showportfolio()
	{	
        	$details['query']=$this->user1->showportfolio();
     		$this->load->view('admin/header');
		    $this->load->view('admin/showortfolio',$details);
		    $this->load->view('admin/footer');
    }

    public function addportfolio()
	{	$this->form_validation->set_rules('pname', 'pname', 'required');
		if ($this->form_validation->run() == FALSE)
        {	$details['query']=$this->user1->showportfolio();
     		$this->load->view('admin/header');
		    $this->load->view('admin/addportfolio',$details);
		    $this->load->view('admin/footer');
        }
		else
		{
			if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = '../uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = time()."product";
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                     $this->gallery_path = realpath(APPPATH . '../../uploads/');//fetching path
                     $config1 = array(
                          'source_image' => $uploadData['full_path'], //get original image
                          'new_image' => $this->gallery_path.'/thumb/', //save as new image //need to create thumbs first
                          'maintain_ratio' => TRUE,
                          'width' => 600
                           
                        );
                        $this->load->library('image_lib', $config1); //load library
                        $this->image_lib->resize(); //generating thumb

                    $picture = $uploadData['file_name'];
                }
                else{
                    $picture = '';
            }
            }
            else{
                $picture = '';
            }
			$data= array(
				'pname' => $this->input->post('pname'),
				'pdescr' => $this->input->post('pdescr'),
				'id' => $this->input->post('id'),
				'pimage' => $pimage
			);
            $result=$this->user1->insert_portfolio($data);
		if ($result)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('admin/admin/addportfolio');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('admin/admin/addportfolio');
			}
		}
	
		
	}
	public function Deleteportfolio($id)
	{
	 
	  $r=$this->user1->deleteportfolio($id);
	  if($r){
	  echo "Successfully Deleted Data";
	  }
	  else {
		  echo "Can Not Delete Data";
	  }
	  
	   
	  
	  redirect('admin/admin/showportfolio');
	 
	} 

}
