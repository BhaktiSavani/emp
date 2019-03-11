<?php
class dashborad extends CI_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/dbdashborad');
		date_default_timezone_set('Asia/calcutta');
		$login=$this->session->userdata('man_name');
		if($login=='')
		{
			redirect("admin/login");
		}
		
	}
	function index()
	{
		$user=$this->session->userdata('dept_id');
		$data['task_noti']=$this->dbdashborad->getall_tasknoti($user);
		$data['emp_noti']=$this->dbdashborad->getall_empnoti($user);
		$data['leave_noti']=$this->dbdashborad->getall_leavenoti($user);
		$data['alldeptcount']=$this->dbdashborad->getalldeptcount();
		$man=$this->session->userdata('dept_id');
		$data['allempcount']=$this->dbdashborad->getallempcount($man);
		$data['alltaskcount']=$this->dbdashborad->getalltaskcount($man);
		$data['allleavecount']=$this->dbdashborad->getallleavecount($man);
		
		$this->load->view('admin/header');
		$this->load->view('admin/slidebar');
		$this->load->view('admin/dashborad/dashborad',$data);
	}
	function task_noti()
	{
		$user=$this->session->userdata('man_name');
		$data['task_noti']=$this->dbdashborad->getall_tasknoti($user);
		//$this->load->view('admin/header');
		//$this->load->view('admin/slidebar');
		$this->load->view('admin/dashborad/dashborad',$data);
	}
	
	
	
}