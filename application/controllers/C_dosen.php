<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dosen extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        
         $this->load->helper('url');
         // $this->load->library('datatables');
         $this->load->library('session');
         $this->load->model('M_dosen');
         $this->load->model(array('M_dosen'));
         $this->load->model('M_login');
         $this->load->model(array('M_login'));
         $this->db = $this->load->database('mb', TRUE);
         // $s_nim = $_SESSION['nim'];
         // $loggin =$_SESSION['isLoggedIn'];
         // $s_level = $_SESSION['level'];
        
    }
    
 

	public function index() {
		$this->load->library('session');

		$data = array(
			'title' => "",
			'nim' =>$_SESSION['nim'],
			'level'=>$_SESSION['level'],'ket'=>$_SESSION['ket']
		);
		if (isset($_SESSION['nim'])) {
			 	$this->load->view('v_dosen', $data);
		}else{
			redirect('login');
		}
		
	}
	public function getdata_dosen() {
       
         $rcds = $this->db->query('SELECT count(*) as totals from t_dosen ')->result_array()[0]['totals'];
          
             $pengguna = $this->db->query('SELECT nid,nama_depan,nama_belakang,hp,alamat,struktur,jenis_kelamin,t_dosen.keterangan,t_dosen.level,t_user.password from t_dosen left join t_user on t_dosen.nid = t_user.id_user ')->result_array();
             $datas=array();
             $rkp=array();
             $i=1;
             foreach ($pengguna as $v ) {
             
                
                $dd['number']= $i;
                $dd['nid']=$v['nid'];
                $dd['nama']=$v['nama_depan']." ".$v['nama_belakang'] ;
                $dd['hp']=$v['hp'];
                $dd['struktur']=$v['struktur'];
                $dd['keterangan']=$v['level'];
                $dd['jenis_kelamin']=$v['jenis_kelamin'];
                $dd['password']=$v['password'];
                $dd['alamat']=$v['alamat'];
            
             $dd['btt1']= '<a href="javascript:void(0);" class="edit_record btn btn-warning btn-xs" data-nid="'.$dd['nid'].'" >  Detail </a> ';
              $dd['btt2']= '<a href="javascript:void(0);" class="dlt_record btn btn-danger btn-xs" data-nid="'.$dd['nid'].'" ><i class="fa fa-wrench"> Delete </i></a> ';
             array_push($rkp, $dd);

                $i++;         
             }
             $datas = $rkp;
           
        echo json_encode($datas);
       
    }
     function delete()
    {
     
          
        	 
            
                $id = $this->input->post('nid');

                $del = $this->db->query("delete from t_dosen where nid='".$id."'");
                $del = $this->db->query("delete from t_user where id_user='".$id."'");

                 echo json_encode($del);
     }           
	 function save_dosen()
    {
      //s
          $this->load->library('session');
        	 
            
                $r0 = $this->input->post('frist_name');
                $r1 = $this->input->post('last_name');
                $r2 = $this->input->post('nid');
                $r3 = $this->input->post('hp');
                $r4 = $this->input->post('password');
                $r5 = $this->input->post('alamat');
                $r6 = $this->input->post('jk');
                $r7 = $this->input->post('sebagai');
                $r8 = $this->input->post('struktur');
                $kondisi = $this->input->post('kondisi');
                $lvl = 'dsn';

              	 
                 $Info = array(
                    'nama_depan' => $r0,
                    'nama_belakang' => $r1,
                    'nid' => $r2,
                    'hp' => $r3,
                    'alamat' => $r5,
                    'jenis_kelamin' => $r6,
                    'level' => $r7,
                    'struktur' => $r8,
                    'keterangan' => $lvl
                ); 
                 $user = array(
                 		"id_user"=>$r2,
                 		"password"=>$r4,
                 		"level"=>$lvl,
                 		"keterangan"=>$r8

                 );
                  $Info2 = array(
                    'nama_depan' => $r0,
                    'nama_belakang' => $r1,
                    'hp' => $r3,
                    'alamat' => $r5,
                    'jenis_kelamin' => $r6,
                    'level' => $r7,
                    'struktur' => $r8,
                    'keterangan' => $lvl
                ); 
                 $user2 = array(
                 		"password"=>$r4,
                 		"level"=>$lvl,
                 		"keterangan"=>$r8

                 );
              	if ($kondisi=='new') {
              
                 $cek = $this->db->query('SELECT * from t_dosen where nid="'.trim($r2).'" ')->result_array();
                  // print_r($r0);exit();
                 if (!empty($cek)) {
                 	// echo "disini";exit();
                 	 $this->session->set_flashdata('nid', 'Pn');
                 	 	// print_r($_SESSION);exit();
                 	 redirect('C_dosen');
                 }else{
                 	$this->load->model(array('M_dosen'));
                 	 $result = $this->M_dosen->addsn($Info);
                 		 

                 	 $this->M_login->aduser($user);

                 	 if ($result>0) {
                 	 		$this->session->set_flashdata('suc', 'Ps');
                 	 			// print_r($_SESSION);exit();
                 	 		redirect('C_dosen');
                 	 }
                 }
                		# code...
              	}else{

              		$result = $this->M_dosen->update_dosen($r2,$Info2);
              		$this->M_dosen->update_user($r2,$user2);
              		 if ($result>0) {
                 	 		$this->session->set_flashdata('suc', 'Ps');
                 	 			// print_r($_SESSION);exit();
                 	 		redirect('C_dosen');
                 	 }
              	}
                 
                 	
                 	 
                 	              
                
            
        
    }

	
}