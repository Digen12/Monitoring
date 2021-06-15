<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	 public function __construct()
    {
        parent::__construct();
        
         $this->load->helper('url');
         // $this->load->library('datatables');
         $this->load->library('session');
         $this->load->model('M_login');
         $this->load->model(array('M_login'));
         $this->db = $this->load->database('mb', TRUE);
        
    }
    
	public function index() {
		$data = array(
			'title' => "Monitoring"
		);
		// $this->load->view('dist/index', $data);
		redirect('Login/auth_login');
	}
	public function auth_login() {
		$data = array(
			'title' => "Login"
		);
		$this->load->view('login/auth-login2', $data);
	}
	public function auth_register() {
		   $this->load->library('session');
		$data = array(
			'title' => "Register"
		);
		$this->load->view('login/auth-register', $data);
	}
	 function save_regis()
    {
      //s
          $this->load->library('session');
        	 
            
                $r0 = $this->input->post('frist_name');
                $r1 = $this->input->post('last_name');
                $r2 = $this->input->post('nim');
                $r3 = $this->input->post('hp');
                $r4 = $this->input->post('password');
                $r4a = $this->input->post('password2');
                $r5 = $this->input->post('alamat');
                $r6 = $this->input->post('jk');
                $r7 = $this->input->post('angkatan');
                $lvl = 'mhsw';

              	if ($r4a!=$r4) {
              		 		$this->session->set_flashdata('pass', 'P');
                             
                			redirect('login/auth_register');
              	}
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
              
                 $cek = $this->db->query('SELECT * from t_mhsw where nim="'.trim($r2).'" ')->result_array();
                  // print_r($r0);exit();
                 if (!empty($cek)) {
                 	// echo "disini";exit();
                 	 $this->session->set_flashdata('nim', 'P');
                 	 redirect('login/auth_register');
                 }else{
                 	$this->load->model(array('M_login'));
                 	 $result = $this->M_login->admhs($Info);
                 		 

                 	 $this->M_login->aduser($user);

                 	 if ($result>0) {
                 	 		$this->session->set_flashdata('suc', 'P');
                 	 		redirect('login/auth_register');
                 	 }
                 }
                
                 
                 	
                 	 
                 	              
                
            
        
    }
    public function loginMe()
    {
       
            $username = $this->input->post('username');
            $level = $this->input->post('level');
             //print_r($distre);exit();
            $password = $this->input->post('password');
          
             $result = $this->M_login->loginMe($username, $password,$level);
                
            // print_r($result);exit();
            if(count($result) > 0)
            {
                foreach ($result as $res)
                {
                    $s_login = array('nim'=>$res->id_user,                    
                                            'level'=>$res->level,
                                            'ket'=>$res->keterangan,
                                            'isLoggedIn' => TRUE
                                    );
                                    
                                //print_r($sessionArray);exit();
                    $this->session->set_userdata($s_login);
                    
                    redirect('/dashboard');
                }
            }
            else
            {
                $this->session->set_flashdata('er2', 'Username/Password/ Salah');
                
                redirect('login/auth_login');
            }
            
            // print_r($email);print_r($distre);print_r($password);exit();
          
        
    }

		public function logout(){
			$this->session->unset_userdata(array(
				'nim',
				'level',
				'isLoggedIn'
			));
			redirect('login');
		}
	
}
