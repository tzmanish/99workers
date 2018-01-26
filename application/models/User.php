<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->tableName = 'user';
		$this->primaryKey = 'id';
    }
	
 function get_user($email, $pwd)
	{
		$this->db->where('email', $email);
		$this->db->where('password', md5($pwd));
        $query = $this->db->get('user');
        $data['modified'] = date("Y-m-d H:i:s");
		$update = $this->db->update('user',$data);
		return $query->result();
	}
	    function get_userpass($email)
	{
		$this->db->where('email', $email);    
                $query = $this->db->get('user');
		return $query->result();
	}
	function get_account($uid)
	{
		$this->db->where('uid', $uid);
        $query = $this->db->get('account');
		return $query->result();
	}
	
	// get user
	function get_user_by_id($id)
	{
		$this->db->where('uid', $id);
        $query = $this->db->get('user');
		return $query->result();
	}
	
	// insert
	function insert_user($data)
    {
    	$data['created'] = date("Y-m-d H:i:s");
		return $this->db->insert('user', $data);
	}

	function update($id, $fname, $lname, $contact)
    {	
    	$data = array('fname'=>$fname, 'lname'=>$lname, 'contact'=>$contact);
    	$this->db->where('id', $id);
		return $this->db->update('user', $data);
	}
	/*Subscribe*/
    function insert_subscriber($data)
    {
    	$data['created'] = date("Y-m-d H:i:s");
		return $this->db->insert('subscription', $data);
	}
	/*pages*/
	function showportfolio()
	{
		$query=$this->db->get('portfolio');
		return $query->result();
	}
	function showportfolio1($id)
	{
		$this->db->where('pid', $id);
		$this->db->select('*');
		$this->db->from('portfolio');
		$this->db->join('category', 'category.id = portfolio.cid');
		$query = $this->db->get();
		return $query->result();
	}
	function showproduct()
	{
		$query=$this->db->get('product');
		return $query->result();
	}
	function showproduct1($id)
	{ 
		$this->db->where('pid', $id);
		$query=$this->db->get('product');
		return $query->result();
	}
	function showservice()
	{
		$this->db->select('*');
		$this->db->from('service');
		$this->db->join('scategory', 'scategory.scid = service.scid');
		$query = $this->db->get();
		return $query->result();
	}
	function showservice1($id)
	{
		$this->db->where('sid', $id);
		$this->db->select('*');
		$this->db->from('service');
		$this->db->join('scategory', 'scategory.scid = service.scid');
		$query = $this->db->get();
		return $query->result();
	}
	function showscategory()
	{
		$query=$this->db->get('scategory');
		return $query->result();
	}

	function addproject($data)
    {
		return $this->db->insert('project', $data);
	}
	 function showproject($id)
	{
		$this->db->where('uid', $id);
		$query=$this->db->get('project');
		return $query->result();
	}
	function showcomp($id)
	{
		$this->db->where('uid', $id);
		$this->db->where('pstatus', "1");
		$query=$this->db->get('project');
		return $query->result();
	}
	function showproc($id)
	{
		$this->db->where('uid', $id);
		$this->db->where('pstatus', "0");
		$query=$this->db->get('project');
		return $query->result();
	}

	function editp($uid, $data)
    {
    	$this->db->where('uid',$uid);
        return $this->db->update('user', $data);
	}


	function cpass($uid, $pass)
    {
    	$this->db->where('uid',$uid);
    	$data = array('password'=>$pass);
        return $this->db->update('user', $data);
	}
}