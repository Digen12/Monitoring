<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class M_survei extends CI_Model
{
  
    // db2 digunakan untuk mengakses database ke-2
 private $db2;

 public function __construct()
 {
  parent::__construct();
        
  $this->load->library('session');

         
 }
   
   function adsurvei($Info)
    {
        
        $this->db->trans_start();
        $this->db->insert('t_survei', $Info);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();
        
        return 1;
    }
     function adperiode($Info)
    {
        
        $this->db->trans_start();
        $this->db->insert('t_periode', $Info);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();
        
        return 1;
    }
     function adsaran($Info)
    {
        
        $this->db->trans_start();
        $this->db->insert('t_saran', $Info);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();
        
        return 1;
    }
    function adharapan($Info)
    {
        
        $this->db->trans_start();
        $this->db->insert('t_nilai_harapan', $Info);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();
        
        return 1;
    }
      function update_survei($Kode,$Info)
    {
        
        $this->db->where('id_survei', $Kode);
        $this->db->update('t_survei', $Info);
        
        return 1;
    }
     function update_periode($Kode,$Info)
    {
        
        $this->db->where('id_periode', $Kode);
        $this->db->update('t_periode', $Info);
        
        return 1;
    }
     function update_harapan($Kode,$Info)
    {
        
        $this->db->where('kategori', $Kode);
        $this->db->update('t_nilai_harapan', $Info);
        
        return 1;
    }
     function surveydetail($data,$nim,$nid,$per)
    {
     // print_r($vvc);exit();
        $rr = array('nid'=>$nim,'nid'=>$nid,'periode'=>$per);        
         $this->db->where($rr);
        $del=$this->db->delete('t_isi_survei');   
          
        
        $count = count($data['id_survei']);
      
        for($i = 0; $i<$count; $i++){
        $entries[] = array(
                    
                     'id_survei' =>$data['id_survei'][$i],
                    'nim' => $data['nim'][$i],
                    'nid' =>$data['nid'][$i],
                  'jawaban' =>$data['jawaban'][$i],
                  'periode' =>$data['periode'][$i],
                   
              
        );
        }
       // echo "<pre>"; print_r($entries);   echo "</pre>"; exit();
        $this->db->insert_batch('t_isi_survei', $entries); 
        if($this->db->affected_rows() > 0)
        return 1;
        else
        return 0;
    }  
     function surveypresepsi($data,$nim,$nid,$per)
    {
     // print_r($vvc);exit();
        $rr = array('nid'=>$nim,'nid'=>$nid,'periode'=>$per);        
         $this->db->where($rr);
        $del=$this->db->delete('t_presepsi');   
          
        
        $count = count($data['id_survei']);
      
        for($i = 0; $i<$count; $i++){
                if ($data['jawaban'][$i]==1) {
                    $tp=1;$kp=0;$cp=0;$p=0;$sp=0;
                }else if ($data['jawaban'][$i]==2) {
                    $tp=0;$kp=2;$cp=0;$p=0;$sp=0;
                }else if ($data['jawaban'][$i]==3) {
                    $tp=0;$kp=0;$cp=3;$p=0;$sp=0;
                }else if ($data['jawaban'][$i]==4) {
                    $tp=0;$kp=0;$cp=0;$p=4;$sp=0;
                }else{
                    $tp=0;$kp=0;$cp=0;$p=0;$sp=5;
                }
        $entries[] = array(
                    
                     'id_survei' =>$data['id_survei'][$i],
                    'nim' => $data['nim'][$i],
                    'nid' =>$data['nid'][$i],
                    'periode' =>$data['periode'][$i],
                    'tp'=>$tp,
                    'kp'=>$kp,
                    'cp'=>$cp,
                    'p'=>$p,
                    'sp'=>$sp,
                   
              
        );
        }
       // echo "<pre>"; print_r($entries);   echo "</pre>"; exit();
        $this->db->insert_batch('t_presepsi', $entries); 
        if($this->db->affected_rows() > 0)
        return 1;
        else
        return 0;
    } 

   
   
   

}

  