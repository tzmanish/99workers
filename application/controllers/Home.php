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
}
