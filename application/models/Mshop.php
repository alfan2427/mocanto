<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mshop extends CI_Model {

	public function get_data($id)
	{
		return $this->db->query("SELECT * FROM produk JOIN user ON produk.id_user=user.id_user WHERE produk.id_user =".$id)
						->result();
	}

	public function get_data_kantin()
	{
		return $this->db->where('hak_akses', 'penjual' )
						->get('user')
						->result();
	}

	public function get_menu_by_id($id)
	{
		return $this->db->where('id_user', $id)
						->get('produk')
						->result();
	}

}

/* End of file Mshop.php */
/* Location: ./application/models/Mshop.php */