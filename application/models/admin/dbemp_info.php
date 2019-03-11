<?php
class dbemp_info extends CI_Model
{
	function insert_data($a)
	{
		$this->db->insert('emp_info',$a);
	}
	function getalldata($user)
	{
		$sql=$this->db->query("select *from emp_info where dept_id='".$user."'");
		return $sql->result();
	}
	function delete($id)
	{
		$this->db->where('emp_id',$id);
		$this->db->delete('emp_info');
	}
	function getedit($id)
	{
		$sql=$this->db->query("select * from emp_info where emp_id='".$id."'");
		return $sql->row();
	}
	function getmandata($user)
	{
		$sql=$this->db->query("select *from man_info where man_name='".$user."'");
		return $sql->result();
	}
	
	function getdeptname($id)
	{
		$sql=$this->db->query("select * from dept where dept_id='".$id."'");
		return $sql->row();
	}
	
	function getempdata($id)
	{
		$sql=$this->db->query("select * from emp_info where emp_id='".$id."'");
		return $sql->result();
	}
	function update($a,$id)
	{
		$this->db->where('emp_id',$id);
		$this->db->update('emp_info',$a);
	}
	
	function getalldept()
	{
		$sql=$this->db->query("select *from dept");
		return $sql->result();
	}
}
?>