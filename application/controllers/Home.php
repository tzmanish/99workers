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
		$this->load->view('header');
		$this->load->view('portfolio');
		$this->load->view('footer');
	}
	public function pdetails()
	{
		$this->load->view('header');
		$this->load->view('pdetails');
		$this->load->view('footer');
	}
	public function sdetails()
	{
		$this->load->view('header');
		$this->load->view('sdetails');
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
	public function services()
	{
		$this->load->view('header');
		$this->load->view('services');
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
	public function product()
	{
		$this->load->view('header');
		$this->load->view('product');
		$this->load->view('footer');
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
	public function contact()
	{
		$this->load->view('header');
		$this->load->view('contact');
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
