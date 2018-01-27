<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class myaccount extends CI_Controller {
	public function __construct()
	{	
		
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation','pagination','cart','paypal_lib'));
		$this->load->database();
		$this->load->model('user');
		if(!$this->session->userdata('uid')){
                redirect('login', 'refresh');}

	}

	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('sideuser');
		$this->load->view('userdash');
		$this->load->view('footer');
	}


    public function startproject()
	{	$this->form_validation->set_rules('pname', 'pname', 'required');
		if ($this->form_validation->run() == FALSE)
        {	
        	$details['query']=$this->user->showscategory();
			$this->load->view('header');
			$this->load->view('sideuser');
			$this->load->view('startproject', $details);
			$this->load->view('footer');
        }
		else
		{
			if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = 'uploads/project/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|doc|pdf';
                $config['file_name'] = time()."project";
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                     $this->gallery_path = realpath(APPPATH . '../uploads/project/');//fetching path
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
            $uid=$this->session->userdata('uid');
			$data= array(
				'pname' => $this->input->post('pname'),
				'dscr' => $this->input->post('dscr'),
				'scid' => $this->input->post('scid'),
				'cost' => $this->input->post('cost'),
				'uid'=>$uid,
				'attach' => $picture
			);
            $result=$this->user->addproject($data);
		if ($result)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('myaccount/startproject');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('myaccount/startproject');
			}
		}
	}
	public function changepass()
	{
		$this->load->view('header');
		$this->load->view('sideuser');
		$this->load->view('changepass');
		$this->load->view('footer');
	}

	public function editp()
	{	$this->form_validation->set_rules('fname', 'fname', 'required');
	$this->form_validation->set_rules('lname', 'lname', 'required');
		if ($this->form_validation->run() == FALSE)
        {	
        	$details=$this->user->get_user_by_id($this->session->userdata('uid'));
        	$data['fname']=$details[0]->fname;
        	$data['lname']=$details[0]->lname;
		$this->load->view('header');
		$this->load->view('sideuser');
		$this->load->view('editp',$data);
		$this->load->view('footer');
        }
		else
		{
		$uid=$this->session->userdata('uid');
			$data= array(
				'fname' => $this->input->post('fname'),
				'lname' => $this->input->post('lname'),
			);
            $result=$this->user->editp($uid, $data);
		if ($result)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('myaccount/editp');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('myaccount/editp');
			}
		}
	}

	public function cpass()
	{
		
		$this->form_validation->set_rules('newpass', 'newpass', 'trim|required|md5');
		if (($this->form_validation->run() == FALSE))
        {
			$this->load->view('header');
			$this->load->view('sideuser');
			$this->load->view('cpass');
			$this->load->view('footer');
        }
		else
		{
			$uid=$this->session->userdata('uid');
			$pass= $this->input->post('newpass');
            $result=$this->user->cpass($uid,$pass);
		   if ($result)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('myaccount/cpass');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('myaccount/cpass');
			}
		}
	}
	public function changemail()
	{
		$this->load->view('header');
		$this->load->view('sideuser');
		$this->load->view('changemail');
		$this->load->view('footer');
	}
	public function showproject()
	{	
        	$details['query']=$this->user->showproject($this->session->userdata('uid'));
     		$this->load->view('header');
			$this->load->view('sideuser');
		    $this->load->view('showproject',$details);
		    $this->load->view('footer');
    }
	public function showcomp()
	{	
        	$details['query']=$this->user->showcomp($this->session->userdata('uid'));
     		$this->load->view('header');
			$this->load->view('sideuser');
		    $this->load->view('showproject',$details);
		    $this->load->view('footer');
    }
	public function showproc()
	{	
        	$details['query']=$this->user->showproc($this->session->userdata('uid'));
     		$this->load->view('header');
			$this->load->view('sideuser');
		    $this->load->view('showproject',$details);
		    $this->load->view('footer');
    }
    function chat($pid,$uid)
    {	
		$this->form_validation->set_rules('name', 'name', 'required');
		if ($this->form_validation->run() == FALSE)
        {	
        	$details['query']=$this->user->chat($pid,$uid);
        	$result=$this->user->chatupdate($pid,$uid);
        	$details['uid']=$uid;
        	$details['pid']=$pid;
    	    $this->load->view('header');
    	    $this->load->view('sideuser');
	        $this->load->view('chat',$details);
	        $this->load->view('footer');	
        }
		else
		{
			if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = 'uploads/chat/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = time()."chat";
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                     $this->gallery_path = realpath(APPPATH . '../uploads/chat/');//fetching path
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
				'uid' => $this->input->post('uid'),
				'pid' => $this->input->post('pid'),
				'msg' => $this->input->post('message'),
				'ustatus' => "1",
				'astatus' => "0",
				'sentby' => "0",
				'image' => $picture
			);
            $result=$this->user->inschat($data);
		if ($result)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
	  			redirect($_SERVER['HTTP_REFERER']);
			}	
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
	
		
	}
	public function checkout($pid,$uid)
	{
		$data['pid']=$pid;
		$data['uid']=$uid;

		$this->load->view('header');
		$this->load->view('checkout',$data);
		$this->load->view('footer');
	}
	function pay(){
		//Set variables for paypal form
		$returnURL = base_url().'index.php/paypal/success'; //payment success url
		$cancelURL = base_url().'index.php/paypal/cancel'; //payment cancel url
		$notifyURL = base_url().'index.php/paypal/ipn'; //ipn url
		//get particular product data
		$uid=$this->input->post('pid');
		$amount=$this->input->post('amount');
		$userID =$this->session->userdata('uid'); //current user id
		$logo = base_url().'assets/images/codexworld-logo.png';
		
		$this->paypal_lib->add_field('return', $returnURL);
		$this->paypal_lib->add_field('cancel_return', $cancelURL);
		$this->paypal_lib->add_field('notify_url', $notifyURL);
		$this->paypal_lib->add_field('item_name', $uid);
		$this->paypal_lib->add_field('custom', $userID);
		$this->paypal_lib->add_field('item_number','1');
		$this->paypal_lib->add_field('amount',  $amount);		
		$this->paypal_lib->image($logo);
		
		$this->paypal_lib->paypal_auto_form();
	}
}
