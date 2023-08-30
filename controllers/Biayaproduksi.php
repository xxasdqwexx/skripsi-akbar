<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biayaproduksi extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function data_by()
	{	
		if ($this->session->userdata('akses_level') == 'admin') {
		$data['biaya_produksi'] = $this->model_by->tampil_data()->result();
		$this->load->view('Template/header');
		$this->load->view('Biaya/databiaya',$data);
	}
	}
	
	public function edit($id)
	{
		if ($this->session->userdata('akses_level') == 'admin') {
		$data['edit']=$this->model_by->get_detail($id);
		$this->load->view('Template/header');
		$this->load->view('Biaya/editbiaya',$data);
		}
	}

	public function edit_by()
	{
		$id_by = $this->input->post('id_by');
		$biaya_tgl = $this->input->post('biaya_tgl');
		$byt_produksi = $this->input->post('byt_produksi');
		$byo_produksi = $this->input->post('byo_produksi');
		$bb_produksi = $this->input->post('bb_produksi');
		$bo_produksi = $this->input->post('bo_produksi');
		$data= array('biaya_tgl' => $biaya_tgl,
						 'byt_produksi' => $byt_produksi,
						 'byo_produksi' => $byo_produksi,
						 'bb_produksi' => $bb_produksi,
						 'bo_produksi' => $bo_produksi);
		$where= array('id_by' => $id_by);
		$this->model_by->update_by($where, $data, 'biaya_produksi');
		
		$data['biaya_produksi'] = $this->model_by->tampil_data()->result();
		$this->load->view('Template/header');
		$this->load->view('Biaya/databiaya',$data);
		return false;
		
	}

	public function tambah()
	{
		if ($this->session->userdata('akses_level') == 'admin') {
		$this->load->view('Template/header');
		$this->load->view('Biaya/tambahbiaya');
		}
	}
	public function tambah_by()
	{
		$biaya_tgl = $this->input->post('biaya_tgl');
		$byt_produksi = $this->input->post('byt_produksi');
		$byo_produksi = $this->input->post('byo_produksi');
		$bb_produksi = $this->input->post('bb_produksi');
		$bo_produksi = $this->input->post('bo_produksi');

			$data= array('biaya_tgl' => $biaya_tgl,
						 'byt_produksi' => $byt_produksi,
						 'byo_produksi' => $byo_produksi,
						 'bb_produksi' => $bb_produksi,
						 'bo_produksi' => $bo_produksi);
			$this->model_by->tambah_by($data, 'biaya_produksi');

		$data['biaya_produksi'] = $this->model_by->tampil_data()->result();
		$this->load->view('Template/header');
		$this->load->view('Biaya/databiaya',$data);
		return false;
	    
	}


	public function hapus($id)
	{
		$this->model_by->hapus_by($id);
		$data['biaya_produksi'] = $this->model_by->tampil_data()->result();
		$this->load->view('Template/header');
		$this->load->view('Biaya/databiaya',$data);
	}
	
}
