<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model
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
    function aduser($Info)
    {
        
        $this->db->trans_start();
        $this->db->insert('t_user', $Info);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();
        
        return $insert_id;
    }
    function loginMe($user, $password,$lvl)
    {
            //print_r($email);print_r($password);print_r($distre);exit();
        $this->db->select('*');
          $this->db->from('t_user');
        $this->db->where('id_user', $user);
        $this->db->where('password', $password);
        $this->db->where('level', $lvl);
        $query = $this->db->get();
        
        $user = $query->result();
        
        if(!empty($user)){
            if($password==$user[0]->password){
                return $user;
            } else {
                return array();
            }
        } else {
            return array();
        }
    }
       function adpo($Info)
    {
 
        $this->db2->trans_start();
        $this->db2->insert_batch('gr_po', $Info);
        $insert_id = $this->db2->insert_id();
        $this->db2->trans_complete();
        
        return $insert_id;
    }
   
   

}

  