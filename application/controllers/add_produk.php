<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_produk extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
			//Do your magic here
			$this->load->model('Madd_produk');
			$this->load->model('Mproduk');
		}	

	public function index()
	{
		if ($this->session->userdata('logged_in')==TRUE) {
			# code...
			$data['main_konten']='seller/add_produk';
			$this->load->view('seller/template',$data);
		}else{
			$this->load->view('form');
		}
	}

	public function produk()
	{
		if ($this->session->userdata('logged_in')==TRUE) {
			if ($this->input->post('submit')) {
				# code...
					# code...
					$config = array();
					$config['upload_path'] = './uploads/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$config['max_size']  = '20000';
					$config['max_width']  = '30000';
					$config['max_height']  = '20000';
					
					$this->load->library('upload',$config);
					$this->upload->initialize($config);

					if($this->upload->do_upload('foto'))
					{
						if ($this->Madd_produk->insert($this->upload->data()) == TRUE) 
						{
							$data['main_konten'] = 'seller/add_produk';
							$data['notif'] = 'Add success!';
							$this->load->view('seller/template', $data);
						}else{
							$data['main_konten'] = 'seller/add_produk';
							$data['notif'] = 'Fail to add data.....';
							$this->load->view('seller/template', $data);
						}
					}else{
						$data['main_konten'] = 'seller/add_produk';
							$data['notif'] = 'Fail to add data!!!';
							$this->load->view('seller/template', $data);
					}
				
			}else{
				$data['main_konten'] = 'seller/add_produk';
				$data['notif'] = 'Fail to add dataaa...';
				$this->load->view('seller/template', $data);
			}
		}
	}

}

/* End of file add_produk.php */
/* Location: ./application/controllers/add_produk.php */