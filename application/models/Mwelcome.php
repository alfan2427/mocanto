<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mwelcome extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function daftar()
	{
		$data = array (
				'id_user'		=> NULL,
				'fullname'	=> $this->input->post('fullname'),
				'no_hp'		=> $this->input->post('hp'),
				'room'		=> $this->input->post('room'),
				'username'	=> $this->input->post('username'),
				'password'	=> md5($this->input->post('password'))
			);
		$this->db->insert('user',$data);

		if($this->db->affected_rows()>0){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function cek_user()
	{
		$username = $this->input->post('user_login');
		$password = $this->input->post('user_pass');

		$query = $this->db->where('username',$username)
						  ->where('password',md5($password))
						  ->get('user');

		if($query->num_rows() >0){
			$data = array (
				'id_user'	=> $query->row()->id_user,
				'hak_akses' => $query->row()->hak_akses,
				'username' 	=> $username,
				'logged_in'	=> TRUE
			);
			$this->session->set_userdata($data);
			return TRUE;
		}else{
			return FALSE;
		}
	}	

}

/* End of file Mwelcome.php */
/* Location: ./application/models/Mwelcome.php */