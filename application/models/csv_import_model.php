<?php
class Csv_import_model extends CI_Model
{
	function select()
	{
		$this->db->order_by('kode_pelanggan', 'DESC');
		$query = $this->db->get('t_pelanggan');
		return $query;
	}

	function insert($data)
	{
		$this->db->insert_batch('t_pelanggan', $data);
	}
}
