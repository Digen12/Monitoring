<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_survei extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        
         $this->load->helper('url');
         // $this->load->library('datatables');
         $this->load->library('session');
         $this->load->model('M_survei');
         $this->load->model(array('M_survei'));
         $this->load->model('M_login');
         $this->load->model(array('M_login'));
         $this->db = $this->load->database('mb', TRUE);
         // $s_nim = $_SESSION['nim'];
         // $loggin =$_SESSION['isLoggedIn'];
         // $s_level = $_SESSION['level'];
        
    }
    
 

	public function index() {

		$this->load->library('session');
	 
     
     //   print_r($kode);exit();
        
      
    

 
		$data = array(
			'title' => "",
			'nim' =>$_SESSION['nim'],
			'level'=>$_SESSION['level'],'ket'=>$_SESSION['ket'] 
		);
		if (isset($_SESSION['nim'])) {
			 	$this->load->view('v_survei', $data);
		}else{
			redirect('login');
		}
		
	}
    public function periode() {

        $this->load->library('session');
     
     
     //   print_r($kode);exit();
        
      
    

 
        $data = array(
            'title' => "",
            'nim' =>$_SESSION['nim'],
            'level'=>$_SESSION['level'],'ket'=>$_SESSION['ket'] 
        );
        if (isset($_SESSION['nim'])) {
                $this->load->view('v_periode', $data);
        }else{
            redirect('login');
        }
        
    }
    public function harapan() {

        $this->load->library('session');
     
     
     //   print_r($kode);exit();
        
      
    

 
        $data = array(
            'title' => "",
            'nim' =>$_SESSION['nim'],
            'level'=>$_SESSION['level'],'ket'=>$_SESSION['ket'] 
        );
        if (isset($_SESSION['nim'])) {
                $this->load->view('v_nilaiharapan', $data);
        }else{
            redirect('login');
        }
        
    }
    public function form() {

        $this->load->library('session');
     
     
     //   print_r($kode);exit();
        
      
    

 
        $data = array(
            'title' => "",
            'nim' =>$_SESSION['nim'],
            'level'=>$_SESSION['level'],'ket'=>$_SESSION['ket'] 
        );
        if (isset($_SESSION['nim'])) {
                $this->load->view('v_formsurvei', $data);
        }else{
            redirect('login');
        }
        
    }
    public function presepsinya() {

        $this->load->library('session');
     
     
     //   print_r($kode);exit();
        
      
    

 
        $data = array(
            'title' => "",
            'nim' =>$_SESSION['nim'],
            'level'=>$_SESSION['level'],'ket'=>$_SESSION['ket'] 
        );
        if (isset($_SESSION['nim'])) {
                $this->load->view('v_presepsi', $data);
        }else{
            redirect('login');
        }
        
    }
     public function gap() {

        $this->load->library('session');
     
     
     //   print_r($kode);exit();
        
      
    

 
        $data = array(
        );
        $sum = $this->db->query("SELECT sum(tp) as tp, sum(kp) as kp, sum(cp)as cp, sum(p) as p , sum(sp) as sp from t_presepsi")->result_array()[0];
        $d['title']='GAP Survey ';
        $d['nim']=$_SESSION['nim'];
        $d['level']=$_SESSION['level'];
        $d['ket']=$_SESSION['ket'];
        $d['tp']=$sum['tp'];
        $d['kp']=$sum['kp'];
        $d['cp']=$sum['cp'];
        $d['p']=$sum['p'];
        $d['sp']=$sum['sp'];
        array_push($data,$d);
        // print_r($data[0]);exit();
        if (isset($_SESSION['nim'])) {
                $this->load->view('v_gap', $data[0]);
        }else{
            redirect('login');
        }
        
    }
	public function getdata_survei() {
       
         $rcds = $this->db->query('SELECT count(*) as totals from t_survei ')->result_array()[0]['totals'];
          
             $pengguna = $this->db->query('SELECT * from t_survei order by kategori ')->result_array();
             $datas=array();
             $rkp=array();
             $i=1;
             foreach ($pengguna as $v ) {
             
                
                $dd['number']= $i;
                $dd['id_survei']=$v['id_survei'];
                $dd['kategori']=$v['kategori'];
                $dd['keterangan']=$v['keterangan'];
                $dd['survei']=$v['survei'];
            
             $dd['btt1']= '<a href="javascript:void(0);" class="edit_record btn btn-warning btn-xs" data-survei="'.$dd['id_survei'].'" >  Detail </a> ';
              
             array_push($rkp, $dd);

                $i++;         
             }
             $datas = $rkp;
           
        echo json_encode($datas);
       
    } 
        public function getdata_periode() {
       
         $rcds = $this->db->query('SELECT count(*) as totals from t_periode ')->result_array()[0]['totals'];
          
             $pengguna = $this->db->query('SELECT * from t_periode order by status ')->result_array();
             $datas=array();
             $rkp=array();
             $i=1;
             foreach ($pengguna as $v ) {
             
                
                $dd['number']= $i;
                $dd['id_periode']=$v['id_periode'];
                $dd['semester']=$v['semester'];
                $dd['keterangan']=$v['keterangan'];
                $dd['status']=$v['status'];
            
             $dd['btt1']= '<a href="javascript:void(0);" class="edit_record btn btn-warning btn-xs" data-survei="'.$dd['id_periode'].'" >  Detail </a> ';
              
             array_push($rkp, $dd);

                $i++;         
             }
             $datas = $rkp;
           
        echo json_encode($datas);
       
    } 
    // select t_presepsi.id_survei,kategori,count(nim) as mhs, sum(tp)+sum(kp)+sum(cp)+sum(p)+sum(sp) as bobot1, (sum(tp)+sum(kp)+sum(cp)+sum(p)+sum(sp))/count(nim) as rata1,  t_presepsi.nid,t_presepsi.nim from t_presepsi left join t_survei on t_survei.id_survei = t_presepsi.id_survei  GROUP BY nid,t_presepsi.id_survei;
    

    public function nilaipresepsi() {
       
         
             $per = $this->db->query('select id_periode from t_periode where status ="aktif"')->result_array();
                if (empty($per)) {
                    $periode='';
                }else{
                     $periode=$per[0]['id_periode'];
                }
             $pengguna = $this->db->query('select t_presepsi.id_survei,kategori, count(case when tp >0 then 1 else null end) as  tp,count(case when kp >0 then 1 else null end) as  kp ,count(case when cp >0 then 1 else null end) as  cp,count(case when p >0 then 1 else null end) as  p,count(case when sp >0 then 1 else null end) as  sp ,t_presepsi.nid,t_presepsi.nim from t_presepsi left join t_survei on t_survei.id_survei = t_presepsi.id_survei where t_presepsi.periode="'.$periode.'"  group by t_presepsi.nid,t_presepsi.id_survei  order by t_presepsi.id DESC limit 22')->result_array();
             $datas=array();
             $rkp=array();
             $i=1;
             foreach ($pengguna as $v ) {
             
                
                $dd['number']= $i;
                $dd['id_survei']=$v['id_survei'];
                $dd['kategori']=$v['kategori'];
                $dd['tp']=$v['tp'];
                $dd['kp']=$v['kp'];
                $dd['cp']=$v['cp'];
                $dd['p']=$v['p'];
                $dd['sp']=$v['sp'];
                $dd['nid']=$v['nid'];
                $dd['nim']=$v['nim'];
            
             $dd['btt1']= '<a href="javascript:void(0);" class="edit_record btn btn-warning btn-xs" data-survei="'.$dd['id_survei'].'" >  Detail </a> ';
              
             array_push($rkp, $dd);

                $i++;         
             }
             $datas = $rkp;
           
        echo json_encode($datas);
       
    }
     public function nilaigap() {
       
         
               $per = $this->db->query('select id_periode from t_periode where status ="aktif"')->result_array();
                if (empty($per)) {
                    $periode='';
                }else{
                     $periode=$per[0]['id_periode'];
                }
             $pengguna = $this->db->query('select t_presepsi.id_survei,t_survei.kategori,count(nim) as mhs, sum(tp)+sum(kp)+sum(cp)+sum(p)+sum(sp) as bobot1, (sum(tp)+sum(kp)+sum(cp)+sum(p)+sum(sp))/count(nim) as rata1,bobot2.b as bobot2, b/count(nim) as rata2 , (sum(tp)+sum(kp)+sum(cp)+sum(p)+sum(sp))/count(nim)-  b/count(nim) as hasil, t_presepsi.nid,t_presepsi.nim from t_presepsi left join t_survei on t_survei.id_survei = t_presepsi.id_survei left join bobot2 on bobot2.kategori = t_survei.kategori  where t_presepsi.periode="'.$periode.'"  GROUP BY nid,t_presepsi.id_survei;')->result_array();
             $datas=array();
             $rkp=array();
             $i=1;
             $bobot1=0;
             $bobot2=0;
             $rata1=0;
             $rata2=0;
             $hasil=0;
             foreach ($pengguna as $v ) {
                $m = $i;
                $bobot1+=$v['bobot1'];
                 $bobot2+=round($v['rata1'], 2);
                 $rata1+=$v['bobot2'];
                 $rata2+=round($v['rata2'], 2);
                 $hasil+=round($v['hasil'], 2);
                $dd['number']= $i;
                $dd['id_survei']=$v['id_survei'];
                $dd['kategori']=$v['kategori'];
                $dd['bobot1']=$v['bobot1'];
                $dd['rata1']=round($v['rata1'], 2);
                $dd['bobot2']=$v['bobot2'];
                $dd['rata2']=round($v['rata2'], 2);
                $dd['hasil']=round($v['hasil'], 2);
                $dd['nid']=$v['nid'];
                 $dd['gap']=round($v['hasil'],2);
               
             
              
             array_push($rkp, $dd);

                $i++;         
             }
             
             $datas = $rkp;
          
        echo json_encode($datas);
       
    }
     public function nilaiharapan() {
       
         
          
             $pengguna = $this->db->query('SELECT * from t_nilai_harapan')->result_array();
             $datas=array();
             $rkp=array();
             $i=1;
             foreach ($pengguna as $v ) {
             
                
                $dd['number']= $i;
               
                $dd['kategori']=$v['kategori'];
                $dd['tp']=$v['tidakpuas'];
                $dd['kp']=$v['kurangpuas'];
                $dd['cp']=$v['cukuppuas'];
                $dd['p']=$v['puas'];
                $dd['sp']=$v['sangatpuas'];
               
            
             $dd['btt1']= '<a href="javascript:void(0);" class="edit_record btn btn-warning btn-xs" data-survei="'.$dd['kategori'].'" >  Detail </a> ';
              
             array_push($rkp, $dd);

                $i++;         
             }
             $datas = $rkp;
           
        echo json_encode($datas);
       
    }
    public function getdata_harapan() {
       
        
             $pengguna = $this->db->query('SELECT * from t_nilai_harapan order by kategori ')->result_array();
             $datas=array();
             $rkp=array();
             $i=1;
             foreach ($pengguna as $v ) {
             
                
                $dd['number']= $i;
                $dd['kategori']=$v['kategori'];
                $dd['sangatpuas']=$v['sangatpuas'];
                $dd['puas']=$v['puas'];
                $dd['cukuppuas']=$v['cukuppuas'];
                $dd['kurangpuas']=$v['kurangpuas'];
                $dd['tidakpuas']=$v['tidakpuas'];
            
             $dd['btt1']= '<a href="javascript:void(0);" class="edit_record btn btn-warning btn-xs" data-kategori="'.$dd['kategori'].'" >  Detail </a> ';
              
             array_push($rkp, $dd);

                $i++;         
             }
             $datas = $rkp;
           
        echo json_encode($datas);
       
    }
    public function getdata_survei2() {
       
         
          
             $pengguna = $this->db->query('SELECT * from t_survei order by id_survei,kategori asc ')->result_array();
              echo json_encode($pengguna);
         }
     function delete()
    {
     
          
        	 
            
                $id = $this->input->post('nim');

                $del = $this->db->query("delete from t_survei where id_survei='".$id."'");
               

                 echo json_encode($del);
     }
     function save_formsurvei()
    {
      //s
          $this->load->library('session');
             
      
                $r1 = $this->input->post('kode');
                $r2 = $this->input->post('option');
                $r3 = $this->input->post('pembimbing');
                $r4 = $this->input->post('saran');
                $nim = $_SESSION['nim'];

                $nid = $this->db->query('select nid from t_bimbingan where nim ="'.$nim.'" and keterangan="'.$r3.'" and status="disetujui" ')->result_array()[0]['nid'];
                $per = $this->db->query('select id_periode from t_periode where status ="aktif"')->result_array();
                if (empty($per)) {
                    $periode='';
                }else{
                     $periode=$per[0]['id_periode'];
                }
                $st = count($r1);
                $ara=array();
                $ara2=array();
                $ara3=array();
                
              
              
               
                for ($i=0; $i <$st ; $i++) { 
                    array_push($ara, $nim); 
                    array_push($ara2, $nid);
                    array_push($ara3, $periode); 
                    
                     

                }
                $isi=array(
                    'id_survei'=>$r1,
                    'jawaban'=>$r2,
                    'nim'=>$ara,
                    'nid'=>$ara2,
                    'periode'=>$ara3
                );

                $saran=array(
                    'nim'=>$nim,
                    'nid'=>$nid,
                    'saran'=>$r4
                );
                 $presepsi=array(
                    'id_survei'=>$r1,
                     'jawaban'=>$r2,
                    'nim'=>$ara,
                    'nid'=>$ara2,
                     'periode'=>$ara3
                );
                // echo "<pre>";   print_r($isi);exit();
                $this->M_survei->adsaran($saran);
                $this->M_survei->surveydetail($isi,$nim,$nid,$periode);
                 $this->M_survei->surveypresepsi($isi,$nim,$nid,$periode);
                // echo "<pre>";print_r($r1);print_r($r2); echo "</pre>";exit();    
                $this->session->set_flashdata('suc', 'Ps');   
                redirect('C_survei/form');    
	 }
     function save_survei()
    {
      //s
          $this->load->library('session');
        	 
            		     
        $date=date('my');
        $hit=1;
        
         $ada=0;
         while($ada==0)  {
               $hi=   str_pad($hit,3, "0", STR_PAD_LEFT);   
        //$unik=format($hit,'0000');
        $kode= "P".$date.$hi;
       // print_r($kode);exit();
           $query = $this->db->query(' SELECT id_survei from t_survei 
                           WHERE id_survei = "'.$kode.'"  ');

       $x =$query->result();
        if (!empty($x)) {
            $ada=0;
            $hit++;

           
        
        } else{
            $ada=1;
            break;
        }
   
     

      }   
                $r0 = $kode;
                $r1 = $this->input->post('kategori');
                $r2 = $this->input->post('keterangan');
                $r3 = $this->input->post('survei');
                $r4 = $this->input->post('id_survei');
                $kondisi = $this->input->post('kondisi');
               

              	 
                 $Info = array(
                    'id_survei' => $r0,
                    'kategori' => $r1,
                    'keterangan' => $r2,
                    'survei' => $r3 
                ); 
                
                 $Info2 = array(
                    
                    'kategori' => $r1,
                    'keterangan' => $r2,
                    'survei' => $r3 
                ); 
                 // print_r($Info);exit();
              	if ($kondisi=='new') {
              
                 $cek = $this->db->query('SELECT * from t_survei where id_survei="'.trim($r0).'" ')->result_array();
                  // print_r($cek);exit();
                 if (!empty($cek)) {
                 	// echo "disini";exit();
                 	 $this->session->set_flashdata('nim', 'Pn');
                 	 	// print_r($_SESSION);exit();
                 	 redirect('C_survei');
                 }else{
                 	$this->load->model(array('M_survei'));
                 	 $result = $this->M_survei->adsurvei($Info);
                 		 

                 	 

                 	 if ($result>0) {
                 	 		$this->session->set_flashdata('suc', 'Ps');
                 	 			// print_r($_SESSION);exit();
                 	 		redirect('C_survei');
                 	 }
                 }
                		# code...
              	}else{

              		$result = $this->M_survei->update_survei($r4,$Info2);
              	 
              		 if ($result>0) {
                 	 		$this->session->set_flashdata('suc', 'Ps');
                 	 			// print_r($_SESSION);exit();
                 	 		redirect('C_survei');
                 	 }
              	}
                 
                 	
                 	 
                 	              
                
            
        
    }
     function save_periode()
    {
      //s
          $this->load->library('session');
             
                  $date=date('my');
        $hit=1;
        
         $ada=0;
         while($ada==0)  {
               $hi=   str_pad($hit,3, "0", STR_PAD_LEFT);   
        //$unik=format($hit,'0000');
        $kode= "PE".$date.$hi;
       // print_r($kode);exit();
           $query = $this->db->query(' SELECT id_periode from t_periode 
                           WHERE id_periode = "'.$kode.'"  ');

       $x =$query->result();
        if (!empty($x)) {
            $ada=0;
            $hit++;

           
        
        } else{
            $ada=1;
            break;
        }
   
     

      }   
                $r0 = $kode;        
      
                
                $r1 = $this->input->post('semester');
                $r2 = $this->input->post('keterangan');
                $r3 = $this->input->post('status');
                 $r4 = $this->input->post('id_periode');
                $kondisi = $this->input->post('kondisi');
               

                 
                 $Info = array(
                    'id_periode'=>$r0,
                    'semester' => $r1,
                    'keterangan' => $r2,
                    'status' => 'tidak aktif'
                ); 
                 $Info2 = array(
                    
                    'semester' => $r1,
                    'keterangan' => $r2,
                    'status' => $r3
                ); 
                
                
                if ($kondisi=='new') {
              
               
                    $this->load->model(array('M_survei'));
                     $result = $this->M_survei->adperiode($Info);
                         

                     

                     if ($result>0) {
                            $this->session->set_flashdata('suc', 'Ps');
                                // print_r($_SESSION);exit();
                            redirect('C_survei/periode');
                     }
                
                        # code...
                }else{
                     $cek = $this->db->query('SELECT status from t_periode where status ="aktif" ')->result_array();
                     if (empty($cek)) {

                       $result = $this->M_survei->update_periode($r4,$Info2);
                 
                             if ($result>0) {
                                    $this->session->set_flashdata('suc', 'Ps');
                                        // print_r($_SESSION);exit();
                                    redirect('C_survei/periode');
                             }
                     }else{
                        if ($r3=='tidak aktif') {
                           $this->M_survei->update_periode($r4,$Info2);
                 
                             
                                    $this->session->set_flashdata('suc', 'Ps');
                                        // print_r($_SESSION);exit();
                                    redirect('C_survei/periode');
                            
                        }else{
                          $this->session->set_flashdata('nm', 'Pn');
                                // print_r($_SESSION);exit();
                            redirect('C_survei/periode');
                        }
                     }
                     
                    
                }
                 
                    
                     
                                  
                
            
        
    }
    function save_harapan()
    {
      //s
          $this->load->library('session');
             
      
            
                $r1 = $this->input->post('kategori');
                $r2 = $this->input->post('sangatpuas');
                $r3 = $this->input->post('puas');
                $r4 = $this->input->post('cukuppuas');
                $r5 = $this->input->post('kurangpuas');
                $r6 = $this->input->post('tidakpuas');
                
               

                 
                 $Info = array(
                    'kategori' => $r1,
                    'sangatpuas' => $r2,
                    'puas' => $r3,
                    'cukuppuas' => $r4,
                    'kurangpuas' => $r5,
                    'tidakpuas' => $r6 
                ); 
                
                 
                
              
                 $cek = $this->db->query('SELECT * from t_nilai_harapan where kategori="'.trim($r1).'" ')->result_array();
                  // print_r($cek);exit();
                 if (!empty($cek)) {
                    $this->load->model(array('M_survei'));
                         $result = $this->M_survei->update_harapan($r1,$Info);
                 }else{
                    $this->load->model(array('M_survei'));
                     $result = $this->M_survei->adharapan($Info);
                         

                     

                    
                 }
                       
                 if ($result>0) {
                            $this->session->set_flashdata('suc', 'Ps');
                                // print_r($_SESSION);exit();
                            redirect('C_survei/harapan');
                     }
                 
                    
                     
                                  
                
            
        
    }

	
}