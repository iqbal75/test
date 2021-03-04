<?php 

class C_Pengguna extends CI_Controller{ 
	function __construct(){
		parent::__construct();		
		$this->load->model('M_Pengguna');
        $this->load->helper(array('form', 'url')); 
	}

	function index(){
		$data['pengguna'] = $this->M_Pengguna->tampil_data()->result();
		$this->load->view('T_Pengguna',$data);
	}

	function Upload_Image(){
		$config['upload_path']          = './gambar/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 3000;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
 
	$this->load->library('upload', $config);
    if ($this->upload->do_upload('Poto')) {
        $this->upload->data();
    }
    return "default.jpg";
	}

	function tambah_aksi(){
		
			$Id_Pengguna = $this->input->post('Id_Pengguna');
			$Nama_Pengguna = $this->input->post('Nama_Pengguna');
			$Email = $this->input->post('Email');
			$Jenis_Kelamin = $this->input->post('Jenis_Kelamin');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$RetryPassword = $this->input->post('RetryPassword');
			$Kontak = $this->input->post('Kontak');
			$Poto = $this-> Upload_Image();

 			
 			$data = array(
 			'Id_Pengguna' => $Id_Pengguna,
			'Nama_Pengguna' => $Nama_Pengguna,
			'Email' => $Email,
			'Jenis_Kelamin' => $Jenis_Kelamin,
			'username' => $username,
			'password' => md5($password),
			'RetryPassword' => md5($RetryPassword),
			'Kontak' => $Kontak,
			'Poto' => $Poto
			);
		
		$this->M_Pengguna->input_data($data,'pengguna');
		redirect('C_Pengguna');	
			
		

		
	}

	function edit($Id_Pengguna){
		$where = array('Id_Pengguna' => $Id_Pengguna);
		$data['pengguna'] = $this->M_Pengguna->edit_data($where,'pengguna')->result();
		$this->load->view('E_Pengguna',$data);
	}
	/*
		1. bawa id
		2. get data berdasarkan id
		3. ambil nama file gambar yang akan di edit
		4. unlink berdasarkan data yang diambil

		unlink("./assets/gambar/Slider/".namafile);
		5. query update

		*/

	function update($Id_Pengguna){
		$data['pengguna'] = $this->M_Pengguna->edit_data($where,'pengguna')->result();

		$Id_Pengguna = $this->input->post('Id_Pengguna');
		$Nama_Pengguna = $this->input->post('Nama_Pengguna');
		$Email = $this->input->post('Email');
		$Jenis_Kelamin = $this->input->post('Jenis_Kelamin');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$RetryPassword = $this->input->post('RetryPassword');
		$Kontak = $this->input->post('Kontak');
		$Poto = $this->input->post('Poto');

		$path='./gambar/'.$Poto;
		unlink($path);

	$data = array(
		'Id_Pengguna' => $Id_Pengguna,
		'Nama_Pengguna' => $Nama_Pengguna,
		'Email' => $Email,
		'Jenis_Kelamin' => $Jenis_Kelamin,
		'username' => $username,
		'password' => $password,
		'RetryPassword' => $RetryPassword,
		'Kontak' => $Kontak,
		'Poto' => $Poto,
	);

	$where = array(
		'Id_Pengguna' => $Id_Pengguna
	);

	$this->M_Pengguna->update_data($where,$data,'pengguna');
	redirect('C_Pengguna/index');
	}
	function hapus($Id_Pengguna){
		$where = array('Id_Pengguna' => $Id_Pengguna);
		$this->M_Pengguna->hapus_data($where,'pengguna');
		redirect('C_Pengguna');
	}
}