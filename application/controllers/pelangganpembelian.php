<?php 
class Pelangganpembelian extends CI_Controller{
	function __construct(){
		parent:: __construct();
				$this->load->model('m_pelanggan');
					$this->load->model('m_produk');
	}
	function index(){
		$dt['data_pelanggan'] = $this->m_pelanggan->get_all();
		$dt['data_produk'] = $this->m_produk->getData();
		$dt['data_kode'] = $this->m_produk->getKode();
		$this->load->view('view_pelanggan_pembelian',$dt);
	}
	public function munculdata_pelanggan()
	{
		if($this->input->is_ajax_request())
		{
			$kode_pelanggan = $this->input->post('kode_pelanggan');
$this->load->model('m_pelanggan');
			$data = $this->m_pelanggan->get_baris($kode_pelanggan)->row();
			$json['alamat']			= ( ! empty($data->alamat)) ? preg_replace("/\r\n|\r|\n/",'<br />', $data->alamat) : "<small><i>Tidak ada</i></small>";
			$json['no_telp']			= ( ! empty($data->no_telp)) ? $data->no_telp : "<small><i>Tidak ada</i></small>";
			
			$json['keterangan']	= ( ! empty($data->keterangan)) ? preg_replace("/\r\n|\r|\n/",'<br />', $data->keterangan) : "<small><i>Tidak ada</i></small>";
			echo json_encode($json);
		}
	}
 
}
?>