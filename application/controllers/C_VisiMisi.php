<?php 

class C_VisiMisi extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('M_VisiMisi');
        $this->load->helper('url');  
	}

	function index(){
		$data['visimisi'] = $this->M_VisiMisi->tampil_data()->result();
		$this->load->view('T_VisiMisi',$data);
	}

	function Upload_Image1(){
		$config['upload_path']          = './assets/gambar/VisiMisi/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 3000;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
 
	$this->load->library('upload', $config);
    if ($this->upload->do_upload('PotoVisi')) {
        $this->upload->data();
    }
    return "default.jpg";
	}
	function Upload_Image2(){
		$config['upload_path']          = './assets/gambar/VisiMisi/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 3000;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
 
	$this->load->library('upload', $config);
    if ($this->upload->do_upload('PotoMisi')) {
        $this->upload->data();
    }
    return "default.jpg";
	}

	function tambah_aksi(){
		$Id_VisiMisi = $this->input->post('Id_VisiMisi');
		$Visi = $this->input->post('Visi');
		$PotoVisi = $this-> Upload_Image1();
		// $PotoVisi = $this->input->post('PotoVisi');
		$Misi1 = $this->input->post('Misi1');
		$Misi2 = $this->input->post('Misi2');
		$Misi3 = $this->input->post('Misi3');
		$Misi4 = $this->input->post('Misi4');
		$PotoMisi = $this-> Upload_Image2();
		// $PotoMisi = $this->input->post('PotoMisi');

 
		$data = array(
			'Id_VisiMisi' => $Id_VisiMisi,
			'Visi' => $Visi,
			'PotoVisi' => $PotoVisi,
			'Misi1' => $Misi1,
			'Misi2' => $Misi2,
			'Misi3' => $Misi3,
			'Misi4' => $Misi4,
			'PotoMisi' => $PotoMisi
	
			);
		$this->M_VisiMisi->input_data($data,'visimisi');
		redirect('C_VisiMisi');
	}

	function edit($Id_VisiMisi){
		$where = array('Id_VisiMisi' => $Id_VisiMisi);
		$data['visimisi'] = $this->M_VisiMisi->edit_data($where,'visimisi')->result();
		$this->load->view('E_VisiMisi',$data);
	}

	function update(){
		$Id_VisiMisi = $this->input->post('Id_VisiMisi');
		$Visi = $this->input->post('Visi');
		$PotoVisi = $this->input->post('PotoVisi');
		$Misi1 = $this->input->post('Misi1');
		$Misi2 = $this->input->post('Misi2');
		$Misi3 = $this->input->post('Misi3');
		$Misi4 = $this->input->post('Misi4');
		$PotoMisi = $this->input->post('PotoMisi');
		
 
		$data = array(
			'Id_VisiMisi' => $Id_VisiMisi,
			'Visi' => $Visi,
			'PotoVisi' => $PotoVisi,
			'Misi1' => $Misi1,
			'Misi2' => $Misi2,
			'Misi3' => $Misi3,
			'Misi4' => $Misi4,
			'PotoMisi' => $PotoMisi
			
			);
	$where = array(
		'Id_VisiMisi' => $Id_VisiMisi
	);

	$this->M_VisiMisi->update_data($where,$data,'visimisi');
	redirect('C_VisiMisi');
}
}