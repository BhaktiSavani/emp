<?php
class dblogin extends CI_model
{
	function chklogin($user,$pass)
	{
		$sql=$this->db->query("select *from login where username='".$user."' AND password='".$pass."'");
		return $sql->row(); 
	}
	
	function getalldept()
	{
		$sql=$this->db->query("select *from dept");
		return $sql->result();
	}
	
}
?>