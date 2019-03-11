<?php
class logout extends CI_Controller
{
	function index()
	{
		$this->session->unset_userdata('username',$_POST['username']);
		redirect('directer/login');	
	}
	
}
?>