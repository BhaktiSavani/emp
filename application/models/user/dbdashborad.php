<?php
class dbdashborad extends CI_Model
{
	function getall_leavenoti($user)
	{
		$sql=$this->db->query("select *from leaves where emp_name ='".$user."'");
		return $sql->result();
	}
	function getall_feedbacknoti($user)
	{
		$sql=$this->db->query("select *from feedback where emp_id ='".$user."'");
		return $sql->result();
	}
	
	function getdeptname($id)
	{
		$sql=$this->db->query("select * from dept where dept_id='".$id."'");
		return $sql->row();
	}
	function getalltaskcount($user)
	{
		$sql=$this->db->query("select *from task where emp_id='".$user."'");
		return $sql->num_rows();
	}
}
?>