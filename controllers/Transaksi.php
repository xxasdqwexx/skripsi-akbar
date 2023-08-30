<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

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

	public function checkout()
	{
		$id_user = $this->session->userdata('id_user'); 
		$data['detail']=$this->model_akun->get_detail($id_user);
		$this->load->view('Template/header');
		$this->load->view('Transaksi/checkout',$data);
	}

	public function create()
	{	
		$keranjang=$this->cart->total();
		$cart=$this->cart->contents();
		if (empty($cart)) {
			redirect('Transaksi/checkout');
		}else{			
		$tx_ID = date('U');
		$item = 1;
		//var_dump($cart);
		foreach ($cart as $cart) {
			
		$cart= array('id_user' => $this->session->userdata('id_user'),
			 'id_transaksi' => $tx_ID,
			 'id_item' => $tx_ID . $this->tambah_nol( $item, 2 ),
			 'nama_produk' => $cart['name'],
			 'subtotal' => $cart['subtotal'],
			 'harga' => $cart['price'],
			 'jumlah' => $cart['qty'],
			 'tunai' => $this->input->post('tunai'),
			 'status_transaksi' => $this->input->post('status_transaksi')
		);
		    
		$this->model_transaksi->create($cart, 'transaksi');

		$this->cart->destroy();

		$item++;
			}
		}
		redirect('Transaksi/lihat');				
	}

	public function batalkan($id_transaksi)
	{
		$data['transaksi']=$this->model_transaksi->batalkan($id_transaksi);
		redirect('Transaksi/lihat');
	}

	public function tambah_nol($nilai, $digit)
	{
		return str_repeat('0', $digit-strlen($nilai)) . $nilai;
	}

	public function detail_checkout($id_user)
	{
		$data['detail']=$this->model_akun->get_detail($id_user);
		$this->load->view('Template/header');
		$this->load->view('Transaksi/checkout',$data);
	}

	public function lihat()
	{
		if ($this->session->userdata('akses_level') == 'admin') {
		$data['transaksi_satu'] = $this->model_transaksi->tampil_data()->result();
		$data['transaksi'] = $this->model_transaksi->tampil_data_admin()->result();
		$this->load->view('Template/header');
		$this->load->view('Transaksi/transaksi',$data);
		}
		elseif ($this->session->userdata('akses_level') == 'pelanggan') {
		$id_user= $this->session->userdata('id_user');
		$data['transaksi'] = $this->model_transaksi->tampil_data($id_user)->result();
		$this->load->view('Template/header');
		$this->load->view('Transaksi/transaksi',$data);
		}
	}

	public function tanggal()
	{
		$dari_tgl = $this->input->post('dari_tgl');
		$sampai_tgl = $this->input->post('sampai_tgl');

		$data= array('dari_tgl' => $dari_tgl,
					 'sampai_tgl' => $sampai_tgl);

		$data['transaksi']=$this->model_transaksi->getdate($dari_tgl, $sampai_tgl)->result();
		$data['transaksi_satu'] = $this->model_transaksi->tampil_data1($dari_tgl, $sampai_tgl)->result();
		$this->load->view('Template/header');
		$this->load->view('Transaksi/transaksi',$data);	
	}

	public function detail($id_transaksi)
	{
		if ($this->session->userdata('akses_level') == 'pelanggan') {
		$id_user = $this->session->userdata('id_user');
		$data['transaksi'] = $this->model_transaksi->tampil_detail($id_transaksi,$id_user);
		$data['item'] = $this->model_transaksi->tampil_detail_item($id_transaksi,$id_user)->result();
		$this->load->view('Template/header');
		$this->load->view('Transaksi/detailtransaksi',$data);}
		elseif ($this->session->userdata('akses_level') == 'admin') {
		$data['transaksi'] = $this->model_transaksi->tampil_detail_admin($id_transaksi);
		$data['item'] = $this->model_transaksi->tampil_detail_item_admin($id_transaksi)->result();
		$this->load->view('Template/header');
		$this->load->view('Transaksi/detailtransaksi',$data);}
		}
	

	public function cetaktransaksi($id_transaksi)
	{
		if ($this->session->userdata('akses_level') == 'admin') {
		$data['transaksi'] = $this->model_transaksi->tampil_detail_admin($id_transaksi);
		$data['item'] = $this->model_transaksi->tampil_detail_item_admin($id_transaksi)->result();
		$this->load->view('Transaksi/cetaktransaksi',$data);
		}
	}

	public function deletecart($id_produk)
	{
            $data = array( 
     		'rowid' => $id_produk,
     		'qty'=> 0 
     	);

        $this->cart->update($data);
        redirect('Transaksi/checkout');
    	
    }

    public function updatecart()
	{
            $data = array( 
     		'rowid' => $this->input->post('id'),
     		'qty' => $this->input->post('jumlah'));

            $res = $this->cart->update($data);

            var_dump($res);
	}

	public function sorting()
	{
				
	}
}
