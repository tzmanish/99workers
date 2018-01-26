<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Details extends CI_Controller {
	public function __construct()
	{	
		
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation','pagination'));
		$this->load->database();
		$this->load->model('user');

	}

	public function aboutus()
	{
		$this->load->view('header');
		$this->load->view('aboutus');
		$this->load->view('footer');
	}
	public function productdetails()
	{
		$this->load->view('header');
		$this->load->view('productdetails');
		$this->load->view('footer');
	}
	public function faq()
	{
		$this->load->view('header');
		$this->load->view('faq');
		$this->load->view('footer');
	}
	public function trust()
	{
		$this->load->view('header');
		$this->load->view('trust');
		$this->load->view('footer');
	}
	public function chooseus()
	{
		$this->load->view('header');
		$this->load->view('chooseus');
		$this->load->view('footer');
	}
	public function privacy()
	{
		$this->load->view('header');
		$this->load->view('privacy');
		$this->load->view('footer');
	}
	public function aggrement()
	{
		$this->load->view('header');
		$this->load->view('aggrement');
		$this->load->view('footer');
	}
	public function register()
	{
		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');
	}
	public function portfolio_details()
	{
		$this->load->view('header');
		$this->load->view('portfoliodetails');
		$this->load->view('footer');
	}
}
