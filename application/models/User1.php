<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user1 extends CI_Model
{
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
		$query=$this->db->get('service');
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
		$query=$this->db->get('portfolio');
		return $query->result();
	}

	function deleteportfolio($id)
	{
	   $this->db->where('pid', $id);
	   return($this->db->delete('portfolio'));
	}

}?>