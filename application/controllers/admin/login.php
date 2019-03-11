<?php
class login extends CI_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/dblogin');
		
	}
	function index()
	{
		
		$this->form_validation->set_rules('man_name','Enter Username','required');
		$this->form_validation->set_rules('password','Enter Password','required');
		$this->form_validation->set_rules('dept_id','Enter Password','required');
		if($this->form_validation->run()==false)
		{
			$data['msg']="";
			//$this->load->view('admin/header');
		}
		else
		{
			//echo "login";
			$login=$this->dblogin->chklogin($_POST['man_name'],$_POST['password'],$_POST['dept_id']);
			if($login)
			{
				
				$this->session->set_userdata(array('man_name'=>$login->man_name,'image'=>$login->image,'man_id'=>$login->man_id,'dept_id'=>$login->dept_id));
				redirect('admin/dashborad');
			}
			
			else
			{
				$data['msg']="<div class='alert alert-danger'>Login Invalid</div>";
			}
		
		}
		$this->load->view('login_form',$data);
	}
	
	function signup()
	{
		$this->load->view('sign up');
	}
	
}
?>