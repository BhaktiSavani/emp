<?php
class task extends CI_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('user/dbtask');
		$login=$this->session->userdata('emp_name');
		if($login=='')
		{
			redirect("user/login");
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
			$this->load->view('user/sliderbar');
			$this->load->view('user/header');
			$this->load->view('user/task/add');
		}
		else
		{
			$abc=array('task_name'=>$_POST['task_name'],'emp_id'=>$_POST['emp_id'],'dept_id'=>$_POST['dept_id'],'man_id'=>$_POST['man_id'],'task_date'=>$_POST['task_date'],'task_des'=>$_POST['task_des'],'comp_date'=>$_POST['comp_date'],'status'=>$_POST['status']);
			$this->dbtask->insert_data($abc);
			redirect('user/task/view');
		}
	}
	
	function app($id)
	{
		$abc=array('status'=>1);
		$this->dbtask->status_update($abc,$id);
		$this->session->set_flashdata();
		redirect('user/task/view');
	}
	
	function disapp($id)
	{
		$abc=array('status'=>2);
		$this->dbtask->status_update($abc,$id);
		redirect('user/task/view');
	}
	
	function view()
	{
		$this->load->view('user/sliderbar');
		$this->load->view('user/header');
		$user=$this->session->userdata('emp_id');
		$data['alldata']=$this->dbtask->getalldata($user);
		$this->load->view('user/task/view',$data);
	}
	function delete($id)
	{
		$this->dbtask->delete($id);
		redirect('user/task/view');
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
			$this->load->view('user/header');
			$this->load->view('user/sliderbar');
			$data['edit']=$this->dbtask->getedit($id);
			$this->load->view('user/task/edit',$data);
		}
		else
		{
			$abc=array('task_name'=>$_POST['task_name'],'emp_id'=>$_POST['emp_id'],'dept_id'=>$_POST['dept_id'],'man_id'=>$_POST['man_id'],'task_date'=>$_POST['task_date'],'task_des'=>$_POST['task_des'],'comp_date'=>$_POST['comp_date'],'status'=>$_POST['status']);
			$this->dbtask->update($abc,$id);
			redirect('user/task/view');
		}
		
	}
	function details($id)
	{
		    $data['taskdata']=$this->dbtask->gettask($id);
			$this->load->view('user/sliderbar');
		    $this->load->view('user/header');
			$this->load->view('user/task/details',$data);
			
	}
	
	
}
?>