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
		$this->load->view('sideuser');
		$this->load->view('userdash');
		$this->load->view('footer');
	}
	public function startproject()
	{
		$this->load->view('header');
		$this->load->view('sideuser');
		$this->load->view('startproject');
		$this->load->view('footer');
	}
	public function changepass()
	{
		$this->load->view('header');
		$this->load->view('sideuser');
		$this->load->view('changepass');
		$this->load->view('footer');
	}
	public function editprofile()
	{
		$this->load->view('header');
		$this->load->view('sideuser');
		$this->load->view('editprofile');
		$this->load->view('footer');
	}
	public function changemail()
	{
		$this->load->view('header');
		$this->load->view('sideuser');
		$this->load->view('changemail');
		$this->load->view('footer');
	}
}
