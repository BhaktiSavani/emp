<?php
class leave extends CI_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('user/dbleave');
		
		$login=$this->session->userdata('emp_name');
		if($login=='')
		{
			redirect("user/login");
		}
		
	}
	function index()
	{
		//$this->form_validation->set_rules('emp_id','Name','required');
		$this->form_validation->set_rules('dept_id','Name','required');
		$this->form_validation->set_rules('detail','name','required');
		$this->form_validation->set_rules('leave_from','date','required');
		$this->form_validation->set_rules('leave_to','date','required');
		$this->form_validation->set_rules('status','status','required');
		
		
		if($this->form_validation->run()==false)
		{
			$this->load->view('user/sliderbar');
			$this->load->view('user/header');
			$this->load->view('user/leave/add');
		}
		else
		{
			$abc=array('emp_name'=>$this->session->userdata('emp_name'),'dept_id'=>$_POST['dept_id'],'detail'=>$_POST['detail'],'leave_from'=>$_POST['leave_from'],'leave_to'=>$_POST['leave_to'],'status'=>'0');
			$this->dbleave->insert_data($abc);
			redirect('user/dashborad');
		}
	}
	
	
	function view()
	{
		$this->load->view('user/sliderbar');
		$this->load->view('user/header');
	 	$data['alldata']=$this->dbattendance->getalldata();
		$this->load->view('user/attendance/view',$data);
	}
	function delete($id)
	{
		$this->dbtask->delete($id);
		redirect('user/attendance/view');
	}
	function edit($id)
	{
		$this->form_validation->set_rules('emp_id','Name','required');
		$this->form_validation->set_rules('dept_id','Name','required');
		$this->form_validation->set_rules('man_id','Name','required');
		$this->form_validation->set_rules('scan_date','date','required');
		$this->form_validation->set_rules('scan_time','name','required');
		$this->form_validation->set_rules('remark','remark','required');
						
		
		if($this->form_validation->run()==false)
		{
			$this->load->view('user/header');
			$this->load->view('user/sliderbar');
			$data['edit']=$this->dbattendance->getedit($id);
			$this->load->view('user/attendance/edit',$data);
		}
		else
		{
			$abc=array('emp_id'=>$_POST['emp_id'],'dept_id'=>$_POST['dept_id'],'man_id'=>$_POST['man_id'],'scan_date'=>$_POST['scan_date'],'scan_time'=>$_POST['scan_time'],'remark'=>$_POST['remark']);
			$this->dbattendance->insert_data($abc);
			redirect('user/attendance/view');
			$this->dbtask->update($abc,$id);
			redirect('user/attendance/view');
		}
		
	}
	function details($id)
	{
		    $data['taskdata']=$this->dbattendance->gettask($id);
			$this->load->view('user/sliderbar');
		    $this->load->view('user/header');
			$this->load->view('user/attendance/details',$data);
			
	}
	
	
}
?>