<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dist extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        
         $this->load->helper('url');
         // $this->load->library('datatables');
         $this->load->library('session');
         $this->load->model('M_login');
         $this->load->model(array('M_login'));
         $this->db = $this->load->database('mb', TRUE);
         // $s_nim = $_SESSION['nim'];
         // $loggin =$_SESSION['isLoggedIn'];
         // $s_level = $_SESSION['level'];
        
    }
    
	 
	public function index() {

		$data = array();
			 
		$d['title']  = "";
		$d['nim']  = $_SESSION['nim'];
		$d['ket']  = $_SESSION['ket'];
		$d['level']  = $_SESSION['level'];
		$d['user']  = $this->db->query('select count(*) as user from t_user ')->result_array()[0]['user'];
		$d['dsn'] = $this->db->query('select count(*) as dosen from t_dosen ')->result_array()[0]['dosen'];
		$d['mhsw'] = $this->db->query('select count(*) as mhse from t_mhsw ')->result_array()[0]['mhse'];
		$d['survei'] = $this->db->query('select count(*) as survei from t_survei ')->result_array()[0]['survei'];

		array_push($data,$d);
		// print_r($data[0]);exit();
		if (isset($_SESSION['nim'])) {
			 	$this->load->view('index-0', $data[0]);
		}else{
			redirect('login');
		}
		
	}

 
}
