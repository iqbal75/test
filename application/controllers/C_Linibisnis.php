<?php 

class C_Linibisnis extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('M_Linibisnis');
        $this->load->helper('url');  
	}

	function index(){
		$data['linibisnis'] = $this->M_Linibisnis->tampil_data()->result();
		$this->load->view('T_Linibisnis',$data);
	}

	function tambah_aksi(){
		$Id_LiniBisnis = $this->input->post('Id_LiniBisnis');
		$LiniBisnis = $this->input->post('LiniBisnis');

 
		$data = array(
			'Id_LiniBisnis' => $Id_LiniBisnis,
			'LiniBisnis' => $LiniBisnis
	
			);
		$this->M_Linibisnis->input_data($data,'linibisnis');
		redirect('C_Linibisnis');
	}

	function edit($Id_LiniBisnis){
		$where = array('Id_LiniBisnis' => $Id_LiniBisnis);
		$data['linibisnis'] = $this->M_Linibisnis->edit_data($where,'linibisnis')->result();
		$this->load->view('E_Linibisnis',$data);
	}

	function update(){
		$Id_LiniBisnis = $this->input->post('Id_LiniBisnis');
		$LiniBisnis = $this->input->post('LiniBisnis');
		
 
		$data = array(
			'Id_LiniBisnis' => $Id_LiniBisnis,
			'LiniBisnis' => $LiniBisnis,
			
			);
	$where = array(
		'Id_LiniBisnis' => $Id_LiniBisnis
	);

	$this->M_Linibisnis->update_data($where,$data,'linibisnis');
	redirect('C_Linibisnis');
}

}