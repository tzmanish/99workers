<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user1 extends CI_Model
{
	function get_user($email, $pwd)
	{
		$this->db->where('aaid', $email);
		$this->db->where('pass', $pwd);
        $query = $this->db->get('admin');
		return $query->result();
	}
	function insert_category($data)
    {
		return $this->db->insert('category', $data);
	}

	function showcategory()
	{
		$query=$this->db->get('category');
		return $query->result();
	}

	function deletecategory($id)
	{
	   $this->db->where('id', $id);
	   return($this->db->delete('category'));
	}
	function categorystatus($id, $status)
	{
		$this->db->where('id', $id);
        $data = array('status'=>$status);
		return($this->db->update('category',$data));
	}

/* service category*/

	function insert_scategory($data)
    {
		return $this->db->insert('scategory', $data);
	}

	function showscategory()
	{
		$query=$this->db->get('scategory');
		return $query->result();
	}

	function deletescategory($scid)
	{
	   $this->db->where('scid', $scid);
	   return($this->db->delete('scategory'));
	}
	function scategorystatus($scid, $scstatus)
	{
		$this->db->where('scid', $scid);
        $data = array('scstatus'=>$scstatus);
		return($this->db->update('scategory',$data));
	}

/* service */

	function insert_service($data)
    {
		return $this->db->insert('service', $data);
	}

	function showservice()
	{
		$this->db->select('*');
		$this->db->from('service');
		$this->db->join('scategory', 'scategory.scid = service.scid');
		$query = $this->db->get();
		return $query->result();
	}

	function deleteservice($id)
	{
	   $this->db->where('sid', $id);
	   return($this->db->delete('service'));
	}
	function servicestatus($id, $status)
	{
		$this->db->where('sid', $id);
        $data = array('status'=>$status);
		return($this->db->update('service',$data));
	}

	/* product */

	function insert_product($data)
    {
		return $this->db->insert('product', $data);
	}

	function showproduct()
	{
		$query=$this->db->get('product');
		return $query->result();
	}

	function deleteproduct($id)
	{
	   $this->db->where('pid', $id);
	   return($this->db->delete('product'));
	}

	/* portfolio */

	function insert_portfolio($data)
    {
		return $this->db->insert('portfolio', $data);
	}

	function showportfolio()
	{
		$this->db->select('*');
		$this->db->from('portfolio');
		$this->db->join('category', 'category.id = portfolio.pid');
		$query = $this->db->get();
		return $query->result();
	}

	function deleteportfolio($id)
	{
	   $this->db->where('pid', $id);
	   return($this->db->delete('portfolio'));
	}

	/* user */ 

	function showuser()
	{

		$this->db->where('status',"1");
		$query=$this->db->get('user');
		return $query->result();
	}

	function showsuspendeduser()
	{
		$this->db->where('status',"0");
		$query=$this->db->get('user');
		return $query->result();
	}
	function userstatus($id, $status)
	{
		$this->db->where('uid', $id);
        $data = array('status'=>$status);
		return($this->db->update('user',$data));
	}

	/* subscription */

    function showsubscription()
	{
		$query=$this->db->get('subscription');
		return $query->result();
	}
	function subscriptionstatus($id, $status)
	{
		$this->db->where('id', $id);
        $data = array('status'=>$status);
		return($this->db->update('subscription',$data));
	}

	/* projects */
	
    function showproject()
	{
		$this->db->select('*');
		$this->db->from('project');
		$this->db->join('scategory', 'scategory.scid = project.scid');
		$this->db->join('user', 'user.uid = project.uid');
		$query=$this->db->get();
		return $query->result();
	}
    function showcompleatedproject()
	{
		$this->db->where('pstatus',"1");
		$this->db->from('project');
		$this->db->join('scategory','scategory.scid = project.scid');
		$this->db->join('user', 'user.uid = project.uid');
		$query=$this->db->get();
		return $query->result();
	}
    function showongoingproject()
	{
		$this->db->where('pstatus',"0");
		$this->db->from('project');
		$this->db->join('scategory','scategory.scid = project.scid');
		$this->db->join('user', 'user.uid = project.uid');
		$query=$this->db->get();
		return $query->result();
	}
	function projectstatus($pid,$pstatus)
	{
		$this->db->where('pid',$pid);
        $data = array('pstatus'=>$pstatus);
		return($this->db->update('project',$data));
	}
    function unread()
	{   $this->db->where('astatus',"0");
		$this->db->from('chat');
		$this->db->join('project','project.pid = chat.pid');
		$this->db->join('scategory','scategory.scid = project.scid');
		$this->db->join('user','user.uid = project.uid');
		$query=$this->db->get();
		return $query->result();
	}

	/* admin */

	function updatepass($aid, $pass)
    {
    	$this->db->where('aid',$aid);
        $data = array('pass'=>$pass);
		return $this->db->update('admin', $data);
	}

	function updatemail($aid, $mail)
    {
    	$this->db->where('aid',$aid);
        $data = array('email'=>$mail);
		return $this->db->update('admin', $data);
	}

	function gset($aid, $aname)
    {
    	$this->db->where('aid',$aid);
        $data = array('aname'=>$aname);
		return $this->db->update('admin', $data);
	}
	function chat($pid,$uid)
	{
		$this->db->where('pid',$pid);
		$this->db->where('uid',$uid);
		$this->db->order_by("dt","desc");
		$query=$this->db->get('chat');
		return $query->result();

	}
	function inschat($data)
    {
		return $this->db->insert('chat', $data);
	}
	function countmsg()
	{	
		$this->db->where('astatus',"0");
		$this->db->select_sum('id');
	    $this->db->from('chat');

	    $total_a = $this->db->count_all_results();

	    if ($total_a > 0)
	    {
	        return $total_a;
	    }

	    return NULL;

	}
	function countmsgi($pid)
	{	
		$this->db->where('astatus',"0");
		$this->db->where('pid',$pid);
		$this->db->select_sum('id');
	    $this->db->from('chat');

	    $total_a = $this->db->count_all_results();

	    if ($total_a > 0)
	    {
	        return $total_a;
	    }

	    return NULL;

	}
	function chatupdate($pid, $uid)
    {
    	$this->db->where('pid',$pid);
    	$this->db->where('uid',$uid);
        $data = array('astatus'=>'1');
		return $this->db->update('chat', $data);
	}
	function totalprojectcount()
	{
		$this->db->select_sum('id');
	    $this->db->from('project');

	    $total_a = $this->db->count_all_results();

	    if ($total_a > 0)
	    {
	        return $total_a;
	    }

	    return NULL;

	}

	function comprojectcount()
	{
		$this->db->where('pstatus',"1");
		$this->db->select_sum('id');
	    $this->db->from('project');

	    $total_a = $this->db->count_all_results();

	    if ($total_a > 0)
	    {
	        return $total_a;
	    }

	    return NULL;

	}

	function onprojectcount()
	{ 
		$this->db->where('pstatus',"0");
		$this->db->select_sum('id');
	    $this->db->from('project');

	    $total_a = $this->db->count_all_results();

	    if ($total_a > 0)
	    {
	        return $total_a;
	    }

	    return NULL;

	}
	function pt()
	{ 
	   $query=$this->db->get('payments');
	   return $query->result();

	}
	function pt1()
	{ ;
	   $this->db->select('*');
		$this->db->from('payments');
		$this->db->join('user', 'user.uid = payments.user_id');
		$this->db->join('project', 'project.pid = payments.product_id');
		$query = $this->db->get();
		return $query->result();

	}
	function due($pid)
	{ 
		$this->db->where('product_id',$pid);
		$query=$this->db->get('payments');
		return $query->result();

	}
	function tpw()
	{ 
	   $query=$this->db->get('project');
	   return $query->result();

	}

}?>