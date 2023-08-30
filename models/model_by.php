<?php 

/**
 * 
 */
class Model_by extends CI_Model
{
	
	public function tampil_data()
	{
		$this->db->select('*, DATE_FORMAT(`biaya_produksi`.`biaya_tgl`, "%M %Y") `biaya_tgl`'
		);
		$this->db->from('biaya_produksi');
   		return $this->db->get();

	}
	public function get_detail($id){
		
		return $this->db->get_where('biaya_produksi', array('id_by' => $id))->row();
	}
	public function tambah_by($data, $table){
		
		 $this->db->insert($table,$data);
	}
	public function update_by($where, $data, $table)
	{	
		 $this->db->where($where);
		 $this->db->update($table,$data);
	}
	public function hapus_by($id){
		return $this->db->delete('biaya_produksi', array("id_by" => $id));
    }
}
