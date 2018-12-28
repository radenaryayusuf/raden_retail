<?php
class Csv_import_model_produk extends CI_Model
{
	function select()
	{
		$this->db->order_by('kode_produk', 'DESC');
		$query = $this->db->get('t_produk');
		return $query;
	}

	function insert($data)
	{
		$this->db->insert_batch('t_produk', $data);
	}
}
