<?php
class dept extends CI_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/dbdept');
		$login=$this->session->userdata('man_name');
		if($login=='')
		{
			redirect("admin/login");
		}
	}
	function index()
	{
		$this->form_validation->set_rules('dept_name','Name','required');
		
		if($this->form_validation->run()==false)
		{
			$this->load->view('admin/header');
			$this->load->view('admin/slidebar');
			$this->load->view('admin/dept/add');
		}
		else
		{
			$abc=array('dept_name'=>$_POST['dept_name']);
			$this->dbdept->insert_data($abc);
			redirect('admin/dept/view');
		}
	}
	
	function view()
	{
		$this->load->view('admin/header');
	    $this->load->view('admin/slidebar');
		$data['alldata']=$this->dbdept->getalldata();
		$this->load->view('admin/dept/view',$data);
	}
	function delete($id)
	{
		$this->dbdept->delete($id);
		redirect('admin/dept/view');
	}
	function edit($id)
	{
		$this->form_validation->set_rules('dept_name','Name','required');
		
		if($this->form_validation->run()==false)
		{
			$this->load->view('admin/header');
			$this->load->view('admin/slidebar');
			$data['edit']=$this->dbdept->getedit($id);
			$this->load->view('admin/dept/edit',$data);
		}
		else
		{
			$abc=array('dept_name'=>$_POST['dept_name']);
			$this->dbdept->update($abc,$id);
			redirect('admin/dept/view');
		}
	}
	function details($id)
	{
		    $data['deptdata']=$this->dbdept->getdeptdata($id);
		    $this->load->view('admin/header');
			$this->load->view('admin/slidebar');
			$this->load->view('admin/dept/deptdata',$data);
	}
	
}
?>