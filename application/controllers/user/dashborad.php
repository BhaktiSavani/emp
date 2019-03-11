<?php
class dashborad extends CI_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('user/dbdashborad');
		$login=$this->session->userdata('emp_name');
		if($login=='')
		{
			redirect("user/login");
		}
		
	}
	function index()
	{
		$user=$this->session->userdata('emp_name');
		
		$data['leave_noti']=$this->dbdashborad->getall_leavenoti($user);
		$emp=$this->session->userdata('emp_id');
		$data['feedback_noti']=$this->dbdashborad->getall_feedbacknoti($user);
		$emp=$this->session->userdata('emp_id');
		$data['alltaskcount']=$this->dbdashborad->getalltaskcount($emp);
		$this->load->view('user/sliderbar');
		$this->load->view('user/header');
		$this->load->view('user/dashborad/dashborad',$data);
	}
	function leave_noti()
	{
		$user=$this->session->userdata('emp_name');
		$data['leave_noti']=$this->dbdashborad->getall_leavenoti($user);
		$this->load->view('user/sliderbar');
		$this->load->view('user/header');
		$this->load->view('user/dashborad/leave_notification',$data);
	}
	
	
}