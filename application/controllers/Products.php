<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Products extends CI_Controller
{
	function  __construct() {
		parent::__construct();
		$this->load->library(array('session', 'form_validation','pagination','cart','paypal_lib'));
		$this->load->model('user');
	}
	
	function index(){
		$data = array();
		//get products data from database
        $data['products'] = $this->product->getRows();
		//pass the products data to view
		$this->load->view('products/index', $data);
	}
	
	function buy($id){
		//Set variables for paypal form
		$returnURL = base_url().'index.php/paypal/success'; //payment success url
		$cancelURL = base_url().'index.php/paypal/cancel'; //payment cancel url
		$notifyURL = base_url().'index.php/paypal/ipn'; //ipn url
		//get particular product data
		$userID =$this->session->userdata('uid'); //current user id
		$logo = base_url().'assets/images/codexworld-logo.png';
		
		$this->paypal_lib->add_field('return', $returnURL);
		$this->paypal_lib->add_field('cancel_return', $cancelURL);
		$this->paypal_lib->add_field('notify_url', $notifyURL);
		$this->paypal_lib->add_field('item_name', "ad");
		$this->paypal_lib->add_field('custom', $userID);
		$this->paypal_lib->add_field('item_number','1');
		$this->paypal_lib->add_field('amount',  "3");		
		$this->paypal_lib->image($logo);
		
		$this->paypal_lib->paypal_auto_form();
	}
}