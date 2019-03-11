<?php
class dbdept extends CI_Model
{
	function insert_data($a)
	{
		$this->db->insert('dept',$a);
	}
	function getalldata()
	{
		$sql=$this->db->query("select *from dept");
		return $sql->result();
	}
	function delete($id)
	{
		$this->db->where('dept_id',$id);
		$this->db->delete('dept');
	}
	function getedit($id)
	{
		$sql=$this->db->query("select *from dept where dept_id='".$id."'");
		return $sql->row();
	}
	function update($a,$id)
	{
		$this->db->where('dept_id',$id);
		$this->db->update('dept',$a);
	}
	function getdeptdata($did)
	{
		$sql=$this->db->query("select *from emp_info where dept_id='".$did."'" );
		return $sql->result();
	}
	function getdeptname($id)
	{
		$sql=$this->db->query("select * from dept where dept_id='".$id."'");
		return $sql->row();
	}
}
?> 