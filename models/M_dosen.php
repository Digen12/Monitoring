<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class M_dosen extends CI_Model
{
  
    // db2 digunakan untuk mengakses database ke-2
 private $db2;

 public function __construct()
 {
  parent::__construct();
        
  $this->load->library('session');

         
 }
   
   function addsn($Info)
    {
        
        $this->db->trans_start();
        $this->db->insert('t_dosen', $Info);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();
        
        return 1;
    }
      function update_dosen($Kode,$Info)
    {
        
        $this->db->where('nid', $Kode);
        $this->db->update('t_dosen', $Info);
        
        return 1;
    }
     function update_user($Kode,$Info)
    {
        
        $this->db->where('id_user', $Kode);
        $this->db->update('t_user', $Info);
        
        return 1;
    }

   
   
   

}

  