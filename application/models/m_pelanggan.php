<?php 
class m_pelanggan extends CI_Model{
	function __construct(){
		parent:: __construct();
	}
	function get_all()
	{
		return $this->db
			->select('kode_pelanggan, nama, alamat, no_telp, keterangan')
			->where('status', 'Aktif')
			->order_by('nama','asc')
			->get('t_pelanggan');
	}
		function getData(){
			$query = $this->db
			->select('*')
			->where('status', 'Aktif')
			->get('t_pelanggan');
			return $query->result_array();
		}
	function get_baris($kode_pelanggan)
	{
		return $this->db
			->select('kode_pelanggan, nama, alamat, no_telp, keterangan')
			->where('kode_pelanggan', $kode_pelanggan)
			->limit(1)
			->get('t_pelanggan');
	}
function getkodepelanggan(){
        $query = $this->db->query(
            "SELECT IFNULL(MAX(SUBSTRING(kode_pelanggan,4,5)),0) + 1 As no_urut FROM t_pelanggan");

        $data = $query->row_array();
        $no_urut = $data['no_urut'];
        $id_pinjam = 'PEL'.sprintf("%05s",$no_urut);

        return $id_pinjam;
    }
	function insert(){
		$data = array(
			'kode_pelanggan'=> $this->getkodepelanggan(),
			'tgl_registrasi'=> date('Y:m:d'),
			'nama'=>$this->input->post('nama_pelanggan'),
			'alamat'=>$this->input->post('alamat'),
			'no_telp'=>$this->input->post('no_telp'),
			'email'=>$this->input->post('email'),
			'status'=>$this->input->post('sts'),
			'keterangan'=>$this->input->post('keterangan')
			);

			if($this->db->insert('t_pelanggan',$data)){
				$this->session->set_flashdata('error','Input Berhasil');
			}else{
				$this->session->set_flashdata('error','Input Gagal');
			}

			}
		function delete($id){
			$this->db->query("UPDATE t_pelanggan SET status = 'Tidak Aktif' WHERE kode_pelanggan ='".$id."'");
		}

	function update(){
		$data = array(
			
			'nama'=>$this->input->post('nama_pelanggan'),
			'alamat'=>$this->input->post('alamat'),
			'no_telp'=>$this->input->post('no_telp'),
			'email'=>$this->input->post('email'),
			'status'=>$this->input->post('sts'),
			'keterangan'=>$this->input->post('keterangan')
			);
		$this->db->where('kode_pelanggan', $this->input->post('kode_pelanggan'));
		$this->db->update('t_pelanggan' ,$data);
				}

	}
?>