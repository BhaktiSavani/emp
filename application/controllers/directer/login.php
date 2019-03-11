<?php
class login extends CI_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('directer/dblogin');
		
	}
	function index()
	{
		
		$this->form_validation->set_rules('username','Enter Username','required');
		$this->form_validation->set_rules('password','Enter Password','required');
		
		if($this->form_validation->run()==false)
		{
			$data['msg']="";
			//$this->load->view('admin/header');
		}
		else
		{
			//echo "login";
			$login=$this->dblogin->chklogin($_POST['username'],$_POST['password']);
			if($login)
			{
				
				$this->session->set_userdata(array('username'=>$login->username,'login_id'=>$login->login_id));
				redirect('directer/dashborad');
			}
			else
			{
				 $data['msg']="<div class='alert alert-danger'>Login Invalid</div>";
			}
		
		}
		$this->load->view('directer/login',$data);
	}
	
	function signup()
	{
		$this->load->view('sign up');
	}
	
}
?>