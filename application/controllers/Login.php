<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login'); 

	} 

	function index(){
		$this->load->view('v_login'); 
	}

	function dasboard(){
		$this->load->view('Dasboard');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->m_login->cek_login("pengguna",$where)->num_rows();
		if($cek > 0){		
			$this->load->view('Dasboard');
		}else{
			echo "Username dan password salah !";
		}
		// $this->load->view('Dasboard');
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('Login'));
	}
}


