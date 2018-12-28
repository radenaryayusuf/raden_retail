<?php
class Csv_import_model_produsen extends CI_Model
{
	function select()
	{
		$this->db->order_by('kode_produsen', 'DESC');
		$query = $this->db->get('t_produsen');
		return $query;
	}

	function insert($data)
	{
		$this->db->insert_batch('t_produsen', $data);
	}
}
