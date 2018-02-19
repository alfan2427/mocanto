<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
			//Do your magic here
			$this->load->model('Mcart');
			//set random
			if($this->session->userdata('random_id') == NULL){
				$array = array(
					'random_id' => random_string($type='numeric' , 20)
				);
				
				$this->session->set_userdata( $array );
			}
			//id_user
			if ($this->session->userdata('id.user') == TRUE) {
				# code...
				$array = array(
					''
				);
			}

		}	

	public function index()
	{
		if ($this->session->userdata('logged_in')==TRUE) {
			# code...
			$data['history'] = $this->Mcart->get_history();
			$data['cart'] = $this->Mcart->get_data()->result();
			$data['main_konten']='buyer/cart';
			$this->load->view('buyer/template',$data);
		}else{
			$this->load->view('form');
		}
	}

	public function add_cart($id_produk, $qty)
	{
		if($this->session->userdata('random_id') != NULL){

			//cari data product

			if ($this->session->userdata('logged_in')==TRUE) {
				# code...
					$array = array(
						'kantinku' => $this->session->userdata('id_kantin')
					);
					
					$this->session->set_userdata( $array );
					$id_produk = $this->uri->segment(3);
					$this->Mcart->add_cart($id_produk, $qty) == TRUE;
			}

			redirect('cart');
		}
	}

	public function checkout(){
		//select semua data di dalam shopping cart
		$data_cart = $this->Mcart->get_data_cart($this->session->userdata('random_id'));
		$i = 0;
		//insert transaksi
		if($this->Mcart->add_transaksi($data_cart) == TRUE){
			$this->session->unset_userdata('kantinku');
				$this->session->unset_userdata('id_kantin');
			redirect('cart');
		}
	}

	public function detail_kantong()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$id = $this->uri->segment(3);
			$data['id'] = $this->Mcart->get_data_id($id);
			$data['kantong'] = $this->Mcart->detail_kantong($id);
			$data['main_konten']='buyer/detil_cart';
			$this->load->view('buyer/template',$data);
		}else{
			redirect('main');
		}
	}

	public function hapus()
	{
		if ($this->session->userdata('logged_in')==TRUE) {
			# code...
			$id_cart = $this->uri->segment(3);
			//cek banyak cart
			$num_cart = $this->Mcart->get_num_cart();
			var_dump($num_cart);
			if ($num_cart == 1) {
				$this->session->unset_userdata('kantinku');
				$this->session->unset_userdata('id_kantin');
			}

			if ($this->Mcart->delete($id_cart)==TRUE) {
				# code...
				redirect('cart');
			}else{
				redirect('cart');
			}
		}
	}

	public function delete()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			$id_cart = $this->uri->segment(3);

			if($this->Mcart->delete($id_cart) == TURE)
			{
				redirect('cart');
			}else {
				redirect('produk');
			}
		}else{
			redirect('welcome');
		}
	}

	public function delete_transaksi()
	{
		if ($this->session->userdata('logged_in')==TRUE) 
		{
			# code...
			$id_transaksi = $this->uri->segment(3);

			if ($this->Mcart->delete_transaksi($id_transaksi)==TRUE) {
				# code...
				redirect('cart');
			}else{
				redirect('cart');
			}
		}
	}

}

/* End of file cart.php */
/* Location: ./application/controllers/cart.php */