<?php 
class m_produsen extends CI_Model{
	function __construct(){
		parent:: __construct();
	}
function getkodeprodusen(){
        $query = $this->db->query(
            "SELECT IFNULL(MAX(SUBSTRING(kode_produsen,4,5)),0) + 1 As no_urut FROM t_produsen");

        $data = $query->row_array();
        $no_urut = $data['no_urut'];
        $id_pinjam = 'PRO'.sprintf("%05s",$no_urut);

        return $id_pinjam;
    }
	function insert(){
		$data = array(
			'kode_produsen'=> $this->getkodeprodusen(),
			'tgl_registrasi'=> date('Y:m:d'),
			'nama'=>$this->input->post('nama_produsen'),
			'alamat'=>$this->input->post('alamat'),
			'email'=>$this->input->post('email'),
			'status'=>$this->input->post('sts'),
			'keterangan'=>$this->input->post('keterangan')
			);

			if($this->db->insert('t_produsen',$data)){
				$this->session->set_flashdata('error','Input Berhasil');
			}else{
				$this->session->set_flashdata('error','Input Gagal');
			}

			}
		function getData(){
		$query = $this->db
			->select('*')
			->where('status', 'Aktif')
			->get('t_produsen');
			return $query->result_array();
		}
		function delete($id){
			$this->db->query("UPDATE t_produsen SET status = 'Tidak Aktif' WHERE kode_produsen ='".$id."'");
		}

	function update(){
		$data = array(
			
			'nama'=>$this->input->post('nama_produsen'),
			'alamat'=>$this->input->post('alamat'),
			'email'=>$this->input->post('email'),
			'status'=>$this->input->post('sts'),
			'keterangan'=>$this->input->post('keterangan')
			);

		$this->db->where('kode_produsen', $this->input->post('kode_produsen'));
		$this->db->update('t_produsen' ,$data);
				}

	}
?>