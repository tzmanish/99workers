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
		$this->db->where('id', $id);
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

}