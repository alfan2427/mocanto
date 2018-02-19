<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('Madmin');
	}

	public function index()
	{
		if ($this->session->userdata('masuk')==TRUE) {
			# code...
			redirect(base_url('admin/home'));
		}else{
			$this->load->view('loginadmin');
		}
	}

	public function login()
	{
		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			if ($this->form_validation->run() == TRUE) {
				if ($this->Madmin->cek_user()==TRUE) {
					redirect(base_url('admin/home'));
				}else{
					$data['notif'] = 'Login Gagal!';
					$this->load->view('loginadmin' , $data);
				}
			}else{
				# code...
				$data['notif'] = 'Login Gagal!';
				$this->load->view('loginadmin' , $data);
			}
		}else{
			$data['notif'] = 'Login Gagal!!';
			$this->load->view('loginadmin',$data);
		}
	}

	public function home()
	{
		if ($this->session->userdata('masuk') == TRUE) {
			# code...
			$data['user'] = $this->Madmin->get_user();
			$data['produk'] = $this->Madmin->get_produk();
			$data['transaksi'] = $this->Madmin->get_transaksi();
			$this->load->view('adminview',$data);
		}else{
			redirect(base_url('admin'));
		}
	}

	public function logout()
	{
		$data = array(
				'username' => '',
				'password' => FALSE
			);
		$this->session->sess_destroy();
		redirect('admin');
	}

	public function permohonan()
	{
		if ($this->session->userdata('masuk')==TRUE) {
			# code...
			$data['permohonan'] = $this->Madmin->permohonan();
			$this->load->view('permohonan',$data);
		}else{
			redirect(base_url('admin'));
		}
	}

	public function update_hak($id_user)
	{
		if ($this->session->userdata('masuk')==TRUE) {
			if($this->Madmin->update_hak($id_user) == TRUE){
				$data['main_konten']='permohonan';
				redirect('admin/permohonan');
			}
		}else{
			redirect('welcome');
		}
	}

	public function update_hak_1($id_user)
	{
		if ($this->session->userdata('masuk')==TRUE) {
			if($this->Madmin->update_hak_1($id_user) == TRUE){
				$data['main_konten']='permohonan';
				redirect('admin/permohonan');
			}
		}else{
			redirect('welcome');
		}
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */