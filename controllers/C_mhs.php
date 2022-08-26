<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_mhs extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        
         $this->load->helper('url');
         // $this->load->library('datatables');
         $this->load->library('session');
         $this->load->model('M_mhs');
         $this->load->model(array('M_mhs'));
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
			 	$this->load->view('v_mhs', $data);
		}else{
			redirect('login');
		}
		
	}
	public function getdata_mhs() {
       
         $rcds = $this->db->query('SELECT count(*) as totals from t_dosen ')->result_array()[0]['totals'];
          
             $pengguna = $this->db->query('SELECT nim,nama_depan,nama_belakang,hp,alamat,jenis_kelamin,angkatan,t_mhsw.keterangan,t_user.password from t_mhsw left join t_user on t_mhsw.nim = t_user.id_user ')->result_array();
             $datas=array();
             $rkp=array();
             $i=1;
             foreach ($pengguna as $v ) {
             
                
                $dd['number']= $i;
                $dd['nim']=$v['nim'];
                $dd['nama']=$v['nama_depan']." ".$v['nama_belakang'] ;
                $dd['hp']=$v['hp'];
                $dd['alamat']=$v['alamat'];
                $dd['angkatan']=$v['angkatan'];
                $dd['jenis_kelamin']=$v['jenis_kelamin'];
                $dd['password']=$v['password'];
            
             $dd['btt1']= '<a href="javascript:void(0);" class="edit_record btn btn-warning btn-xs" data-nim="'.$dd['nim'].'" >  Detail </a> ';
              
             array_push($rkp, $dd);

                $i++;         
             }
             $datas = $rkp;
           
        echo json_encode($datas);
       
    }
     function delete()
    {
     
          
        	 
            
                $id = $this->input->post('nim');

                $del = $this->db->query("delete from t_mhsw where nim='".$id."'");
                $del = $this->db->query("delete from t_user where id_user='".$id."'");

                 echo json_encode($del);
     }           
	 function save_mhs()
    {
      //s
          $this->load->library('session');
        	 
            
                $r0 = $this->input->post('frist_name');
                $r1 = $this->input->post('last_name');
                $r2 = $this->input->post('nim');
                $r3 = $this->input->post('hp');
                $r4 = $this->input->post('password');
                $r5 = $this->input->post('alamat');
                $r6 = $this->input->post('jk');
                $r7 = $this->input->post('angkatan');
                $kondisi = $this->input->post('kondisi');
                $lvl = 'mhsw';

              	 
                 $Info = array(
                    'nama_depan' => $r0,
                    'nama_belakang' => $r1,
                    'nim' => $r2,
                    'hp' => $r3,
                    'alamat' => $r5,
                    'jenis_kelamin' => $r6,
                    'angkatan' => $r7,
                    'keterangan' => $lvl
                ); 
                 $user = array(
                 		"id_user"=>$r2,
                 		"password"=>$r4,
                 		"level"=>$lvl,
                 		"keterangan"=>$lvl

                 );
                  $Info2 = array(
                    'nama_depan' => $r0,
                    'nama_belakang' => $r1,
                    'hp' => $r3,
                    'alamat' => $r5,
                    'jenis_kelamin' => $r6,
                    'angkatan' => $r7,
                    'keterangan' => $lvl
                ); 
                 $user2 = array(
                 		"password"=>$r4,
                 		"level"=>$lvl,
                 		"keterangan"=>$lvl

                 );
              	if ($kondisi=='new') {
              
                 $cek = $this->db->query('SELECT * from t_mhsw where nim="'.trim($r2).'" ')->result_array();
                  // print_r($r0);exit();
                 if (!empty($cek)) {
                 	// echo "disini";exit();
                 	 $this->session->set_flashdata('nim', 'Pn');
                 	 	// print_r($_SESSION);exit();
                 	 redirect('C_mhs');
                 }else{
                 	$this->load->model(array('M_mhs'));
                 	 $result = $this->M_mhs->admhs($Info);
                 		 

                 	 $this->M_login->aduser($user);

                 	 if ($result>0) {
                 	 		$this->session->set_flashdata('suc', 'Ps');
                 	 			// print_r($_SESSION);exit();
                 	 		redirect('C_mhs');
                 	 }
                 }
                		# code...
              	}else{

              		$result = $this->M_mhs->update_mhs($r2,$Info2);
              		$this->M_mhs->update_user($r2,$user2);
              		 if ($result>0) {
                 	 		$this->session->set_flashdata('suc', 'Ps');
                 	 			// print_r($_SESSION);exit();
                 	 		redirect('C_mhs');
                 	 }
              	}
                 
                 	
                 	 
                 	              
                
            
        
    }

	
}