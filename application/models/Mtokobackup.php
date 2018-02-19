<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtoko extends CI_Model {

	
	public function get_transaksi()
	{
		return $this->db->query("SELECT transaksi.id_transaksi,user.fullname, user.room , produk.nama_produk , produk.harga , detail_transaksi.qty FROM detail_transaksi JOIN transaksi ON detail_transaksi.id_transaksi = transaksi.id_transaksi
																JOIN produk ON detail_transaksi.id_produk = produk.id_produk
																JOIN user ON user.id_user = transaksi.id_user
																WHERE produk.id_user = ".$this->session->userdata('id_user')." AND transaksi.status = 'Sedang diproses'");
	}

	public function get_histori_transaksi()
	{
		return $this->db->query("SELECT transaksi.id_transaksi,user.fullname, user.room , produk.nama_produk , produk.harga , detail_transaksi.qty, transaksi.status FROM detail_transaksi JOIN transaksi ON detail_transaksi.id_transaksi = transaksi.id_transaksi
																JOIN produk ON detail_transaksi.id_produk = produk.id_produk
																JOIN user ON user.id_user = transaksi.id_user
																WHERE produk.id_user = ".$this->session->userdata('id_user')." AND transaksi.status = 'Terkirim'");
	}

	public function detail_pesanan()
	{
		return $this->db->query("SELECT transaksi.id_transaksi, transaksi.tgl_transaksi , transaksi.status,(SELECT SUM(a.harga*b.qty) AS total FROM produk a JOIN detail_transaksi b ON a.id_produk = b.id_produk WHERE b.id_transaksi = transaksi.id_transaksi) AS total FROM transaksi WHERE transaksi.id_user =". $this->session->userdata('id_user'));
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

}

/* End of file Mtoko.php */
/* Location: ./application/models/Mtoko.php */