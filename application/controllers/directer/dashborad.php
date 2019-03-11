<?php
class dashborad extends CI_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('directer/dbdashborad');
		$login=$this->session->userdata('username');
		if($login=='')
		{
			redirect("directer/login");
		}
		
	}
	function index()
	{
		$data['alldeptcount']=$this->dbdashborad->getalldeptcount();
		$data['allempcount']=$this->dbdashborad->getallempcount();
		$data['alltaskcount']=$this->dbdashborad->getalltaskcount();
		$data['allleavecount']=$this->dbdashborad->getallleavecount();
		$data['allmancount']=$this->dbdashborad->getallmancount();
		$this->load->view('directer/header');
		$this->load->view('directer/slidebar');
		$this->load->view('directer/dashborad/dashborad',$data);
		
	}
	
	
}