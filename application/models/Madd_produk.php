<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Madd_produk extends CI_Model {

	public function insert($foto)
	{
		$data = array(
			'id_produk'	=> NULL,
			'nama_produk'		=> $this->input->post('nama'),
			'harga'				=> $this->input->post('harga'),
			'uraian'			=> $this->input->post('uraian'),
			'status_produk'		=> $this->input->post('status'),
			'gambar'			=> $foto['file_name'],
			'kategori'			=> $this->input->post('kategori'),
			'id_user'			=> $this->session->userdata('id_user')
			);
		$this->db->insert('produk', $data);

		if($this->db->affected_rows()>0){
			return TRUE;
		}else{
			return FALSE;
		}

	}	

}

/* End of file add_model.php */
/* Location: ./application/models/add_model.php */