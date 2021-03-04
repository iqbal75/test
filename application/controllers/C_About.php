<?php 

class C_About extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('M_About');
        $this->load->helper('url');  
	}

	function index(){
		$data['about'] = $this->M_About->tampil_data()->result();
		$this->load->view('T_About',$data);
	}

	function Upload_Image(){
		$config['upload_path']          = './assets/gambar/About/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 3000;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
 
	$this->load->library('upload', $config);
    if ($this->upload->do_upload('PotoAbout')) {
        $this->upload->data();
    }
    return "default.jpg";
	}

	function tambah_aksi(){

		$Id_About = $this->input->post('Id_About');
		$About = $this->input->post('About');
		$A1 = $this->input->post('A1');
		$A2 = $this->input->post('A2');
		$A3 = $this->input->post('A3');
		$A4 = $this->input->post('A4');
		$PotoAbout = $this-> Upload_Image();

 
		$data = array(
			'Id_About' => $Id_About,
			'About' => $About,
			'A1' => $A1,
			'A2' => $A2,
			'A3' => $A3,
			'A4' => $A4,
			'PotoAbout' => $PotoAbout
	
			);
		$this->M_About->input_data($data,'about');
		redirect('C_About');
	}

	function edit($Id_About){
		$where = array('Id_About' => $Id_About);
		$data['about'] = $this->M_About->edit_data($where,'about')->result();
		$this->load->view('E_About',$data);
	}

	function update(){
		$Id_About = $this->input->post('Id_About');
		$About = $this->input->post('About');
		$A1 = $this->input->post('A1');
		$A2 = $this->input->post('A2');
		$A3 = $this->input->post('A3');
		$A4 = $this->input->post('A4');
		$PotoAbout = $this->input->post('PotoAbout');
		
 
		$data = array(
			'Id_About' => $Id_About,
			'About' => $About,
			'A1' => $A1,
			'A2' => $A2,
			'A3' => $A3,
			'A4' => $A4,
			'PotoAbout' => $PotoAbout
			
			);
	$where = array(
		'Id_About' => $Id_About
	);
	// if (file_exists ( string $PotoAbout ) : bool) {
	// 	unlink ( string $PotoAbout [, resource $context ] ) : bool
	// }

	$this->M_About->update_data($where,$data,'about');
	redirect('C_About');
}

}