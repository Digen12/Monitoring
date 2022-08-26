<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class M_bimbingan extends CI_Model
{
  
    // db2 digunakan untuk mengakses database ke-2
 private $db2;

 public function __construct()
 {
  parent::__construct();
        
  $this->load->library('session');

         
 }
   
   function adbimbingan($Info)
    {
        
        $this->db->trans_start();
        $this->db->insert('t_bimbingan', $Info);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();
        
        return 1;
    }
    function admateri($Info)
    {
        
        $this->db->trans_start();
        $this->db->insert('t_materi', $Info);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();
        
        return 1;
    }
      function update_bimbingan($r,$Info)
    {
        $arra=array('id_bimbingan'=>$r );
        $this->db->where( $arra);
        $this->db->update('t_bimbingan', $Info);
        
        return 1;
    }
     function update_bimbingan_dosen($id,$Info)
    {
        
        $this->db->where('id_bimbingan',$id);
        $this->db->update('t_bimbingan', $Info);
        
        return 1;
    }
    function update_materi($id,$id2,$id3,$id4,$Info)
    {
         $arra=array('id_bimbingan'=>$id,'nid'=>$id2,'pertemuan'=>$id3,'nim'=>$id4);
        $this->db->where($arra);
        $this->db->update('t_materi', $Info);
        
        return 1;
    }
     

   
   
   

}

  