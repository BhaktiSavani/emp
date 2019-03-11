<?php
class dbattendance extends CI_Model
{
	function insert_data($a)
	{
		$this->db->insert('man_attendace',$a);
	}
	function getalldata()
	{
		$sql=$this->db->query("select *from man_attendace");
		return $sql->result();
	}
	
	function getempdata($user)
	{
		$sql=$this->db->query("select *from emp_info where dept_id='".$user."'");
		return $sql->result();
	}
	function getempname($id)
	{
		$sql=$this->db->query("select * from emp_info where emp_id='".$id."'");
		return $sql->row();
	}
	function getmanname($id)
	{
		$sql=$this->db->query("select * from man_info where man_id='".$id."'");
		return $sql->row();
	}
	function getmandata($user)
	{
		$sql=$this->db->query("select *from man_info where man_name='".$user."'");
		return $sql->result();
	}
	
	function delete($id)
	{
		$this->db->where('attendance_id',$id);
		$this->db->delete('attendance');
	}
	function getedit($id)
	{
		$sql=$this->db->query("select *from attendance where attendance='".$id."'");
		return $sql->row();
	}
	function update($a,$id)
	{
		$this->db->where('attendance',$id);
		$this->db->update('attendance',$a);
	}
	function getdeptname($id)
	{
		$sql=$this->db->query("select * from dept where dept_id='".$id."'");
		return $sql->row();
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
	function chkatt($user,$sdate)
	{
		$sql=$this->db->query("select *from man_attendace where man_name='".$user."' AND  scan_date='".$sdate."'");
		return $sql->row(); 
	}
	function getattdata($id,$name)
	{
		$sql=$this->db->query("select *from man_attendance where  dept_id='".$id."' AND man_name='".$name."'");
		return $sql->result();
	}
}
?> 