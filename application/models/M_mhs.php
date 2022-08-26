<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class M_mhs extends CI_Model
{
  
    // db2 digunakan untuk mengakses database ke-2
 private $db2;

 public function __construct()
 {
  parent::__construct();
        
  $this->load->library('session');

         
 }
   
   function admhs($Info)
    {
        
        $this->db->trans_start();
        $this->db->insert('t_mhsw', $Info);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();
        
        return 1;
    }
      function update_mhs($Kode,$Info)
    {
        
        $this->db->where('nim', $Kode);
        $this->db->update('t_mhsw', $Info);
        
        return 1;
    }
     function update_user($Kode,$Info)
    {
        
        $this->db->where('id_user', $Kode);
        $this->db->update('t_user', $Info);
        
        return 1;
    }

   
   
   

}

  