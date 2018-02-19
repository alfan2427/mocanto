<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
			//Do your magic here
			$this->load->model('Mtoko');
		}	

	public function index()
	{
		if ($this->session->userdata('logged_in')==TRUE) {
			# code...
			$data['hak'] = $this->Mtoko->get_hak_akses();
			$data['toko']= $this->Mtoko->get_transaksi()->result();
			$data['history']= $this->Mtoko->get_histori_transaksi()->result();
			$data['main_konten']='seller/home';
			$this->load->view('seller/template',$data);
		}else{
			$this->load->view('form');
		}
	}

	public function update_status($id_transaksi)
	{
		if ($this->session->userdata('logged_in')==TRUE) {
			if($this->Mtoko->update_status($id_transaksi) == TRUE){
				$data['main_konten']='seller/home';
				redirect('toko');
			}
		}else{
			redirect('welcome');
		}
	}

	public function update_pesanan($id)
	{
		if ($this->session->userdata('logged_in')==TRUE) {
			# code...
			if ($this->Mtoko->update_pesanan($id)==TRUE) {
				# code...
				$data['main_konten']='seller/detail_pesanan';
				redirect('toko');
			}
		}else{
			redirect('welcome');
		}
	}

	public function detail_pesanan()
	{
		if ($this->session->userdata('logged_in')==TRUE) {
			# code...
			$id = $this->uri->segment(3);
			$data['id'] = $this->Mtoko->get_data_id($id);
			$data['pesanan'] = $this->Mtoko->get_detail_pesanan($id);
			$data['main_konten']='seller/home_detail';
			$this->load->view('seller/template',$data);
		}else{
			redirect('welcome');
		}
	}

	public function detail_riwayat_pesanan()
	{
		if ($this->session->userdata('logged_in')==TRUE) {
			# code...
			$id = $this->uri->segment(3);
			$data['id'] = $this->Mtoko->get_data_by_id($id);
			$data['pesanan'] = $this->Mtoko->get_detail_riwayat($id);
			$data['main_konten']='seller/riwayat_home';
			$this->load->view('seller/template',$data);
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

			if ($this->Mtoko->delete_transaksi($id_transaksi)==TRUE) {
				# code...
				redirect('toko');
			}else{
				redirect('toko');
			}
		}
	}

	public function upload_identitas()
	{
		$config['upload_path'] = './uploads/identitas';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']  = '20000';
		
		$this->load->library('upload');
		$this->upload->initialize($config);
		
		if ($this->upload->do_upload('identitas')){
			if ($this->Mtoko->update_identitas($this->upload->data())) {
				# code...
				$data['notif'] = "File Berhasil Di Upload , Logout Terlebih Dahulu Untuk Memproses...";
				$data['main_konten'] = 'seller/home';
				$data['hak'] = $this->Mtoko->get_hak_akses();
				$this->load->view('seller/template',$data);
			
			}else{
				$data['notif'] = 'File Gagal di Upload';
				$data['main_konten'] = 'seller/home';
				$this->load->view('seller/template',$data);
			}
		}else{
			$data['notif'] = $this->upload->display_errors();
			$data['main_konten'] = 'seller/home';
			$this->load->view('seller/template',$data);
			
		}
	}

}

/* End of file toko.php */
/* Location: ./application/controllers/toko.php */