<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Madmin extends CI_Model {

	public function cek_user()
	{
			# code...
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$query = $this->db->where('user',$username)	
					  	  ->where('password',$password)
					  	  ->get('admin');

		if($query->num_rows() >0){
			$data = array (
				'id_user'	=> $query->row()->id_user,
				'user' 	=> $username,
				'masuk'	=> TRUE
			);
			$this->session->set_userdata($data);
				return TRUE;
		}else{
				return FALSE;
		}		  	

	}

	public function get_user()
	{
		return $this->db->get('user')
						->result();
	}

	public function get_produk()
	{
		return $this->db->query("SELECT * FROM produk JOIN user ON produk.id_user= user.id_user")
						->result();
	}

	public function get_transaksi()
	{
		return $this->db->query("SELECT transaksi.id_transaksi, transaksi.tgl_transaksi, transaksi.id_user as pembeli , produk.id_user as penjual, transaksi.status, user.fullname FROM transaksi 
								 JOIN detail_transaksi ON transaksi.id_transaksi = detail_transaksi.id_transaksi
								 JOIN produk ON detail_transaksi.id_produk = produk.id_produk
								 JOIN user ON user.id_user = transaksi.id_user")
						->result();
	}

	public function permohonan()
	{
		return $this->db->query("SELECT * FROM file_identitas JOIN user ON file_identitas.id_user = user.id_user WHERE user.hak_akses = 'pembeli' AND user.status_hak = 'Permintaan Anda Sedang Di Proses'")
						->result();
	}

	public function update_hak($id_user)
	{
		$data = array(
						'hak_akses' 	=> 'penjual',
						'status_hak'	=> ''
					);
		$this->db->where('id_user', $id_user)
				 ->update('user', $data);

		if($this->db->affected_rows() >0){
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function update_hak_1($id_user)
	{
		$data = array(
						'status_hak' => 'Permintaan Anda Di Tolak, Mohon Kirim Ulang'
					);
		$this->db->where('id_user', $id_user)
				 ->update('user', $data);

		if($this->db->affected_rows() >0){

			$this->db->where('id_user',$id_user)->delete('file_identitas');
			return TRUE;
		} else {
			return FALSE;
		}
	}

}

/* End of file Madmin.php */
/* Location: ./application/models/Madmin.php */