<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
			//Do your magic here
			$this->load->model('Mshop');
		}	

	public function index()
	{
		if ($this->session->userdata('logged_in')==TRUE) {
			# code...
			
			$data['kantin'] = $this->Mshop->get_data_kantin();
			$data['main_konten']='buyer/kantin';
			$this->load->view('buyer/template',$data);
		}else{
			$this->load->view('form');
		}
	}

	public function kantin()
	{
		if ($this->session->userdata('logged_in')==TRUE) {
			# code...
			$array = array(
				'id_kantin' => $this->uri->segment(3)
			);

			$this->session->set_userdata($array);
			$id = $this->uri->segment(3);
			$data['id'] = $this->Mshop->get_menu_by_id($id);
			$data['produk'] = $this->Mshop->get_data($id);
			$data['main_konten'] = 'buyer/shop';

			if ($this->session->userdata('id_kantin')==$this->uri->segment(3)) {
				# code...
				$this->load->view('buyer/template',$data);
			}else{
				redirect('shop');
			}

		}else{
			redirect(base_url('welcome'));
		}
	}

}


/* End of file shop.php */
/* Location: ./application/controllers/shop.php */