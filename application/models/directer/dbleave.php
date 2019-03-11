<?php
class dbleave extends CI_Model
{
	//apply for leave
	function insert_data($a)
	{
		$this->db->insert('man_leave',$a);
	}
	//get manager leave list
	function getalldata()
	{
		$sql=$this->db->query("select *from man_leave");
		return $sql->result();
	}
	
	function getempdata($user)
	{
		$sql=$this->db->query("select *from emp_info where emp_name='".$user."'");
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
	public function add_message()
 {
  $data=array(
     'username'=>$this->input->post('user_name'),
     'message'=>$this->input->post('message'),
     );
  $this->db->insert('message',$data);
 }
 
function status_update($abc,$id)
{
	$this->db->where('leave_id',$id);
	$this->db->update('man_leave',$abc);
}
 
}
?> 