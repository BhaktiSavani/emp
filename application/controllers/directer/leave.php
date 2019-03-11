<?php
class leave extends CI_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('directer/dbleave');
		$login=$this->session->userdata('username');
		if($login=='')
		{
			redirect("directer/login");
		}
		
	}

	function index()
	{
		$this->form_validation->set_rules('dept_id','Name','required');
		$this->form_validation->set_rules('detail','name','required');
		$this->form_validation->set_rules('leave_from','date','required');
		$this->form_validation->set_rules('leave_to','date','required');
		$this->form_validation->set_rules('status','status','required');
		
		
		
		if($this->form_validation->run()==false)
		{
			$this->load->view('admin/header');
			$this->load->view('admin/slidebar');
			$this->load->view('admin/leave/add');
		}
		else
		{
			$abc=array('man_name'=>$this->session->userdata('man_name'),'dept_id'=>$_POST['dept_id'],'detail'=>$_POST['detail'],'leave_from'=>$_POST['leave_from'],'leave_to'=>$_POST['leave_to'],'status'=>$_POST['status']);
			$this->dbleave->insert_data($abc);
			redirect('admin/leave/');
		}
	}
	
	
	function app($id)
	{
		$abc=array('status'=>1);
		$this->dbleave->status_update($abc,$id);
		$this->session->set_flashdata();
		redirect('directer/leave/view');
	}
	
	function disapp($id)
	{
		$abc=array('status'=>2);
		$this->dbleave->status_update($abc,$id);
		redirect('directer/leave/view');
	}
	
	function view()
	{
		$this->load->view('directer/header');
	    $this->load->view('directer/slidebar');
		$data['alldata']=$this->dbleave->getalldata();
		$this->load->view('directer/leave/view',$data);
	}
	function delete($id)
	{
		$this->dbtask->delete($id);
		redirect('admin/leave/view');
	}
	function edit($id)
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
			$data['edit']=$this->dbtask->getedit($id);
			$this->load->view('admin/task/edit',$data);
		}
		else
		{
			$abc=array('task_name'=>$_POST['task_name'],'emp_id'=>$_POST['emp_id'],'dept_id'=>$_POST['dept_id'],'man_id'=>$_POST['man_id'],'task_date'=>$_POST['task_date'],'task_des'=>$_POST['task_des'],'comp_date'=>$_POST['comp_date'],'status'=>$_POST['status']);
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