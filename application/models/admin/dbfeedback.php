<?php
class dbfeedback extends CI_Model
{
	//apply for leave
	function insert_data($a)
	{
		$this->db->insert('feedback',$a);
	}
	//get employee leave list
	function getalldata()
	{
		$sql=$this->db->query("select *from feedback");
		return $sql->result();
	}
	
	function getempdata($user)
	{
		$sql=$this->db->query("select *from emp_info where dept_id='".$user."'");
		return $sql->result();
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
	function getmanname($id)
	{
		$sql=$this->db->query("select * from man_info where man_id='".$id."'");
		return $sql->row();
	}
	function getempname($id)
	{
		$sql=$this->db->query("select * from emp_info where emp_id='".$id."'");
		return $sql->row();
	}
	function gettask($id)
	{
		$sql=$this->db->query("select * from task where task_id='".$id."'");
		return $sql->result();
	}
	
	
	function getalldept()
	{
		$sql=$this->db->query("select *from dept");
		return $sql->result();
	}
	function getallman()
	{
		$sql=$this->db->query("select *from man_info");
		return $sql->result();
	}
	function getallemp()
	{
		$sql=$this->db->query("select *from emp_info");
		return $sql->result();
	}
	function getalltask($user)
	{
		$sql=$this->db->query("select *from task where dept_id='".$user."'");
		return $sql->result();
	}
	//for task name via emp name
	function getemp($user)
	{
		$sql=$this->db->query("select *from task where task_name='".$user."'");
		return $sql->result();
	}
	function getalldeptname($id)
	{
		$sql=$this->db->query("select *from dept where dept_id ='".$id."'");
		return $sql->row();
	}
	function getallmanname($id)
	{
		$sql=$this->db->query("select *from man_info where man_id ='".$id."'");
		return $sql->row();
	}
	function getallempname($id)
	{
		$sql=$this->db->query("select *from emp_info where emp_id ='".$id."'");
		return $sql->row();
	}
	
 
function status_update($abc,$id)
{
	$this->db->where('leave_id',$id);
	$this->db->update('leaves',$abc);
}
 
}
?> 