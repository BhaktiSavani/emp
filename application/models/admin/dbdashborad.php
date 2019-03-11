<?php
class dbdashborad extends CI_Model
{
	function getalldeptcount()
	{
		$sql=$this->db->query("select *from dept");
		return $sql->num_rows();
	}
	function getallempcount()
	{
		$sql=$this->db->query("select *from emp_info");
		return $sql->num_rows();
	}
	function getalltaskcount($user)
	{
		$sql=$this->db->query("select *from task where dept_id='".$user."'");
		return $sql->num_rows();
	}
	function getallleavecount($user)
	{
		$sql=$this->db->query("select *from leaves where dept_id='".$user."'");
		return $sql->num_rows();
	}
	function getall_tasknoti($user)
	{
		$sql=$this->db->query("select *from task where dept_id ='".$user."' order by task_id DESC limit 3");
		return $sql->result();
	}
	function getall_empnoti($user)
	{
		$sql=$this->db->query("select *from emp_info where dept_id ='".$user."' order by emp_id DESC limit 3");
		return $sql->result();
	}
	function getall_leavenoti($user)
	{
		$sql=$this->db->query("select *from man_leave where dept_id ='".$user."' order by leave_id DESC limit 3");
		return $sql->result();
	}
}