<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paypal extends CI_Controller 
{
	 function  __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation','pagination','cart','paypal_lib'));
		$this->load->database();
		$this->load->model('user');
	 }
	 
	 function success(){
	 	//Get payment information from PayPal
	$data['item_number'] = $this->input->post('item_number');
	$data['txn_id'] =$this->input->post('txn_id'); 
	$data['payment_amt'] =$this->input->post('payment_gross');
	$data['currency_code'] = $this->input->post('mc_currency');
	$data['status'] =$this->input->post('payment_status');
	$data['user_id'] = $this->input->post('custom');
	$data1= array(
				'user_id' => $this->input->post('custom'),
				'product_id' => $this->input->post('item_name'),
				'item_number' => $this->input->post('item_number'),
				'txn_id' => $this->input->post('txn_id'),
				'payment_gross' => $this->input->post('payment_gross'),
				'currency_code' => $this->input->post('mc_currency'),
				'payer_email' => $this->input->post('payer_email'),
				'payment_status' => $this->input->post('payment_status')
			);
		$this->user->insertTransaction($data1);
		$this->load->view('header');
        $this->load->view('paypal/success', $data);
		$this->load->view('footer');
	 }
	 
	 function cancel(){
        $this->load->view('paypal/cancel');
	 }
	 
	 function ipn(){

		$data['user_id'] = $this->input->post('custom');
		$data['product_id']	= $this->input->post('item_number');
		$data['txn_id']	= $this->input->post('txn_id'); 
		$data['payment_gross'] = $this->input->post('payment_gross');
		$data['currency_code'] = $this->input->post('mc_currency');
		$data['payer_email'] =$this->input->post('payer_email'); 
		$data['payment_status']	= $this->input->post('payment_status');

		$paypalURL = $this->paypal_lib->paypal_url;		
		$result	= $this->paypal_lib->curlPost($paypalURL,$paypalInfo);
		
		//check whether the payment is verified
		if(preg_match("/VERIFIED/i",$result)){
		    //insert the transaction data into the database
			$this->user->insertTransaction($data);
		}
    }
}