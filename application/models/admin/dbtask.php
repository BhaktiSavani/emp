<?php
class dbtask extends CI_Model
{
	function insert_data($a)
	{
		$this->db->insert('task',$a);
	}
	function getalldata($user)
	{
		$sql=$this->db->query("select *from task where dept_id='".$user."'");
		return $sql->result();
	}
	function delete($id)
	{
		$this->db->where('task_id',$id);
		$this->db->delete('task');
	}
	function getedit($id)
	{
		$sql=$this->db->query("select *from task where task_id='".$id."'");
		return $sql->row();
	}
	function getempdata($user)
	{
		$sql=$this->db->query("select *from emp_info where dept_id='".$user."'");
		return $sql->result();
	}
	function update($a,$id)
	{
		$this->db->where('task_id',$id);
		$this->db->update('task',$a);
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
	//get dept name
	function getmandata($user)
	{
		$sql=$this->db->query("select *from man_info where man_name='".$user."'");
		return $sql->result();
	}
	
	function getalldept()
	{
		$sql=$this->db->query("select *from dept");
		return $sql->result();
	}
	function getallman()
	{+
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
}
?> 