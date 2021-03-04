<?php 

class C_user extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('M_User'); 
        $this->load->helper('url'); 
	}

	function index(){
		$data['linibisnis'] = $this->M_User->tampil_data_LiniBisnis()->result();
		$data['about'] = $this->M_User->tampil_data_About()->result();
		$data['visimisi'] = $this->M_User->tampil_data_VisiMisi()->result();
		$this->load->view('U_Tampil',$data);
	}
	function login(){
		$this->load->view('v_login');
	}

}