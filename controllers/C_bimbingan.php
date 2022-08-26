<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_bimbingan extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        //DEKLARASI MODEL/LIBRARRY BIAR BISA DI PANGGIL DI SEMUA FUNGSI/CLASS

         $this->load->helper('url');
         // $this->load->library('datatables');
         $this->load->library('session');
         $this->load->model('M_bimbingan');
         $this->load->model(array('M_bimbingan'));
         $this->load->model('M_login');
         $this->load->model(array('M_login'));
         $this->db = $this->load->database('mb', TRUE);
         // $s_nim = $_SESSION['nim'];
         // $loggin =$_SESSION['isLoggedIn'];
         // $s_level = $_SESSION['level'];
        
    }
    
 
    //INI UNTUK MENAMPILKAN (mhsw) HALAMAN KRS MHSW DAN DOSPEM
	public function index() {

		$this->load->library('session');
	 
     
     //   print_r($kode);exit();
        
      
    

    //INI SESSION JGN TERPAKU SAMA NAMA , HARUS DI DUMP BIAR TAU APA ISINYA , INI DARI LOGIN 
		$data = array(
			'title' => "",
			'nim' =>$_SESSION['nim'],
			'level'=>$_SESSION['level'],'ket'=>$_SESSION['ket'] 
		);
		if (isset($_SESSION['nim'])) {
			 	$this->load->view('v_bimbingan', $data);
		}else{
			redirect('login');
		}
		
	}
    //INI TUNTUK MENAMPILKAN (DSN) MENAMPILKAN DATA KRS UNTUK DI APPROVE DSN 
	public function get_mhs() {

		$this->load->library('session');
	 
     
     //   print_r($kode);exit();
        
      
    

 
		$data = array(
			'title' => "",
			'nim' =>$_SESSION['nim'],
			'level'=>$_SESSION['level'],'ket'=>$_SESSION['ket'] 
		);
		if (isset($_SESSION['nim'])) {
				if ($_SESSION['level']=='dsn' ) {
					$this->load->view('v_bimbingan_dosen', $data);
				} 
			 
		}else{
			redirect('login');
		}
		
	}
    //INI UNTUK MENAMPILKAN SELURUH DATA KRS UNTUK KAJUR
        public function get_mhs_v() {

        $this->load->library('session');
     
     
     //   print_r($kode);exit();
        
      
    

 
        $data = array(
            'title' => "",
            'nim' =>$_SESSION['nim'],
            'level'=>$_SESSION['level'],'ket'=>$_SESSION['ket'] 
        );
        if (isset($_SESSION['nim'])) {
                if ($_SESSION['level']=='dsn'  ) {
                    $this->load->view('v_bimbingan_kajur', $data);
                }
             
        }else{
            redirect('login');
        }
        
    }
    //INI UNTUK MENAMPILKAN DATA BIMBINGAN PER PERTEMUAN DAN UNTUK MHS
     public function v_materi() {

        $this->load->library('session');
     
     
     //   print_r($kode);exit();
        
      
    

 
        $data = array(
            'title' => "",
            'nim' =>$_SESSION['nim'],
            'level'=>$_SESSION['level'],'ket'=>$_SESSION['ket'] 
        );
        if (isset($_SESSION['nim'])) {
                // if ($_SESSION['level']=='dsn'  ) {
                    $this->load->view('v_materi', $data);
                // }
             
        }else{
            redirect('login');
        }
        
    }
    //INI UNTUK MENAMPILKAN SELURUH DATA BIMBINGAN DARI MHSW UNTUK DI SETUJUI
     public function v_materi_dosen() {

        $this->load->library('session');
     
     
     //   print_r($kode);exit();
        
      
    

 
        $data = array(
            'title' => "",
            'nim' =>$_SESSION['nim'],
            'level'=>$_SESSION['level'],'ket'=>$_SESSION['ket'] 
        );
        if (isset($_SESSION['nim'])) {
                // if ($_SESSION['level']=='dsn'  ) {
                    $this->load->view('v_materi_dsn', $data);
                // }
             
        }else{
            redirect('login');
        }
        
    }
    //DATA PBIMBINGAN SELURUH  PERTEMUAN DARI MAHASISWANYA DOSPEM
     public function v_materi_dosen_detail() {

        $this->load->library('session');
     
     
     //   print_r($kode);exit();
        
      
    

 
        $data = array(
            'title' => "",
            'nim' =>$_SESSION['nim'],
            'level'=>$_SESSION['level'],'ket'=>$_SESSION['ket'] 
        );
        if (isset($_SESSION['nim'])) {
                if ($_SESSION['level']=='dsn'  ) {
                    $this->load->view('v_materi_dsn_detail', $data);
                }
             
        }else{
            redirect('login');
        }
        
    }
    //INI UNTUK MENAMPILKAN SELURUH DATA  BIMBINGAN SECARA REKAP UNTUK DOSEN
    public function v_materi_dosen_rekap() {

        $this->load->library('session');
     
     
     //   print_r($kode);exit();
        
      
    

 
        $data = array(
            'title' => "",
            'nim' =>$_SESSION['nim'],
            'level'=>$_SESSION['level'],'ket'=>$_SESSION['ket'] 
        );
        if (isset($_SESSION['nim'])) {
                if ($_SESSION['level']=='dsn'  ) {
                    $this->load->view('v_materi_dsn_rekap', $data);
                }
             
        }else{
            redirect('login');
        }
        
    }
    //INI UNTUK MENAMPILKAN SELURUH DATA BIMBINGAN SECARA REKAP  UNTUK KAJUR
    public function v_materi_rekap() {

        $this->load->library('session');
     
     
     //   print_r($kode);exit();
        
      
    

 
        $data = array(
            'title' => "",
            'nim' =>$_SESSION['nim'],
            'level'=>$_SESSION['level'],'ket'=>$_SESSION['ket'] 
        );
        if (isset($_SESSION['nim'])) {
                if ($_SESSION['level']=='dsn'  ) {
                    $this->load->view('v_materi_rekap', $data);
                }
             
        }else{
            redirect('login');
        }
        
    }
    //INI UNTUK MENAMPILKAN SELURUH DATA BIMBINGAN DETAIL 
    public function v_materi_mhs_detail() {

        $this->load->library('session');
     
     
     //   print_r($kode);exit();
        
      
    

 
        $data = array(
            'title' => "",
            'nim' =>$_SESSION['nim'],
            'level'=>$_SESSION['level'],'ket'=>$_SESSION['ket'] 
        );
        if (isset($_SESSION['nim'])) {
                // if ($_SESSION['level']=='dsn'  ) {
                    $this->load->view('v_materi_mhs_detail', $data);
                // }
             
        }else{
            redirect('login');
        }
        
    }
    //MENGAMBIL DATA DOSEN BERDASARKAN FILTER P1/P2 UNTUK DI SELECT OPTION
	  public function getdosen()
    {
      
         $id = $this->input->post('id');

          $query = $this->db->query(' SELECT * from t_dosen where level ="'.$id.'" or level ="P1jugaP2"
                            ');

       $x =$query->result_array();
       echo  json_encode($x);
    }
    //MENGAMBIL DATA DOSEN all
          public function getdosen2()
    {
      
       

          $query = $this->db->query(' SELECT * from t_dosen 
                            ');

       $x =$query->result_array();
       echo  json_encode($x);
    }
    //untuk get DETAIL DATA BIMBINGAN PER PERTEMUAN
     public function getdosbim()
    {
      
         $id = $this->input->post('id');
         $nim = $_SESSION['nim'];
          $query = $this->db->query(' SELECT t_bimbingan.id_bimbingan,t_bimbingan.nid as ni, t_dosen.nama_depan as nd from t_bimbingan left join t_dosen on t_dosen.nid = t_bimbingan.nid where t_bimbingan.keterangan ="'.$id.'" and t_bimbingan.status="disetujui" and t_bimbingan.nim="'.$nim.'"
                            ');

       $x =$query->result_array();
       echo  json_encode($x);
    }
	public function getdata_bimbingan() {
       
           $per = $this->db->query('select id_periode from t_periode where status ="aktif"')->result_array();
                if (empty($per)) {
                    $periode='';
                }else{
                     $periode=$per[0]['id_periode'];
                }
          		if ($_SESSION['level']=='mhsw') {
             $pengguna = $this->db->query('SELECT t_bimbingan.id_bimbingan,t_bimbingan.keterangan,t_bimbingan.nim,t_bimbingan.nid,t_mhsw.nama_depan as mnd,t_dosen.nama_depan as dnd,t_bimbingan.kategori,t_bimbingan.status from t_bimbingan left join t_mhsw on t_mhsw.nim=t_bimbingan.nim Left join t_dosen on t_dosen.nid = t_bimbingan.nid where t_bimbingan.nim="'.$_SESSION['nim'].'" and  t_bimbingan.periode="'.$periode.'" ')->result_array();
         		}
         		// print_r($_SESSION['ket']);exit()
         		 else{
         	 $pengguna = $this->db->query('SELECT t_bimbingan.id_bimbingan,t_bimbingan.keterangan,t_bimbingan.nim,t_bimbingan.nid,t_mhsw.nama_depan as mnd,t_dosen.nama_depan as dnd,t_bimbingan.kategori,t_bimbingan.status from t_bimbingan left join t_mhsw on t_mhsw.nim=t_bimbingan.nim Left join t_dosen on t_dosen.nid = t_bimbingan.nid where t_bimbingan.nid="'.$_SESSION['nim'].'"  and  t_bimbingan.periode="'.$periode.'" ')->result_array();
         		}
             $datas=array();
             $rkp=array();
             $i=1;
             foreach ($pengguna as $v ) {
             
                
                $dd['number']= $i;
                $dd['id_bimbingan']=$v['id_bimbingan'];
                $dd['nim']=$v['nim']." ".$v['mnd'];
                $dd['nid']=$v['nid']." ".$v['dnd'];
                $dd['kat']=$v['kategori']; 
                 $dd['keterangan']=$v['keterangan'];
                $dd['status']=$v['status'];
                // print_r($v['status']);exit();
                if ($v['status']=='belum disetujui') {
                	$dd['ket'] = '<div class="badge badge-warning">'.$v['status'].'</div>'; 
                }else if ($v['status']=='disetujui') {
                	$dd['ket'] = '<div class="badge badge-success">'.$v['status'].'</div>'; 
                }else{
                	$dd['ket'] = '<div class="badge badge-danger">'.$v['status'].'</div>'; 
                }	
            	


            	if ($v['kategori']=='TA1') {
            	 	$dd['kategori'] = '<div class="badge badge-warning">'.$v['kategori'].'</div>'; 
            	}else{
            		$dd['kategori'] = '<div class="badge badge-primary">'.$v['kategori'].'</div>'; 
            	 
            	}
            	if($_SESSION['level']=='mhsw'){
             $dd['btt1']= '<a href="javascript:void(0);" class="edit_record btn btn-warning btn-xs" data-bimbingan="'.$dd['id_bimbingan'].'" >Edit/Detail</a> ';
              }else{
                 $dd['btt1']= '<a href="javascript:void(0);" class="edit_record btn btn-warning btn-xs" data-bimbingan="'.$dd['id_bimbingan'].'" >Persetujuan</a> ';
              }
             array_push($rkp, $dd);

                $i++;         
             }
             $datas = $rkp;
           
        echo json_encode($datas);
       
    }
    public function getdata_materi() {
        $per = $this->db->query('select id_periode from t_periode where status ="aktif"')->result_array();
                if (empty($per)) {
                    $periode='';
                }else{
                     $periode=$per[0]['id_periode'];
                }
         
                if ($_SESSION['level']=='mhsw') {
             $pengguna = $this->db->query('SELECT t_bimbingan.kategori, t_bimbingan.keterangan, t_materi.id_bimbingan, t_materi.nid,t_materi.nim,t_materi.pertemuan,DATE_FORMAT(tgl_pertemuan, "%e %M  %Y") as tgl_pertemuan,t_materi.tgl_pertemuan as tgl1, t_materi.status,materi_pertemuan,ket_pertemuan,t_mhsw.angkatan,t_dosen.nama_depan as dnd,t_mhsw.nama_depan as mnd   from t_materi left join t_bimbingan on t_bimbingan.id_bimbingan=t_materi.id_bimbingan left join t_dosen on t_dosen.nid= t_materi.nid left join t_mhsw on t_mhsw.nim = t_materi.nim where  t_materi.nim="'.$_SESSION['nim'].'" and t_materi.status="belum disetujui" and t_bimbingan.periode="'.$periode.'"  ')->result_array();
                }
                // print_r($_SESSION['ket']);exit()
                 if ($_SESSION['level']=='dsn') {
              $pengguna = $this->db->query('SELECT t_bimbingan.kategori,t_bimbingan.keterangan, t_materi.id_bimbingan, t_materi.nid,t_materi.nim,t_materi.pertemuan,DATE_FORMAT(tgl_pertemuan, "%e %M  %Y") as tgl_pertemuan,t_materi.tgl_pertemuan as tgl1, t_materi.status,materi_pertemuan,ket_pertemuan,t_dosen.nama_depan as dnd,t_mhsw.nama_depan as mnd ,t_mhsw.angkatan   from t_materi left join t_bimbingan on t_bimbingan.id_bimbingan=t_materi.id_bimbingan left join t_dosen on t_dosen.nid= t_materi.nid left join t_mhsw on t_mhsw.nim = t_materi.nim where  t_materi.nid="'.$_SESSION['nim'].'" and t_materi.status="belum disetujui" and t_bimbingan.periode="'.$periode.'" ')->result_array();
                }
             $datas=array();
             $rkp=array();
             $i=1;
             if (!empty($pengguna)) {
                 #
             if ($pengguna[0]['id_bimbingan']!='' ||$pengguna[0]['id_bimbingan']!=null) {
        
             foreach ($pengguna as $v ) {
             
                
                $dd['number']= $i;
                $dd['id_bimbingan']=$v['id_bimbingan'];
                $dd['tgl1']=$v['tgl1'];
                $dd['kategori']=$v['kategori']; 
                $dd['angkatan']=$v['angkatan']; 
                $dd['nim']=$v['nim']." ".$v['mnd'];
                $dd['nid']=$v['nid']." ".$v['dnd'];
                 $dd['pertemuan2']=$v['pertemuan']; 
                   $dd['keterangan']=$v['keterangan']; 
                $dd['tgl_pertemuan']=$v['tgl_pertemuan'];
                $dd['acti']=$v['mnd'].' & '.$v['dnd'];
                $dd['materi_pertemuan']=$v['materi_pertemuan'];
                $dd['ket_pertemuan']=$v['ket_pertemuan'];
                  $dd['kosong']='';

                 
                 
                if ($v['status']=='belum disetujui') {
                    $dd['status'] = '<div class="badge badge-warning">'.$v['status'].'</div>'; 
                }else if ($v['status']=='disetujui') {
                    $dd['status'] = '<div class="badge badge-success">'.$v['status'].'</div>'; 
                }else{
                    $dd['status'] = '<div class="badge badge-danger">'.$v['status'].'</div>'; 
                }   
               $prog = $this->db->query('SELECT (count(pertemuan)/8)*100 as progress from t_materi  where  t_materi.id_bimbingan="'.$v['id_bimbingan'].'" and t_materi.status="disetujui"')->result_array();
                    if (!empty($prog)) {
                        $dd['progress'] = '<div class="badge badge-warning">'.number_format($prog[0]['progress']).' %</div>';
                    }else{
                        $dd['progress'] = '<div class="badge badge-warning"> 0 %</div>';
                    }
                    
                     $dd['pertemuan'] = '<div class="badge badge-warning">KE '.$v['pertemuan'].'</div>';  
                
                


               if($_SESSION['level']=='mhsw'){
             $dd['btt1']= '<a href="javascript:void(0);" class="edit_record btn btn-warning btn-xs" data-bimbingan="'.$dd['id_bimbingan'].'" >Edit/Detail</a> ';
             }else{
              $dd['btt1']= '<a href="javascript:void(0);" class="edit_record btn btn-warning btn-xs" data-bimbingan="'.$dd['id_bimbingan'].'" >Persetujuan</a> ';  
             } 
             array_push($rkp, $dd);

                $i++;         
             }
                      # code...
             }

             }
             $datas = $rkp;
           
        echo json_encode($datas);
       
    }
    public function getdata_materi_detail() {
       
          $per = $this->db->query('select id_periode from t_periode where status ="aktif"')->result_array();
                if (empty($per)) {
                    $periode='';
                }else{
                     $periode=$per[0]['id_periode'];
                }
                if ($_SESSION['level']=='mhsw') {
             $pengguna = $this->db->query('SELECT t_bimbingan.kategori, t_bimbingan.keterangan, t_materi.id_bimbingan, t_materi.nid,t_materi.nim,t_materi.pertemuan,DATE_FORMAT(tgl_pertemuan, "%e %M  %Y") as tgl_pertemuan,t_materi.tgl_pertemuan as tgl1, t_materi.status,materi_pertemuan,ket_pertemuan,t_mhsw.angkatan,t_dosen.nama_depan as dnd,t_mhsw.nama_depan as mnd   from t_materi left join t_bimbingan on t_bimbingan.id_bimbingan=t_materi.id_bimbingan left join t_dosen on t_dosen.nid= t_materi.nid left join t_mhsw on t_mhsw.nim = t_materi.nim where  t_materi.nim="'.$_SESSION['nim'].'" and t_materi.status="disetujui" and t_bimbingan.periode="'.$periode.'"  ')->result_array();
                }
                // print_r($_SESSION['ket']);exit()
                 if ($_SESSION['level']=='dsn') {
              $pengguna = $this->db->query('SELECT t_bimbingan.kategori,t_bimbingan.keterangan, t_materi.id_bimbingan, t_materi.nid,t_materi.nim,t_materi.pertemuan,DATE_FORMAT(tgl_pertemuan, "%e %M  %Y") as tgl_pertemuan,t_materi.tgl_pertemuan as tgl1, t_materi.status,materi_pertemuan,ket_pertemuan,t_dosen.nama_depan as dnd,t_mhsw.nama_depan as mnd ,t_mhsw.angkatan  from t_materi left join t_bimbingan on t_bimbingan.id_bimbingan=t_materi.id_bimbingan left join t_dosen on t_dosen.nid= t_materi.nid left join t_mhsw on t_mhsw.nim = t_materi.nim where  t_materi.nid="'.$_SESSION['nim'].'" and t_materi.status="disetujui"  and t_bimbingan.periode="'.$periode.'" ')->result_array();
                }
             $datas=array();
             $rkp=array();
             $i=1;
             if (!empty($pengguna)) {
                 #
             if ($pengguna[0]['id_bimbingan']!='' ||$pengguna[0]['id_bimbingan']!=null) {
        
             foreach ($pengguna as $v ) {
             
                
                $dd['number']= $i;
                $dd['id_bimbingan']=$v['id_bimbingan'];
                $dd['tgl1']=$v['tgl1'];
                $dd['kategori']=$v['kategori']; 
                $dd['angkatan']=$v['angkatan']; 
                $dd['nim']=$v['nim']." ".$v['mnd'];
                $dd['nid']=$v['nid']." ".$v['dnd'];
                 $dd['pertemuan2']=$v['pertemuan']; 
                   $dd['keterangan']=$v['keterangan']; 
                $dd['tgl_pertemuan']=$v['tgl_pertemuan'];
                $dd['acti']=$v['mnd'].' & '.$v['dnd'];
                $dd['materi_pertemuan']=$v['materi_pertemuan'];
                $dd['ket_pertemuan']=$v['ket_pertemuan']; 
                $dd['kosong']='';
                 
                 
                if ($v['status']=='belum disetujui') {
                    $dd['status'] = '<div class="badge badge-warning">'.$v['status'].'</div>'; 
                }else if ($v['status']=='disetujui') {
                    $dd['status'] = '<div class="badge badge-success">'.$v['status'].'</div>'; 
                }else{
                    $dd['status'] = '<div class="badge badge-danger">'.$v['status'].'</div>'; 
                }   
              $prog = $this->db->query('SELECT (count(pertemuan)/8)*100 as progress from t_materi  where  t_materi.id_bimbingan="'.$v['id_bimbingan'].'" and t_materi.status="disetujui"')->result_array();
                    if (!empty($prog)) {
                        $dd['progress'] = '<div class="badge badge-warning">'.number_format($prog[0]['progress']).' %</div>';
                    }else{
                        $dd['progress'] = '<div class="badge badge-warning"> 0 %</div>';
                    }
                     $dd['pertemuan'] = '<div class="badge badge-warning">KE '.$v['pertemuan'].'</div>';
                     
                
                


               
             $dd['btt1']= '<a href="javascript:void(0);" class="edit_record btn btn-warning btn-xs" data-bimbingan="'.$dd['id_bimbingan'].'" >  Detail </a> ';
              
             array_push($rkp, $dd);

                $i++;         
             }
                      # code...
             }

             }
             $datas = $rkp;
           
        echo json_encode($datas);
       
    }
     public function getdata_materi_rekap() {
       
          $per = $this->db->query('select id_periode from t_periode where status ="aktif"')->result_array();
                if (empty($per)) {
                    $periode='';
                }else{
                     $periode=$per[0]['id_periode'];
                }
                if ($_SESSION['level']=='mhsw') {
             $pengguna = $this->db->query('SELECT t_bimbingan.kategori, t_bimbingan.keterangan, t_materi.id_bimbingan, t_materi.nid,t_materi.nim,t_materi.pertemuan,DATE_FORMAT(tgl_pertemuan, "%e %M  %Y") as tgl_pertemuan,t_materi.tgl_pertemuan as tgl1, t_materi.status,materi_pertemuan,ket_pertemuan,t_mhsw.angkatan,t_dosen.nama_depan as dnd,t_mhsw.nama_depan as mnd   from t_materi left join t_bimbingan on t_bimbingan.id_bimbingan=t_materi.id_bimbingan left join t_dosen on t_dosen.nid= t_materi.nid left join t_mhsw on t_mhsw.nim = t_materi.nim where  t_materi.nim="'.$_SESSION['nim'].'" and t_materi.status="disetujui" and t_bimbingan.periode="'.$periode.'"  ')->result_array();
                }
                // print_r($_SESSION['ket']);exit()
                 if ($_SESSION['level']=='dsn' ) {
              $pengguna = $this->db->query('SELECT t_bimbingan.kategori,t_bimbingan.keterangan, t_materi.id_bimbingan, t_materi.nid,t_materi.nim,max(t_materi.pertemuan) as pertemuan,DATE_FORMAT(tgl_pertemuan, "%e %M  %Y") as tgl_pertemuan,t_materi.tgl_pertemuan as tgl1, t_materi.status,materi_pertemuan,ket_pertemuan,t_dosen.nama_depan as dnd,t_mhsw.nama_depan as mnd ,t_mhsw.angkatan  from t_materi left join t_bimbingan on t_bimbingan.id_bimbingan=t_materi.id_bimbingan left join t_dosen on t_dosen.nid= t_materi.nid left join t_mhsw on t_mhsw.nim = t_materi.nim where t_materi.nid="'.$_SESSION['nim'].'" and   t_materi.status="disetujui" and t_bimbingan.periode="'.$periode.'"  group by id_bimbingan   ')->result_array();
                }
              //   if ($_SESSION['level']=='dsn' && $_SESSION['ket']=='kajur' ||  $_SESSION['ket']=='koordinator') {
              // $pengguna = $this->db->query('SELECT t_bimbingan.kategori,t_bimbingan.keterangan, t_materi.id_bimbingan, t_materi.nid,t_materi.nim,max(t_materi.pertemuan) as pertemuan,DATE_FORMAT(tgl_pertemuan, "%e %M  %Y") as tgl_pertemuan,t_materi.tgl_pertemuan as tgl1, t_materi.status,materi_pertemuan,ket_pertemuan,t_dosen.nama_depan as dnd,t_mhsw.nama_depan as mnd ,t_mhsw.angkatan  from t_materi left join t_bimbingan on t_bimbingan.id_bimbingan=t_materi.id_bimbingan left join t_dosen on t_dosen.nid= t_materi.nid left join t_mhsw on t_mhsw.nim = t_materi.nim where   t_materi.status="disetujui"  group by id_bimbingan  ')->result_array();
              //   }
             $datas=array();
             $rkp=array();
             $i=1;
             // print_r($pengguna);exit();
             if (!empty($pengguna)) {
                 #
             if ($pengguna[0]['id_bimbingan']!='' ||$pengguna[0]['id_bimbingan']!=null) {
        
             foreach ($pengguna as $v ) {
             
                
                $dd['number']= $i;
                $dd['id_bimbingan']=$v['id_bimbingan'];
                $dd['tgl1']=$v['tgl1'];
                $dd['kategori']=$v['kategori']; 
                $dd['angkatan']=$v['angkatan']; 
                $dd['nim']=$v['nim']." ".$v['mnd'];
                $dd['nid']=$v['nid'];
                 $dd['pertemuan2']=$v['pertemuan']; 
                   $dd['keterangan']=$v['keterangan']; 
                $dd['tgl_pertemuan']=$v['tgl_pertemuan'];
                $dd['acti']=$v['mnd'].' & '.$v['dnd'];
                $dd['materi_pertemuan']=$v['materi_pertemuan'];
                $dd['ket_pertemuan']=$v['ket_pertemuan']; 
                $dd['kosong']=''; 
                 
                 
                if ($v['status']=='belum disetujui') {
                    $dd['status'] = '<div class="badge badge-warning">'.$v['status'].'</div>'; 
                }else if ($v['status']=='disetujui') {
                    $dd['status'] = '<div class="badge badge-success">'.$v['status'].'</div>'; 
                }else{
                    $dd['status'] = '<div class="badge badge-danger">'.$v['status'].'</div>'; 
                }   
               $prog = $this->db->query('SELECT (count(pertemuan)/8)*100 as progress from t_materi  where  t_materi.id_bimbingan="'.$v['id_bimbingan'].'" and t_materi.status="disetujui"')->result_array();
                    if (!empty($prog)) {
                        $dd['progress'] = '<div class="badge badge-warning">'.number_format($prog[0]['progress']).' %</div>';
                    }else{
                        $dd['progress'] = '<div class="badge badge-warning"> 0 %</div>';
                    }
                     $dd['pertemuan'] = '<div class="badge badge-warning">KE '.$v['pertemuan'].'</div>';
                
                


               
             $dd['btt1']= '<a href="javascript:void(0);" class="edit_record btn btn-warning btn-xs" data-bimbingan="'.$dd['id_bimbingan'].'" >  Detail </a> ';
              
             array_push($rkp, $dd);

                $i++;         
             }
                      # code...
             }

             }
             $datas = $rkp;
           
        echo json_encode($datas);
       
    }
    public function getdata_materi_rekap2() {
       
         
                
                // print_r($_SESSION['ket']);exit()
                 
              $per = $this->db->query('select id_periode from t_periode where status ="aktif"')->result_array();
                if (empty($per)) {
                    $periode='';
                }else{
                     $periode=$per[0]['id_periode'];
                }
              $pengguna = $this->db->query('SELECT t_bimbingan.kategori,t_bimbingan.keterangan, t_materi.id_bimbingan, t_materi.nid,t_materi.nim,max(t_materi.pertemuan) as pertemuan,DATE_FORMAT(tgl_pertemuan, "%e %M  %Y") as tgl_pertemuan,t_materi.tgl_pertemuan as tgl1, t_materi.status,materi_pertemuan,ket_pertemuan,t_dosen.nama_depan as dnd,t_mhsw.nama_depan as mnd ,t_mhsw.angkatan  from t_materi left join t_bimbingan on t_bimbingan.id_bimbingan=t_materi.id_bimbingan left join t_dosen on t_dosen.nid= t_materi.nid left join t_mhsw on t_mhsw.nim = t_materi.nim where   t_materi.status="disetujui" and t_bimbingan.periode="'.$periode.'" group by id_bimbingan  ')->result_array();
          
             $datas=array();
             $rkp=array();
             $i=1;
             // print_r($pengguna);exit();
             if (!empty($pengguna)) {
                 #
             if ($pengguna[0]['id_bimbingan']!='' ||$pengguna[0]['id_bimbingan']!=null) {
        
             foreach ($pengguna as $v ) {
             
                
                $dd['number']= $i;
                $dd['id_bimbingan']=$v['id_bimbingan'];
                $dd['tgl1']=$v['tgl1'];
                $dd['kategori']=$v['kategori']; 
                $dd['angkatan']=$v['angkatan']; 
                $dd['nim']=$v['nim']." ".$v['mnd'];
                $dd['nid']=$v['nid'];
                 $dd['pertemuan2']=$v['pertemuan']; 
                   $dd['keterangan']=$v['keterangan']; 
                $dd['tgl_pertemuan']=$v['tgl_pertemuan'];
                $dd['acti']=$v['mnd'].' & '.$v['dnd'];
                $dd['materi_pertemuan']=$v['materi_pertemuan'];
                $dd['ket_pertemuan']=$v['ket_pertemuan']; 
                $dd['kosong']='';
                 
                 
                if ($v['status']=='belum disetujui') {
                    $dd['status'] = '<div class="badge badge-warning">'.$v['status'].'</div>'; 
                }else if ($v['status']=='disetujui') {
                    $dd['status'] = '<div class="badge badge-success">'.$v['status'].'</div>'; 
                }else{
                    $dd['status'] = '<div class="badge badge-danger">'.$v['status'].'</div>'; 
                }   
               $prog = $this->db->query('SELECT (count(pertemuan)/8)*100 as progress from t_materi  where  t_materi.id_bimbingan="'.$v['id_bimbingan'].'" and t_materi.status="disetujui"')->result_array();
                    if (!empty($prog)) {
                        $dd['progress'] = '<div class="badge badge-warning">'.number_format($prog[0]['progress']).' %</div>';
                    }else{
                        $dd['progress'] = '<div class="badge badge-warning"> 0 %</div>';
                    }
                     $dd['pertemuan'] = '<div class="badge badge-warning">KE '.$v['pertemuan'].'</div>';
                
                


               
             $dd['btt1']= '<a href="javascript:void(0);" class="edit_record btn btn-warning btn-xs" data-bimbingan="'.$dd['id_bimbingan'].'" >  Detail </a> ';
              
             array_push($rkp, $dd);

                $i++;         
             }
                      # code...
             }

             }
             $datas = $rkp;
           
        echo json_encode($datas);
       
    }
    public function getdata_bimbingan2() {
       
         
               $per = $this->db->query('select id_periode from t_periode where status ="aktif"')->result_array();
                if (empty($per)) {
                    $periode='';
                }else{
                     $periode=$per[0]['id_periode'];
                }
             $pengguna = $this->db->query('SELECT t_bimbingan.id_bimbingan,t_bimbingan.keterangan,t_bimbingan.nim,t_bimbingan.nid,t_mhsw.nama_depan as mnd,t_dosen.nama_depan as dnd,t_bimbingan.kategori,t_bimbingan.status from t_bimbingan left join t_mhsw on t_mhsw.nim=t_bimbingan.nim Left join t_dosen on t_dosen.nid = t_bimbingan.nid  where t_bimbingan.periode="'.$periode.'" ')->result_array();            
            
             $datas=array();
             $rkp=array();
             $i=1;
             foreach ($pengguna as $v ) {
             
                
                $dd['number']= $i;
                $dd['id_bimbingan']=$v['id_bimbingan'];
                $dd['nim']=$v['nim']." ".$v['mnd'];
                $dd['nid']=$v['nid']." ".$v['dnd'];
                $dd['kat']=$v['kategori']; 
                 $dd['keterangan']=$v['keterangan'];
                $dd['status']=$v['status'];
                if ($v['status']=='belum disetujui') {
                    $dd['ket'] = '<div class="badge badge-warning">'.$v['status'].'</div>'; 
                }else if ($v['status']=='disetujui') {
                    $dd['ket'] = '<div class="badge badge-success">'.$v['status'].'</div>'; 
                }else{
                    $dd['ket'] = '<div class="badge badge-danger">'.$v['status'].'</div>'; 
                }   
                


                if ($v['kategori']=='TA1') {
                    $dd['kategori'] = '<div class="badge badge-warning">'.$v['kategori'].'</div>'; 
                }else{
                    $dd['kategori'] = '<div class="badge badge-primary">'.$v['kategori'].'</div>'; 
                 
                }
                
             $dd['btt1']= '<a href="javascript:void(0);" class="edit_record btn btn-warning btn-xs" data-bimbingan="'.$dd['id_bimbingan'].'" >  Detail </a> ';
              
             array_push($rkp, $dd);

                $i++;         
             }
             $datas = $rkp;
           
        echo json_encode($datas);
       
    }
     function delete()
    {
     
          
        	 
            
                $id = $this->input->post('nim');

                $del = $this->db->query("delete from t_bimbingan where id_bimbingan='".$id."'");
               

                 echo json_encode($del);
     }    
      function delete_materi()
    {
     
          
             
            
                $r0 = $this->input->post('id');
                $r3 = $this->input->post('id2');
                $r1 = $this->input->post('id3');

                $del = $this->db->query('delete from t_materi   where id_bimbingan="'.trim($r0).'" and pertemuan="'.$r3.'"  and nid="'.$r1.'" ');
               

                 echo json_encode($del);
     }        
	 function save_bimbingan()
    {
      //s
          $this->load->library('session');
        	 
            		     
        $date=date('my');
        $hit=1;
        
         $ada=0;
         while($ada==0)  {
               $hi=   str_pad($hit,3, "0", STR_PAD_LEFT);   
        //$unik=format($hit,'0000');
        $kode= "B".$date.$hi;
       // print_r($kode);exit();
           $query = $this->db->query(' SELECT id_bimbingan from t_bimbingan 
                           WHERE id_bimbingan = "'.$kode.'"  ');

       $x =$query->result();
        if (!empty($x)) {
            $ada=0;
            $hit++;

           
        
        } else{
            $ada=1;
            break;
        }
   
     

      }   
       $per = $this->db->query('select id_periode from t_periode where status ="aktif"')->result_array();
                if (empty($per)) {
                    $periode='';
                }else{
                     $periode=$per[0]['id_periode'];
                }
                $r0 = $kode;
                $r1 = $this->input->post('nid');
                 $r1b = $this->input->post('id_bimbingan');
                $r2 = $_SESSION['nim'];
                $r3 = $this->input->post('kategori');
                $r4 = $this->input->post('keterangan');
                $sts='belum disetujui';
                $kondisi = $this->input->post('kondisi');
               

              	 
                 $Info = array(
                    'id_bimbingan' => $r0,
                    'kategori' => $r3,
                    'nim' => $r2,
                    'nid' => $r1 ,
                    'keterangan'=>$r4,
                    'status'=>'belum disetujui',
                    'periode'=>$periode
                ); 
                
                 $Info2 = array(
                    
                   'kategori' => $r3,
                    'nim' => $r2,
                    'nid' => $r1 ,
                    'keterangan'=>$r4,
                    'status'=>'belum disetujui',
                    'periode'=>$periode
                );
                 // print_r($Info);exit();
                    // print_r($r0);exit();
                  $cek2 = $this->db->query('SELECT * from t_bimbingan where nim="'.trim($r2).'" and keterangan="'.$r4.'" and status="disetujui" and periode="'.$periode.'" ')->result_array();
                  if (!empty($cek2)) {
                  		 $this->session->set_flashdata('ada', 'Pn');
                 	 	// print_r($_SESSION);exit();
                 	 redirect('C_bimbingan');
                  }
              	if ($kondisi=='new') {
              
                 $cek = $this->db->query('SELECT * from t_bimbingan where id_bimbingan="'.trim($r0).'"  ')->result_array();
                  // print_r($cek);exit();
                 if (!empty($cek)) {
                 	// echo "disini";exit();
                 	 $this->session->set_flashdata('nim', 'Pn');
                 	 	// print_r($_SESSION);exit();
                 	 redirect('C_bimbingan');
                 }else{
                 	$this->load->model(array('M_bimbingan'));
                 	 $result = $this->M_bimbingan->adbimbingan($Info);
                 		 

                 	 

                 	 if ($result>0) {
                 	 		$this->session->set_flashdata('suc', 'Ps');
                 	 			// print_r($_SESSION);exit();
                 	 		redirect('C_bimbingan');
                 	 }
                 }
                		# code...
              	}else{
                    $cek3 = $this->db->query('SELECT * from t_bimbingan  where id_bimbingan="'.trim($r1b).'"')->result_array();
                  if (!empty($cek3)) { 

                       $result = $this->M_bimbingan->update_bimbingan($r1b,$Info2);
                  } 
              		
              	 
              		 
                 	 		$this->session->set_flashdata('suc', 'Ps');
                 	 			// print_r($_SESSION);exit();
                 	 		redirect('C_bimbingan');
                 	 
              	}
                 
                 	
                 	 
                 	              
                
            
        
    }
    function save_materi()
    {
      //s
          $this->load->library('session');
             
         
                $r0 = $this->input->post('id_bimbingan');
                $r1 = $this->input->post('nid');
                $r2 = $_SESSION['nim'];
                $r3 = $this->input->post('pertemuan');
                $r4 = $this->input->post('tgl');
                $r5 = $this->input->post('materi');
                $r6 = $this->input->post('ket');
                $sts='belum disetujui';
                $kondisi = $this->input->post('kondisi');
               

                 
                 $Info = array(
                    'id_bimbingan' => $r0,
                    'nid' => $r1,
                    'nim' => $r2,
                    'pertemuan' => $r3 ,
                    'tgl_pertemuan'=>$r4,
                    'status'=>'belum disetujui',
                    'materi_pertemuan'=>$r5,
                    'ket_pertemuan'=>$r6,
                ); 
                
                 $Info2 = array(
                    
                   'nid' => $r1,
                    'nim' => $r2,
                    'pertemuan' => $r3 ,
                    'tgl_pertemuan'=>$r4,
                    'status'=>'belum disetujui',
                    'materi_pertemuan'=>$r5,
                    'ket_pertemuan'=>$r6,
               
                );

                 // print_r($r3);exit();
                 if ($r3>1) {
                     
                
                         for ($i=1; $i <=8 ; $i++) { 
                             $cek233 = $this->db->query('SELECT pertemuan from t_materi where id_bimbingan="'.trim($r0).'" and pertemuan="'.$i.'"  and nid="'.$r1.'" and nim="'.$r2.'"  ')->result_array();
                             if (empty($cek233)) {
                                // echo "kosong<br>";

                                    if ($i==$r3) {
                                         
                                        break;
                                    }else{
                                       
                                            $this->session->set_flashdata('kosong', 'Pn');
                        // print_r($_SESSION);exit();
                                     redirect('C_bimbingan/v_materi'); 
                                    }
                                // $this->session->set_flashdata('kosong', 'Pn');
                        // print_r($_SESSION);exit();
                             // redirect('C_bimbingan/v_materi');
                             }else{
                                 $j=$i;
                                echo $j;
                                echo "<br>";
                                if ($i==$r3) {
                                         
                                        break;
                                    }
                               
                             }
                             
                         }
                  }
                 
                // exit();

                  $cek2 = $this->db->query('SELECT * from t_materi where id_bimbingan="'.trim($r0).'" and pertemuan="'.$r3.'"  and nid="'.$r1.'" and nim="'.$r2.'" and status="disetujui"  ')->result_array();
                  if (!empty($cek2)) {
                         $this->session->set_flashdata('ada', 'Pn');
                        // print_r($_SESSION);exit();
                     redirect('C_bimbingan/v_materi');
                  }
                if ($kondisi=='new') {
              
                 $cek = $this->db->query('SELECT * from t_materi where id_bimbingan="'.trim($r0).'" and nid="'.$r1.'"  and pertemuan="'.$r3.'" and nim="'.$r2.'"  ')->result_array();
                  // print_r($cek);exit();
                 if (!empty($cek)) {
                    // echo "disini";exit();
                     $this->session->set_flashdata('nim', 'Pn');
                        // print_r($_SESSION);exit();
                     redirect('C_bimbingan/v_materi');
                 }else{
                    $this->load->model(array('M_bimbingan'));
                     $result = $this->M_bimbingan->admateri($Info);
                         

                     

                     if ($result>0) {
                            $this->session->set_flashdata('suc', 'Ps');
                                // print_r($_SESSION);exit();
                            redirect('C_bimbingan/v_materi');
                     }
                 }
                        # code...
                }else{

                    $result = $this->M_bimbingan->update_materi($r0,$r1,$r3,$r2,$Info2);
                 
                     if ($result>0) {
                            $this->session->set_flashdata('suc', 'Ps');
                                // print_r($_SESSION);exit();
                            redirect('C_bimbingan/v_materi');
                     }
                }
                 
                    
                     
                                  
                
            
        
    }
    function save_materi_dosen()
    {
      //s
          $this->load->library('session');
             
         
                $r0 = $this->input->post('id_bimbingan');
                $r1 = $this->input->post('nim');
                $r2 = $_SESSION['nim'];
                $r3 = $this->input->post('persetujuan');
                $r4 = $this->input->post('pertemuan');

                 
                
                
                 $Info2 = array(
                   
                    'status'=>$r3,
 
                );
                
                    $result = $this->M_bimbingan->update_materi($r0,$r2,$r4,$r1,$Info2);
                 
                     if ($result>0) {
                            $this->session->set_flashdata('suc', 'Ps');
                                // print_r($_SESSION);exit();
                            redirect('C_bimbingan/v_materi_dosen');
                     }
              
                 
                    
                     
                                  
                
            
        
    }
     function save_bimbingan_dosen()
    {
      //s
          $this->load->library('session');
       
             
                $r1 = $this->input->post('id_bimbingan');
                $r2 = $this->input->post('setuju');
                
               

              	 
                 $Info = array(
                    'status' => $r2,
                ); 
                
              

              		$result = $this->M_bimbingan->update_bimbingan_dosen($r1,$Info);
              	 
              		 if ($result>0) {
                 	 		$this->session->set_flashdata('suc', 'Ps');
                 	 			// print_r($_SESSION);exit();
                 	 		redirect('C_bimbingan/get_mhs');
            		}
                 
                 	
                 	 
                 	              
                
            
        
    }

	
}