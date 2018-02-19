<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtoko extends CI_Model {

	
	public function get_hak_akses()
	{
		return $this->db->query("SELECT * FROM user where id_user = ".$this->session->userdata('id_user').";")
						->result();
	}

	public function get_transaksi()
	{
		return $this->db->query("SELECT transaksi.id_transaksi, transaksi.tgl_transaksi, user.fullname, user.no_hp FROM transaksi 
												JOIN detail_transaksi ON transaksi.id_transaksi = detail_transaksi.id_transaksi
												JOIN user ON transaksi.id_user = user.id_user
												JOIN produk ON produk.id_produk = detail_transaksi.id_produk
												WHERE produk.id_user = ".$this->session->userdata('id_user')." AND transaksi.status = 'sedang diproses'");
	}

	public function get_histori_transaksi()
	{	
		
		return $this->db->query("SELECT transaksi.id_transaksi, transaksi.tgl_transaksi, transaksi.id_user, user.fullname, transaksi.status, produk.harga, detail_transaksi.qty FROM detail_transaksi JOIN transaksi ON detail_transaksi.id_transaksi = transaksi.id_transaksi
																JOIN user ON user.id_user = transaksi.id_user 
																JOIN produk ON produk.id_produk = detail_transaksi.id_produk 
																WHERE produk.id_user = ".$this->session->userdata('id_user')." AND transaksi.status = 'Terkirim'");
	}

	public function get_detail_pesanan($id)
	{
		return $this->db->query("SELECT * FROM detail_transaksi JOIN transaksi ON detail_transaksi.id_transaksi = transaksi.id_transaksi
																join produk ON detail_transaksi.id_produk = produk.id_produk
																JOIN user ON transaksi.id_user = user.id_user
																where detail_transaksi.id_transaksi =".$id." AND produk.id_user = '".$this->session->userdata('id_user')."' ")
						->result();
	}

	public function get_detail_riwayat($id)
	{
		return $this->db->query("SELECT * FROM detail_transaksi JOIN transaksi ON detail_transaksi.id_transaksi = transaksi.id_transaksi
																join produk ON detail_transaksi.id_produk = produk.id_produk
																JOIN user ON transaksi.id_user = user.id_user
																where detail_transaksi.id_transaksi =".$id)
						->result();
	}

	public	 function	 update_status($id_transaksi)
	{
		$data = array(
						'status' => 'Terkirim'
					);
		$this->db->where('id_transaksi', $id_transaksi)
				 ->update('transaksi', $data);

		if($this->db->affected_rows() >0){
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public	 function	 update_pesanan($id)
	{
		$data = array(
						'qty' => ''
					);
		$this->db->where('id', $id)
				 ->update('detail_transaksi', $data);

		if($this->db->affected_rows() >0){
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_data_id($id)
	{
		return $this->db->where('id_transaksi' , $id)
						->get('transaksi')
						->row();
	}

	public function get_data_by_id($id)
	{
		return $this->db->where('id_transaksi' , $id)
						->get('transaksi')
						->row();
	}

	public function delete_transaksi($id_transaksi)
	{
		$this->db->where('id_transaksi', $id_transaksi)
				 ->delete('transaksi');
		if ($this->db->affected_rows()>0) {
			# code...
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function update_identitas($identitas)
	{
		$data = array(
			'id'				=> NULL,
			'file_identitas'	=> $identitas['file_name'],
			'id_user'			=> $this->session->userdata('id_user')
		);

		$this->db->insert('file_identitas', $data);

		if ($this->db->affected_rows()>0) {
			# code...
			$datas = array(
				'status_hak'	=> 'Permintaan Anda Sedang Di Proses'
			);
				$this->db->where('id_user', $this->session->userdata('id_user'))
						 ->update('user' , $datas);
			return TRUE;
		}else{
			return FALSE;
		}
	}

}

/* End of file Mtoko.php */
/* Location: ./application/models/Mtoko.php */