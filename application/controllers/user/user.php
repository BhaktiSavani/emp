<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Controller {

	public function index()
	{
		$this->load->view('user/sliderbar');
		$this->load->view('user/header');
		$this->load->view('user/table');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */