<?php 

class C_Slider extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('M_Slider');
        $this->load->helper(array('form', 'url')); 
	}

	function index(){
		$data['slider']=$this->M_Slider->tampil_data()->result();
		$this->load->view('T_Slider', $data);
	}

	function Upload_Image(){
		$config['upload_path']          = './assets/gambar/Slider/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 3000;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
 
		$this->load->library('upload', $config);

	    if ( ! $this->upload->do_upload('Slider')) {
	        echo "gagal";
	    }else{
	    	$image_data = $this->upload->data();
	    	$imgdata = file_get_contents($image_data['full_path']);
	    	$file_encode = base64_encode($imgdata);
	    	
	    	$data['Slider'] = $image_data;
	    	$data['Keterangan'] = $this->input->post('Keterangan');
	    	$this->db->insert('slider',$data);
	    	unlink($image_data['full_path']);
	    	redirect('C_Slider');

	    }

	}

	function tambah_aksi(){
		
			$Id_Slider = $this->input->post('Id_Slider');
			$Slider = $this->input->post('Slider');
			$Keterangan = $this->input->post('Keterangan');

 			$data = array(
 			'Id_Slider' => $Id_Slider,
			'Slider' => $Slider.$this->Upload_Image(),
			'Keterangan' => $Keterangan
			);
		
		$this->M_Slider->input_data($data,'slider');
		redirect('C_Slider');	
	}

	function edit($Id_Slider){
		$where = array('Id_Slider' => $Id_Slider);
		$data['slider'] = $this->M_Slider->edit_data($where,'slider')->result();
		$this->load->view('E_Slider',$data);
	}

	function update(){
		$Id_Slider = $this->input->post('Id_Slider');
		$Slider = $this->input->post('Slider');
		$Keterangan = $this->input->post('Keterangan');

		/*
		1. bawa id
		2. get data berdasarkan id
		3. ambil nama file gambar yang akan di edit
		4. unlink berdasarkan data yang diambil

		unlink("./assets/gambar/Slider/".namafile);
		5. query update

		*/

	$data = array(
		'Id_Slider' => $Id_Slider,
		'Slider' => $Slider,
		'Keterangan' => $Keterangan
	);

	$where = array(
		'Id_Slider' => $Id_Slider
	);

	$this->M_Slider->update_data($where,$data,'slider');
	redirect('C_Slider');
	}
}