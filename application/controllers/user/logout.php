<?php
class logout extends CI_Controller
{
	function index()
	{
		$this->session->unset_userdata('emp_name',$_POST['emp_name']);
		redirect('user/login');	
	}
	
}
?>