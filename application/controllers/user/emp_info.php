<?php
class emp_info extends CI_controller
{
	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/calcutta');
		$this->load->model('user/dbemp_info');
		
	}
	function index()
	{
		$this->form_validation->set_rules('emp_name','Employee Name','required |is_unique[emp_info.emp_name]');
		$this->form_validation->set_rules('dept_id','dept_id','required');
		$this->form_validation->set_rules('password','password','required');
		$this->form_validation->set_rules('DOB','DOB','required');
		$this->form_validation->set_rules('age','age','required');
		$this->form_validation->set_rules('gender','gender','required');
		$this->form_validation->set_rules('address','address','required');
		$this->form_validation->set_rules('contact_no','contact_no','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('qualification','qualification','required');
		$this->form_validation->set_rules('experince','experince','required');
		//$this->form_validation->set_rules('salary','salary','required');
		//$this->form_validation->set_rules('image','image','required');
		//$this->form_validation->set_rules('DOJ','DOJ','required');
		
		if($this->form_validation->run()==false)
		{
			
			$this->load->view('user/emp_info/add');
		}
		else
		{
			$img['upload_path']='emp_img';
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
			
			$abc=array('emp_name'=>$_POST['emp_name'],'dept_id'=>$_POST['dept_id'],'password'=>$_POST['password'],'DOB'=>$_POST['DOB'],'age'=>$_POST['age'],'gender'=>$_POST['gender'],'address'=>$_POST['address'],'contact_no'=>$_POST['contact_no'],'email'=>$_POST['email'],'qualification'=>$_POST['qualification'],'experince'=>$_POST['experince'],'DOJ'=>date('Y-m-d:H:i:s'),'image'=>$file);
			$this->dbemp_info->insert_data($abc,$file);
			redirect('user/login');
			 //print_r($abc);
	    }
	}
	
	function view()
	{
		$this->load->view('user/sliderbar');
		$this->load->view('user/header');
	   
		$data['alldata']=$this->dbemp_info->getalldata();
		$this->load->view('user/emp_info/view',$data);
	}
	
	
	function edit($id)
	{
		$this->form_validation->set_rules('emp_name','Name','required');
		//$this->form_validation->set_rules('dept_id','Name','required');
		//$this->form_validation->set_rules('password','password','required');
		$this->form_validation->set_rules('DOB','DOB','required');
		$this->form_validation->set_rules('age','age','required');
		$this->form_validation->set_rules('gender','gender','required');
		$this->form_validation->set_rules('address','address','required');
		$this->form_validation->set_rules('contact_no','contact_no','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('qualification','qualification','required');
		$this->form_validation->set_rules('experince','experince','required');
		//$this->form_validation->set_rules('salary','salary','required');
		//$this->form_validation->set_rules('image','image','required');
		$this->form_validation->set_rules('DOJ','DOJ','required');		

		
		if($this->form_validation->run()==false)
		{
			$this->load->view('user/sliderbar');
			$this->load->view('user/header');
			$data['edit']=$this->dbemp_info->getedit($id);
			$this->load->view('user/emp_info/edit',$data);
		}
		else
		{
			$img['upload_path']='emp_img';
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
			
			$abc=array('emp_name'=>$_POST['emp_name'],/*'dept_id'=>$_POST['dept_id'],*/'DOB'=>$_POST['DOB'],'age'=>$_POST['age'],'gender'=>$_POST['gender'],'address'=>$_POST['address'],'contact_no'=>$_POST['contact_no'],'email'=>$_POST['email'],'qualification'=>$_POST['qualification'],'experince'=>$_POST['experince'],'DOJ'=>$_POST['DOJ']);
			
			
			$this->dbemp_info->update($abc,$id);
			redirect('user/dashborad/dashborad');
		}
	}
	
	function image_edit($id)
	{
                    
			$data['edit']=$this->dbemp_info->getedit($id);
			$img['upload_path']='emp_img';
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
			
			$abc=array('image'=>$file);
			
			
			$this->dbemp_info->update($abc,$id);
			//redirect('user/task/view');
			$ids=$this->uri->segment(7);
			header("location:http://localhost/emp/index.php/user/emp_info/edit/$id");
		
	}
	
	
	function details($id)
	{
		    $data['empdata']=$this->dbemp_info->getempdata($id);
			$this->load->view('admin/sliderbar');
		    $this->load->view('admin/header');
			$this->load->view('admin/emp_info/details',$data);
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
			$abc=$this->dbemp_info->chkpass($_POST['emp_name'],$_POST['password']);
			if($abc)
			{
				$name=$_POST['emp_name'];
				$pass=$_POST['newpass'];
				$this->dbemp_info->passchange($pass,$name);
				$data['msg']='Password Change';
			}
			else
			{
				$data['msg']='Invalid';
			}
			
		}
		$this->load->view('user/sliderbar');
		$this->load->view('user/header');
		$this->load->view('user/emp_info/password',$data);
	}
	function profile()
	{
		if($this->form_validation->run()==false)
		{
			$this->load->view('user/sliderbar');
			$this->load->view('user/header');
			$data['edit']=$this->dbemp_info->getedit($id);
			$this->load->view('user/emp_info/profile',$data);
		}
		else
		{
			$img['upload_path']='emp_img';
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
			
		}
	}
	
	
}
?>