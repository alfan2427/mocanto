<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('Mwelcome');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in')==TRUE) {
			# code...
			$data['main_konten']='buyer/home';
			$this->load->view('buyer/template',$data);
		}else{
			$this->load->view('form');
		}
	}

	public function login()
	{
		if ($this->input->post('submit')) {
			# code...
			$this->form_validation->set_rules('user_login', 'username', 'trim|required|min_length[3]|max_length[12]');
			$this->form_validation->set_rules('user_pass', 'password', 'trim|required|min_length[3]|max_length[12]');
			if ($this->form_validation->run() == TRUE) {
				# code...
				if ($this->Mwelcome->cek_user()  == TRUE) {
					# code...
					redirect(base_url('welcome'));
				}else{
					$data['notip'] = validation_errors();
					$data['notip'] = 'Login Gagal !';
					$this->load->view('form',$data);
				}
			} else {
				# code...
				$data['notip'] = 'Login Gagal !';
				$data['notip'] = validation_errors();
				$this->load->view('form',$data);
			}
		}else{
			$data['notip'] = 'Login Gagal !';
			$this->load->view('welcome');
		}
	}

	public function sign_up()
	{
		if($this->input->post('submit'))
			{
			$this->form_validation->set_rules('fullname', 'Nama Lengkap', 'trim|required|min_length[3]|max_length[50]');
			$this->form_validation->set_rules('room', 'Kelas / Kantin', 'trim|required|min_length[3]|max_length[12]');
			$this->form_validation->set_rules('hp', 'No Hp', 'trim|required|min_length[3]|max_length[50]');
			$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|max_length[50]', 'is_unique[user.username]');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|max_length[50]');

			if ($this->form_validation->run()==TRUE)
				{
						if($this->Mwelcome->daftar()==TRUE)
						{
							$data['notif'] = validation_errors();
							$data['notif']='Registrasi Sukses!';
							$this->load->view('form',$data);
						}else{
							$data['notif']='Register Gagal!';
							$this->load->view('form',$data);
						}
				}else{
					$data['notif'] = validation_errors();
					$this->load->view('form', $data);
				}
			}else{
					$this->load->view('form');
			}
	}

	public function logout()
	{
		$data = array(
				'username' => '',
				'password' => FALSE
			);
		$this->session->sess_destroy();
		redirect('welcome');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */