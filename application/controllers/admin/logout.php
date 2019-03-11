<?php
class logout extends CI_Controller
{
	function index()
	{
		$this->session->unset_userdata('man_name',$_POST['man_name']);
		redirect('admin/login');	
	}
	
}
?>