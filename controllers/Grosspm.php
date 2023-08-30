<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grosspm extends CI_Controller {

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

	
	public function data_gpm()
	{
		// $data['biaya_produksi_satu'] = $this->model_gpm->tampil_data1()->result();
		$data['harga_pokok_penjualan'] = $this->model_gpm->tampil_data()->result();
		$this->load->view('Template/header');
		$this->load->view('GPM/grosspm',$data);
	}
	
}
