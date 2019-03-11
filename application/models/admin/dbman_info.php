<?php
class dbman_info extends CI_Model
{
	function insert_data($a)
	{
		$this->db->insert('man_info',$a);
	}
	function getalldata()
	{
		$sql=$this->db->query("select *from man_info");
		return $sql->result();
	}
	function delete($id)
	{
		$this->db->where('man_id',$id);
		$this->db->delete('man_info');
	}
	function getedit($id)
	{
		$sql=$this->db->query("select *from man_info where man_id='".$id."'");
		return $sql->row();
	}
	function chkpass($user,$pass)
	{
		$sql=$this->db->query("select *from man_info where man_name='".$user."' AND password='".$pass."'");
		return $sql->row();
	}
	function passchange($pass,$name)
	{
		$sql=$this->db->query("UPDATE man_info SET password='".$pass."' where man_name='".$name."'");
		return $sql;
	}
	function update($a,$id)
	{
		$this->db->where('man_id',$id);
		$this->db->update('man_info',$a);
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
	
}
?> 