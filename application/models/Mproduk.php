<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mproduk extends CI_Model {

	public function get_data()
	{
		return $this->db->query("SELECT * FROM produk JOIN user ON produk.id_user = user.id_user WHERE produk.id_user = '".$this->session->userdata('id_user')."'");
	}

	public function delete($id_produk)
	{
		$this->db->where('id_produk', $id_produk)
				 ->delete('produk');
		if($this->db->affected_rows()>0)
		{
			return TRUE;
		}else {
			return FALSE;
		}
	}

	public function update_stok($id_produk,$status)
	{
		$data = array(
						'status_produk' => $status
					);
		$this->db->where('id_produk', $id_produk)
				 ->update('produk', $data);

		if($this->db->affected_rows() >0){
			return TRUE;
		} else {
			return FALSE;
		}
	}

	

}

/* End of file Mproduk.php */
/* Location: ./application/models/Mproduk.php */