<?php
class cart extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url', 'html','text','typography','date'));
		$this->load->library(array('session', 'form_validation','pagination','cart'));
		$this->load->database();
		$this->load->model('user');
	}
	
	public function index()
	{
		$details['query']=$this->user->showcart($this->session->userdata('uid'));
		$this->load->view('header');
		$this->load->view('cart',$details);
		$this->load->view('footer');
	}

	 public function remove_cart()
    {
    	$uid=$this->session->userdata('uid');
    	$id=$this->input->post('postid');
		$this->db->delete('cart', array('id'=>$id,
                                          'uid'=>$uid));
    }
 public function itemadd()
    {
    	$uid=$this->session->userdata('uid');
    	$id=$this->input->post('id');
    	$item=$this->input->post('item');
		$this->db->query('update cart set item="'.$item.'" where id="'.$id.'" and uid="'.$uid.'"');
    }

	  public function cartadd()
	{	
		$uid=$this->session->userdata('uid');
		$postid=$this->input->post('id');
		$qty="1";
		$attributevalue="product";
     	$checkcart = $this->db->query('select * from cart 
			                            where productid="'.$postid.'" and uid = "'.$uid.'"');
		$resultcheckcart = $checkcart->num_rows();


		if($resultcheckcart == '0' ){
		$data=array('productid'=>$postid,'uid'=>$uid,'item'=>$qty,'attributevalue'=>$attributevalue);
		$this->db->insert('cart',$data);
		}
		else if($resultcheckcart >='1' ){
				
			}
	}
	 public function cartadd1()
	{
	 
		$data = array(
        'id'  =>$this->input->post('id'),
        'qty'     =>"1",
        'price'   => 39.95,
        'name'    => 'T-Shirt',
        'attributevalue' =>"productid"
		);
		$this->cart->insert($data);
	

	}
	function removecart($rowid) 
	{

                    // Destroy selected rowid in session.
			if ($rowid==="all"){
                       // Destroy data which store in  session.
			$this->cart->destroy();
		}else{
                    // Destroy selected rowid in session.
			$data = array(
				'rowid'   => $rowid,
				'qty'     => 0
			);
                     // Update cart data, after cancle.
			$this->cart->update($data);
		}
		
                 // This will show cancle data in cart.
		redirect('cart');
		
	}
	
	function updatecart()
	{
         $data = array(
        'rowid' => $this->input->post('rowid'),
        'qty'   => $this->input->post('item')
	);
       $this->cart->update($data);
	}	
	 public function wishlist()
	{
	$uid=$this->session->userdata('uid');
	$postid=$this->input->post('id');
	$qty=$this->input->post('qty');
	$attributevalue=$this->input->post('attributevalue');
	$category=$this->input->post('category');
	$checkcart = $this->db->query('select * from wishlist 
		                            where productid="'.$postid.'" 
		                            and attributevalue="'.$attributevalue.'" and uid = "'.$uid.'"');
	$resultcheckcart = $checkcart->num_rows();


	if($resultcheckcart == '0' ){
	$data=array('productid'=>$postid,'uid'=>$uid,'item'=>$qty,'category'=>$category,'attributevalue'=>$attributevalue);
	$this->db->insert('wishlist',$data);
		echo '<script language="javascript">';
		echo 'alert("Successfully add to cart")';
		echo '</script>';
	}
	else{
		$this->db->delete('wishlist', array('productid'=>$postid,
										  'uid'=>$uid,'attributevalue'=>$attributevalue));
		echo '<script language="javascript">';
		echo 'alert("Already add to cart")';
		echo '</script>';
		}

	}
		
}