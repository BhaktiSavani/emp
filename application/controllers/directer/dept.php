<?php
class dept extends CI_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('directer/dbdept');
		
	}
	function index()
	{
		$this->form_validation->set_rules('dept_name','Name','required');
		
		if($this->form_validation->run()==false)
		{
			$this->load->view('directer/header');
			$this->load->view('directer/slidebar');
			$this->load->view('directer/dept/add');
		}
		else
		{
			$abc=array('dept_name'=>$_POST['dept_name']);
			$this->dbdept->insert_data($abc);
			redirect('directer/dept/view');
		}
	}
	
	function view()
	{
		$this->load->view('directer/header');
	    $this->load->view('directer/slidebar');
		$data['alldata']=$this->dbdept->getalldata();
		$this->load->view('directer/dept/view',$data);
	}
	function delete($id)
	{
		$this->dbdept->delete($id);
		redirect('directer/dept/view');
	}
	function edit($id)
	{
		$this->form_validation->set_rules('dept_name','Name','required');
		
		if($this->form_validation->run()==false)
		{
			$this->load->view('directer/header');
			$this->load->view('directer/slidebar');
			$data['edit']=$this->dbdept->getedit($id);
			$this->load->view('directer/dept/edit',$data);
		}
		else
		{
			$abc=array('dept_name'=>$_POST['dept_name']);
			$this->dbdept->update($abc,$id);
			redirect('directer/dept/view');
		}
	}
	function details($id)
	{
		    $data['deptdata']=$this->dbdept->getdeptdata($id);
		    $this->load->view('directer/header');
			$this->load->view('directer/slidebar');
			$this->load->view('directer/dept/deptdata',$data);
	}
	
}
?>