<?php
class Excel_data_insert_model extends CI_Model {

    public function  __construct() {
        parent::__construct();
        
    }
	
function Add_User($data_user){
$this->db->insert('t_pelanggan', $data_user);
   }
   function Produsen($data_user){
$this->db->insert('t_produsen', $data_user);
   }
    function Produk($data_user){
$this->db->insert('t_produk', $data_user);
   }
  
	
}

?>