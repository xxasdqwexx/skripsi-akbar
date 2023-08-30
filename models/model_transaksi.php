<?php 

/**
 * 
 */
class Model_transaksi extends CI_Model
{
	
	public function create($cart, $table)
	{
		$this->db->insert($table,$cart);
	}

	public function batalkan($id_transaksi)
	{	$isi = array('status_transaksi' => 'Dibatalkan');  
		// $isi = 'Dibatalkan';
		$this->db->where('id_transaksi', $id_transaksi);
		$this->db->update('transaksi', $isi );
	}

	public function getdate($dari_tgl, $sampai_tgl)
	{
   		$this->db->select('
			transaksi.id_transaksi,
			transaksi.tanggal_transaksi,
			SUM(transaksi.harga*transaksi.jumlah) total,
			transaksi.status_transaksi,
			user.nama,transaksi.tunai'
		);
		$this->db->from('transaksi');
		$this->db->where('`transaksi`.`tanggal_transaksi` BETWEEN "'. date('Y-m-d', strtotime($dari_tgl)). '" and "'. date('Y-m-d', strtotime($sampai_tgl)).'"');
   		$this->db->join('user', 'transaksi.id_user = user.id_user', 'LEFT');
   		$this->db->group_by('transaksi.id_transaksi');
   		$this->db->order_by('transaksi.tanggal_transaksi', 'DESC');
   		return $this->db->get();
	}

	public function tampil_data()
	{
		$this->db->select('SUM(transaksi.subtotal) subtotal');
		$this->db->from('transaksi');
		return $this->db->get();
	}

	public function tampil_data1($dari_tgl, $sampai_tgl)
	{
		$this->db->select('SUM(transaksi.subtotal) subtotal');
		$this->db->from('transaksi');
		$this->db->where('`transaksi`.`tanggal_transaksi` BETWEEN "'. date('Y-m-d', strtotime($dari_tgl)). '" and "'. date('Y-m-d', strtotime($sampai_tgl)).'"');
   		return $this->db->get();
	}

	public function tampil_data_admin()
	{
   		$this->db->select('
			transaksi.id_transaksi,
			transaksi.tanggal_transaksi,
			SUM(transaksi.harga*transaksi.jumlah) total,
			transaksi.status_transaksi,
			user.nama,transaksi.tunai'
		);
		$this->db->from('transaksi');
   		$this->db->join('user', 'transaksi.id_user = user.id_user', 'LEFT');
   		$this->db->group_by('transaksi.id_transaksi');
   		$this->db->order_by('transaksi.tanggal_transaksi', 'DESC');
   		return $this->db->get();
	}

	public function tampil_detail_item($id_transaksi,$id_user)
	{
		$this->db->select('
			transaksi.id_transaksi,
			transaksi.tanggal_transaksi,
			transaksi.status_transaksi,
			SUM(transaksi.harga*transaksi.jumlah) total,
			transaksi.nama_produk, transaksi.harga, transaksi.jumlah'
		);
		$this->db->from('transaksi');
   		// $this->db->join('produk', 'transaksi.id_produk = produk.id_produk', 'RIGHT');
   		$this->db->group_by('transaksi.id_item');
   		$this->db->where(array('transaksi.id_transaksi' => $id_transaksi, 'transaksi.id_user' => $id_user));
   		return $this->db->get();
	}

	public function tampil_detail($id_transaksi,$id_user)
	{
		$this->db->select('
			transaksi.id_transaksi,
			transaksi.tanggal_transaksi,
			transaksi.status_transaksi,
			SUM(transaksi.harga*transaksi.jumlah) total,
			user.nama, user.email, user.telepon, user.alamat,
			transaksi.id_item,
			IFNULL(pengiriman.no_resi, "") no_resi,
			transaksi.tunai'
		);
		$this->db->from('transaksi');
   		$this->db->join('user', 'transaksi.id_user = user.id_user', 'LEFT');
   		$this->db->group_by('transaksi.id_transaksi');
   		$this->db->where(array('transaksi.id_transaksi' => $id_transaksi, 'transaksi.id_user' => $id_user));
   		return $this->db->get()->row();
	}

	public function tampil_detail_admin($id_transaksi)
	{
		$this->db->select('
			transaksi.id_transaksi,
			transaksi.tanggal_transaksi,
			transaksi.status_transaksi,
			SUM(transaksi.harga*transaksi.jumlah) total,
			user.nama, user.email, user.telepon, user.alamat,
			transaksi.id_item,
			transaksi.tunai'
		);
		$this->db->from('transaksi');
   		$this->db->join('user', 'transaksi.id_user = user.id_user', 'LEFT');
   		$this->db->group_by('transaksi.id_transaksi');
   		$this->db->where(array('transaksi.id_transaksi' => $id_transaksi));
   		return $this->db->get()->row();
	}

	public function tampil_detail_item_admin($id_transaksi)
	{
		$this->db->select('
			transaksi.id_transaksi,
			transaksi.tanggal_transaksi,
			SUM(transaksi.harga*transaksi.jumlah) total,
			transaksi.nama_produk, transaksi.harga, transaksi.jumlah'
		);
		$this->db->from('transaksi');
   		//$this->db->join('produk', 'transaksi.id_produk = produk.id_produk', 'RIGHT');
   		$this->db->group_by('transaksi.id_item');
   		$this->db->where(array('transaksi.id_transaksi' => $id_transaksi));
   		return $this->db->get();
	}

	/*public function tampil_detail_pembayaran($id_transaksi)
	{	$this->db->select('
			transaksi.id_transaksi,
			transaksi.tanggal_transaksi,
			SUM(transaksi.harga*transaksi.jumlah) total,
			user.nama, user.email, user.telepon, user.alamat,
			pembayaran.*'
		);
		$this->db->from('transaksi');
 
   		$this->db->join('user', 'transaksi.id_user = user.id_user', 'LEFT');
   		$this->db->group_by('transaksi.id_transaksi');
   		$this->db->where('transaksi.id_transaksi', $id_transaksi);
   		return $this->db->get()->row();
	}*/

}
