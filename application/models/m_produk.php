<?php 
class m_produk extends CI_Model{
	function __construct(){
		parent:: __construct();
	}
function getkodeproduk(){
        $query = $this->db->query(
            "SELECT IFNULL(MAX(SUBSTRING(kode_produk,3,5)),0) + 1 As no_urut FROM t_produk");

        $data = $query->row_array();
        $no_urut = $data['no_urut'];
        $id_pinjam = 'PR'.sprintf("%05s",$no_urut);

        return $id_pinjam;
    }
	function insert(){
		$data = array(
			'kode_produk'=> $this->getkodeproduk(),
			'tgl_pengisian'=> date('Y:m:d'),
			'jenis_produk'=>$this->input->post('jenis_produk'),
			'nama'=>$this->input->post('nama_produk'),
			'harga'=>$this->input->post('harga'),
			'stok'=>$this->input->post('jumlah_stok'),
			'status'=>$this->input->post('sts'),
			'keterangan'=>$this->input->post('keterangan')
			);

			if($this->db->insert('t_produk',$data)){
				$this->session->set_flashdata('error','Input Berhasil');
			}else{
				$this->session->set_flashdata('error','Input Gagal');
			}

			}
		function getData(){
			$query = $this->db
			->select('*')
			->where('status', 'Aktif')
			->get('t_produk');
			return $query->result_array();
		}
		function getKode(){
			$query = $this->db
			->select('kode_produk')
			->where('status', 'Aktif')
			->get('t_produk');
			return $query->result_array();
		}
		function delete($id){
	$this->db->query("UPDATE t_produk SET status = 'Tidak Aktif' WHERE kode_produk ='".$id."'");
		}

	function update(){
		$data = array(
			
			'jenis_produk'=>$this->input->post('jenis_produk'),
			'nama'=>$this->input->post('nama_produk'),
			'harga'=>$this->input->post('harga'),
			'stok'=>$this->input->post('jumlah_stok'),
			'status'=>$this->input->post('sts'),
			'keterangan'=>$this->input->post('keterangan')
			);
		$this->db->where('kode_produk', $this->input->post('kode_produk'));
		$this->db->update('t_produk' ,$data);
				}

	}
?>