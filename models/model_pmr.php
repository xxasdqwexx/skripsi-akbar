<?php 

/**
 * 
 */
class Model_pmr extends CI_Model
{
	
	public function tampil_data()
	{
		$this->db->select('DISTINCT DATE_FORMAT(`transaksi`.`tanggal_transaksi`, "%M %Y") `tanggal_transaksi`, SUM(transaksi.subtotal) subtotal', FALSE);
		$this->db->from('transaksi');
		$this->db->group_by('MONTH(`transaksi`.`tanggal_transaksi`)');
		$this->db->order_by('transaksi.tanggal_transaksi', 'DESC');
		return $this->db->get();
	}
	public function tampil_data2()
	{
		$this->db->select('SUM(biaya_produksi.biaya_by) total_dua');
		$this->db->from('biaya_produksi');
   		return $this->db->get();
	}
	
}
