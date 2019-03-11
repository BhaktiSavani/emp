<?php
class man_info extends CI_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('directer/dbman_info');
		$login=$this->session->userdata('username');
		if($login=='')
		{
			redirect("directer/login");
		}
		
	}
	function index()
	{
		$this->form_validation->set_rules('man_name','Name','required');
		$this->form_validation->set_rules('dept_id','Name','required');
		$this->form_validation->set_rules('password','password','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('gender','gender','required');
		$this->form_validation->set_rules('contact_no','contact_no','required');
		
		
		if($this->form_validation->run()==false)
		{
			//$this->load->view('admin/header');
			//$this->load->view('admin/slidebar');
			$this->load->view('admin/man_info/add');
		}
		else
		{
			$img['upload_path']='man_img';
			$img['allowed_types']='gif|png|jpeg|jpg';
			$this->load->library('upload',$img);
			if(!$this->upload->do_upload('image'))
			{
				$file='';
			}
			else
			{
				$file=$this->upload->file_name;
			}
			
			
			$abc=array('man_name'=>$_POST['man_name'],'dept_id'=>$_POST['dept_id'],'password'=>$_POST['password'],'gender'=>$_POST['gender'],'contact_no'=>$_POST['contact_no'],'email'=>$_POST['email'],'image'=>$file);
			$this->dbman_info->insert_data($abc);
			redirect('admin/login');
		}
	}
	
	function view()
	{
		$this->load->view('directer/header');
	    $this->load->view('directer/slidebar');
		$data['alldata']=$this->dbman_info->getalldata();
		$this->load->view('directer/man_info/view',$data);
	}
	function delete($id)
	{
		$this->dbman_info->delete($id);
		redirect('directer/man_info/view');
	}
	function edit($id)
	{
		$this->form_validation->set_rules('man_name','Name','required');
		//$this->form_validation->set_rules('man_id','Name','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('gender','gender','required');
		$this->form_validation->set_rules('contact_no','contact_no','required');
		
		
		if($this->form_validation->run()==false)
		{
			$this->load->view('directer/header');
			$this->load->view('directer/slidebar');
			$data['edit']=$this->dbman_info->getedit($id);
			
			$this->load->view('directer/man_info/edit',$data);
		}
		else
		{
			$img['upload_path']='man_img';
			$img['allowed_types']='gif|png|jpeg|jpg';
			$this->load->library('upload',$img);
			if(!$this->upload->do_upload('image'))
			{
				$file=$_POST['old_img'];
			}
			else
			{
				$file=$this->upload->file_name;
			}
			
			$abc=array('man_name'=>$_POST['man_name'],/*'man_id'=>$_POST['man_id']*/'gender'=>$_POST['gender'],'contact_no'=>$_POST['contact_no'],'email'=>$_POST['email'],'image'=>$file);
			$this->dbman_info->update($abc,$id);
			redirect('directer/man_info/view');
		}
	}
	function changepassword()
	{
		
		$this->form_validation->set_rules('password','password','required');
		$this->form_validation->set_rules('newpass','password','required|matches[conpass]');
		$this->form_validation->set_rules('conpass','password','required');
		if($this->form_validation->run()==false)
		{
			$data['msg']='';
		}
			else
			{
			
			$abc=$this->dbman_info->chkpass($_POST['man_name'],$_POST['password']);
			if($abc)
			{
				$name=$_POST['man_name'];
				$pass=$_POST['newpass'];
				$this->dbman_info->passchange($pass,$name);
				$data['msg']='Password Change';
			}
			else
			{
				$data['msg']='Invalid';
			}
			
		}
		$this->load->view('admin/header');
			$this->load->view('admin/slidebar');
			
		$this->load->view('admin/man_info/password',$data);
	}
	
	
}
?>