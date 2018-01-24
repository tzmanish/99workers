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

	function deletescategory($id)
	{
	   $this->db->where('id', $id);
	   return($this->db->delete('scategory'));
	}

}?>