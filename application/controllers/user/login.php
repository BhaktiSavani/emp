<?php
class login extends CI_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('user/dblogin');
		
	}
	function index()
	{
		
		$this->form_validation->set_rules('emp_name','Enter Employee Name','required');
		$this->form_validation->set_rules('password','Enter Password','required');
		$this->form_validation->set_rules('dept_id','Select Employee Type','required');
		if($this->form_validation->run()==false)
		{
			$data['msg']="";
			//$this->load->view('admin/header');
		}
		else
		{
			//echo "login";
			$login=$this->dblogin->chklogin($_POST['emp_name'],$_POST['password'],$_POST['dept_id']);
			if($login)
			{
				
				$this->session->set_userdata(array('emp_name'=>$login->emp_name,'image'=>$login->image,'emp_id'=>$login->emp_id));
				redirect('user/dashborad/');
			}
			else
			{
			        $data['msg']="<div class='alert alert-danger'>Login Invalid</div>";
			}
		
		}
		$this->load->view('user/login',$data);
	}
	
	function signup()
	{
		$this->load->view('sign up');
	}
	
}
?>