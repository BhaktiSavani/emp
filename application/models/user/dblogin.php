<?php
class dblogin extends CI_model
{
	function chklogin($user,$pass,$dept)
	{
		$sql=$this->db->query("select *from emp_info where emp_name='".$user."' AND password='".$pass."' AND dept_id='".$dept."'");
		return $sql->row(); 
	}
	
	function getalldept()
	{
		$sql=$this->db->query("select *from dept");
		return $sql->result();
	}
	
}
?>