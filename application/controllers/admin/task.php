<?php
class task extends CI_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/dbtask');
		$login=$this->session->userdata('man_name');
		if($login=='')
		{
			redirect("admin/login");
		}
	}
	function index()
	{
		$this->form_validation->set_rules('task_name','Name','required');
		$this->form_validation->set_rules('emp_id','Name','required');
		$this->form_validation->set_rules('dept_id','Name','required');
		$this->form_validation->set_rules('man_id','Name','required');
		$this->form_validation->set_rules('task_date','date','required');
		$this->form_validation->set_rules('task_des','name','required');
		$this->form_validation->set_rules('comp_date','date','required');
		$this->form_validation->set_rules('status','status','required');
		
		
		if($this->form_validation->run()==false)
		{
			$this->load->view('admin/header');
			$this->load->view('admin/slidebar');
			$this->load->view('admin/task/add');
		}
		else
		{
			$abc=array('task_name'=>$_POST['task_name'],'emp_id'=>$_POST['emp_id'],'dept_id'=>$_POST['dept_id'],'man_id'=>$_POST['man_id'],'task_date'=>$_POST['task_date'],'task_des'=>$_POST['task_des'],'comp_date'=>$_POST['comp_date'],'status'=>'0');
			//print_r($abc);
			$this->dbtask->insert_data($abc);
			redirect('admin/task/view');
		}
	}
	
	function view()
	{
		 
		$this->load->view('admin/header');
	   	$this->load->view('admin/slidebar');
		$user=$this->session->userdata('dept_id');
		$data['alldata']=$this->dbtask->getalldata($user);
		$this->load->view('admin/task/view',$data);
	}
	function delete($id)
	{
		$this->dbtask->delete($id);
		redirect('admin/task/view');
	}
	function feedback()
	{
		//$this->form_validation->set_rules('man_id','Name','required');
		//$this->form_validation->set_rules('emp_id','Name','required');
		$this->form_validation->set_rules('dept_id','Name','required');
		$this->form_validation->set_rules('task_name','Name','required');
		$this->form_validation->set_rules('comment','name','required');
		$this->form_validation->set_rules('status','status','required');
		
		
		
		if($this->form_validation->run()==false)
		{
			$this->load->view('admin/header');
			$this->load->view('admin/slidebar');
			$this->load->view('admin/feedback/add');
		}
		else
		{
			$abc=array('man_name'=>$this->session->userdata('man_name'),'dept_id'=>$_POST['dept_id'],/*'emp_id'=>$_POST['emp_id']*/'task_name'=>$_POST['task_name'],'comment'=>$_POST['comment'],'status'=>$_POST['status']);
			$this->dbfeedback->insert_data($abc);
			redirect('admin/dashborad/dashborad');
		}
	}
	function edit($id)
	{
		$this->form_validation->set_rules('task_name','Name','required');
		//$this->form_validation->set_rules('emp_id','Name','required');
		//$this->form_validation->set_rules('dept_id','Name','required');
		//$this->form_validation->set_rules('man_id','Name','required');
		$this->form_validation->set_rules('task_date','date','required');
		$this->form_validation->set_rules('task_des','name','required');
		$this->form_validation->set_rules('comp_date','date','required');
		//$this->form_validation->set_rules('status','status','required');
				
		
		if($this->form_validation->run()==false)
		{
			$this->load->view('admin/header');
			$this->load->view('admin/slidebar');
			$data['edit']=$this->dbtask->getedit($id);
			$this->load->view('admin/task/edit',$data);
		}
		else
		{
			$abc=array('task_name'=>$_POST['task_name'],'task_date'=>$_POST['task_date'],'task_des'=>$_POST['task_des'],'comp_date'=>$_POST['comp_date']);
			$this->dbtask->update($abc,$id);
			redirect('admin/task/view');
		}
		
	}
	function details($id)
	{
		    $data['taskdata']=$this->dbtask->gettask($id);
		    $this->load->view('admin/header');
			$this->load->view('admin/slidebar');
			$this->load->view('admin/task/details',$data);
	}
	
	
}
?>