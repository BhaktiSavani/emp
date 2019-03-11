<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class sample extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  $this->load->library('form_validation');
  $this->load->model('user/home_model');
  date_default_timezone_set('Asia/calcutta');
  $login=$this->session->userdata('emp_name');
		if($login=='')
		{
			redirect("user/login");
		}
		
 }
 public function index()
 {
  $this->load->helper('captcha');
  $this->form_validation->set_rules('captcha','Name','required|callback_checkcaptcha');
  $this->form_validation->set_rules('dept_id','Name','required');
  $this->form_validation->set_rules('remark','remark','required');
  //$this->form_validation->set_rules('scan_date','remark','required');
 // $this->form_validation->set_rules('emp_name','remark','required');
   
   if($this->form_validation->run()==false)
		{
			
  $vals = array('img_path' => './captcha/','img_url' => 'http://localhost/emp/captcha/');
  $cap = create_captcha($vals);
  $data = array('captcha_time' => $cap['time'],'ip_address' => $this->input->ip_address(),'word' => $cap['word']);
  $this->session->set_userdata($data);
  $data['cap_img']=$cap['image'];
  $this->load->view('user/sliderbar');
  $this->load->view('user/header');
 $this->load->view('user/attendance/sampleview',$data); 
 }
 else
 {
	 $alldata=$this->home_model->chkatt($_POST['emp_name'],$_POST['scan_date']);
	 if(empty($alldata))
	 {
	 $abc=array('emp_name'=>$this->session->userdata('emp_name'),'dept_id'=>$_POST['dept_id'],'scan_date'=>$_POST['scan_date'],'remark'=>$_POST['remark'],'captcha'=>$_POST['captcha']);
		$this->home_model->insert_data($abc);
	     redirect('user/sample');
		 // print_r($abc);
	 }
	 else
	 {
		 $abcd='error';
		 print_r($abcd);
		 //redirect('user/error');
	 }
			
 }
 
 }
 
 public function checkcaptcha()
 {
  $expiration = time()-7200; // Two hour limit
  $cap=$this->input->post('captcha');
  if($this->session->userdata('word')== $cap 
   AND $this->session->userdata('ip_address')== $this->input->ip_address()
   AND $this->session->userdata('captcha_time')> $expiration)
  {
   return true;
  }
  else{
   $this->form_validation->set_message('checkcaptcha','Security number does not match.');
   return false;
  }
 }
 
 public function add_message()
 {
  $this->load->library('form_validation');
  // field name, error message, validation rules
  $this->form_validation->set_rules('emp_name', 'User Name', 'trim|required|min_length[3]');
  $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');
  $this->form_validation->set_rules('captcha', 'Security Code', 'trim|required|callback_check_captcha');
  if($this->form_validation->run() == FALSE)
  {
   $this->index();
  }
  else
  {
   $this->home_model->add_message();
  }
 }
 
 
}
?>