<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class home_model extends CI_Model {
 
 
 public function insert_data($data)
 {
  $this->db->insert('attendance',$data);
 }
	function getdeptname($id)
	{
		$sql=$this->db->query("select * from dept where dept_id='".$id."'");
		return $sql->row();
	}
	function getempdata($user)
	{
		$sql=$this->db->query("select *from emp_info where emp_name='".$user."'");
		return $sql->result();
	}
	
	function chkatt($user,$sdate)
	{
		$sql=$this->db->query("select *from attendance where emp_name='".$user."' AND  scan_date='".$sdate."'");
		return $sql->row(); 
	}
	
}
?>