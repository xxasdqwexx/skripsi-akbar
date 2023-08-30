<?php 

/**
 * 
 */
class Model_gpm extends CI_Model
{
	
	public function tampil_data()
	{
		$this->db->select('DISTINCT DATE_FORMAT(`transaksi`.`tanggal_transaksi`, "%M %Y") `tanggal_transaksi`, SUM(transaksi.subtotal) subtotal,  `biaya_produksi`.`byt_produksi`, `biaya_produksi`.`byo_produksi`, `biaya_produksi`.`bb_produksi`, `biaya_produksi`.`bo_produksi`', FALSE);
		// $this->db->join('transaksi', 'biaya_produksi');
		// $this->db->join('biaya_produksi', 'biaya_produksi');
		$this->db->from('transaksi');
		$this->db->join('biaya_produksi', 'DATE_FORMAT(`transaksi`.`tanggal_transaksi`, "%M %Y")=DATE_FORMAT(`biaya_produksi`.`biaya_tgl`, "%M %Y")');
		// $this->db->where('biaya_produksi.nama_by!="Biaya Operasional Produksi"');
		$this->db->group_by('MONTH(`transaksi`.`tanggal_transaksi`)');
		$this->db->order_by('transaksi.tanggal_transaksi', 'DESC');
		return $this->db->get();
	}
	// public function tampil_data1()
	// {
	// 	$this->db->select('SUM(biaya_produksi.biaya_by) total_satu');
	// 	$this->db->from('biaya_produksi');
	// 	$this->db->where('biaya_produksi.nama_by!="Biaya Operasional Produksi"');

 //   		return $this->db->get();
 //   		SELECT *, SUM(`biaya_by`) FROM `biaya_produksi` WHERE `nama_by` !== "Biaya Operasional Produksi"
	// }
	
	
}
