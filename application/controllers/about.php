<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}	

	public function index()
	{
		if ($this->session->userdata('logged_in')==TRUE) {
			# code...
			$data['main_konten']='buyer/profile';
			$this->load->view('buyer/template',$data);
		}else{
			$this->load->view('form');
		}
	}

}

/* End of file about.php */
/* Location: ./application/controllers/about.php */