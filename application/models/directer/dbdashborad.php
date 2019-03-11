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
	function getalltaskcount()
	{
		$sql=$this->db->query("select *from task");
		return $sql->num_rows();
	}
	function getallmancount()
	{
		$sql=$this->db->query("select *from man_info");
		return $sql->num_rows();
	}
	function getallleavecount()
	{
		$sql=$this->db->query("select *from man_leave");
		return $sql->num_rows();
	}
}