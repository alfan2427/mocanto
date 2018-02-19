<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
			//Do your magic here
			$this->load->model('Mproduk');
		}

	public function index()
	{
		if ($this->session->userdata('logged_in')==TRUE) {
			# code...
			$data['produk'] = $this->Mproduk->get_data()->result();
			$data['main_konten']='seller/produk';
			$this->load->view('seller/template',$data);
		}else{
			$this->load->view('form');
		}
	}

	public function hapus()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			$id_produk = $this->uri->segment(3);

			if($this->Mproduk->delete($id_produk) == TURE)
			{
				redirect('produk');
			}else {
				redirect('produk');
			}
		}else{
			redirect('welcome');
		}
	}

	public function stok($id_produk, $status)
	{
		if ($this->session->userdata('logged_in')==TRUE) {
			if($this->Mproduk->update_stok($id_produk, $status) == TRUE){
				redirect('produk');
			}
		}else{
			redirect('welcome');
		}
	}

	

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */