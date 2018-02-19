<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcart extends CI_Model {


	public function get_data()
	{
		return $this->db->query("SELECT cart.id_cart, produk.id_produk, cart.qty, produk.nama_produk, user.fullname AS nama_penjual, produk.uraian, produk.harga FROM cart JOIN produk ON cart.id_produk=produk.id_produk JOIN user ON user.id_user = produk.id_user WHERE random_id = '".$this->session->userdata('random_id')."'"  );
	}

	public function get_history()
	{
		return $this->db->query("SELECT transaksi.id_transaksi, transaksi.tgl_transaksi , transaksi.status,(SELECT SUM(a.harga*b.qty) AS total FROM produk a JOIN detail_transaksi b ON a.id_produk = b.id_produk WHERE b.id_transaksi = transaksi.id_transaksi) AS total FROM transaksi WHERE transaksi.id_user =". $this->session->userdata('id_user')) 
						->result();
	}

	public function detail_kantong($id)
	{
		return $this->db->query("SELECT * FROM detail_transaksi JOIN transaksi ON detail_transaksi.id_transaksi = transaksi.id_transaksi
																join produk ON detail_transaksi.id_produk = produk.id_produk
																JOIN user ON produk.id_user = user.id_user
																where detail_transaksi.id_transaksi =".$id)
						->result();	
	} 

	public function get_num_cart()
	{
		return $this->db->select('count(*) as num_cart')
						->where('random_id',$this->session->userdata('random_id'))
						->get('cart')
						->row();
	}

	public function add_cart($id_produk, $qty)
	{
		$data = array (
				'id_produk' => $id_produk,
				'random_id' => $this->session->userdata('random_id'),
				'qty'		=> $qty
			);
		$this->db->insert('cart',$data);

		if($this->db->affected_rows()>0){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function get_data_id($id)
	{
		return $this->db->where('id_transaksi' , $id)
						->get('transaksi')
						->row();
	}

	public function	get_data_cart($random_id)
	{
		return $this->db->where('random_id', $random_id)
						->get('cart')
						->result();							
	}


	public function add_transaksi($data_cart)
	{
		$data = array(
				'id_user' => $this->session->userdata('id_user')
		);


		$this->db->insert('transaksi', $data);
		$last_insert_id = $this->db->insert_id();



		if($this->db->affected_rows() > 0){
			$i = 0;
			foreach ($data_cart as $cart) {
				$datas = array(
					'id_transaksi' => $last_insert_id,
					'id_produk' => $data_cart[$i]->id_produk,
					'qty'		=> $data_cart[$i]->qty
					);

				$this->db->insert('detail_transaksi', $datas);

				$i++;
			}

			//hapus cart
			$this->db->where('random_id', $this->session->userdata('random_id'))->delete('cart');

			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function delete($id_cart)
	{
		$this->db->where('id_cart', $id_cart)
				 ->delete('cart');
		if($this->db->affected_rows()>0)
		{
			return TRUE;
		}else {
			return FALSE;
		}
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

}

/* End of file Mcart.php */
/* Location: ./application/models/Mcart.php */
