<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Stud_controller extends CI_Controller {
	function construct(){
		parent:: construct();
		$this->load->helper('url');
		$this->load->database();
	}

	public function testing(){
		echo "hai";
	}
	public function index(){
		$query = $this->db->get("pegawai");
		$data['records'] = $query->result();
		$this->load->helper('url');
		$this->load->view('Template/Header');
		$this->load->view('ViewKaryawan/Kar_view',$data);
		$this->load->view('Template/Footer');
	}
	public function add_karyawan_view(){
		$this->load->helper('form');
		$this->load->view('Template/Header');
		$this->load->view('ViewKaryawan/Kar_add');
		$this->load->view('Template/Footer');
	}
	public function add_karyawan(){
		$this->load->model('Kar_Model');
		$data = array(
						'IdPegawai' => $this->input->post('IdPegawai'),
						'NamaPegawai' => $this->input->post('NamaPegawai'),
						'Password' => $this->input->post('Password'),
						'IdAbsen' => $this->input->post('IdAbsen'),
						'IdBagian' => $this->input->post('IdBagian'),
						'KodeGaji' => $this->input->post('KodeGaji'),
						'KodeJabatan' => $this->input->post('KodeJabatan'),
						'IdTunjangan' => $this->input->post('IdTunjangan')
					);
		$this->Kar_Model->insert($data);
		$query = $this->db->get("pegawai");
		$data['records'] = $query->result();
		$this->load->view('Template/Header');
		$this->load->view('ViewKaryawan/Kar_view', $data);
		$this->load->view('Template/Footer');
	}
	// public function update_karyawan_view(){
	// 	$this->load->helper('form');
	// 	$IdPegawai = $this->uri->segment('3');
	// 	$query = $this->db->get_where("pegawai",array("IdPegawai"=>$IdPegawai));
	// 	$data['records'] = $query->result();
	// 	$data['old_IdPegawai'] = $IdPegawai;
	// 	$this->load->view('Template/Header');
	// 	$this->load->view('ViewKaryawan/Kar_edit', $data);
	// 	$this->load->view('Template/Footer');
	// }

	// public function update_karyawan(){
	// 	$this->load->model('Kar_Model');
	// 	$data = array(
	// 					'IdPegawai' => $this->input->post('IdPegawai'),
	// 					'NamaPegawai' => $this->input->post('NamaPegawai'),
	// 					'Password' => $this->input->post('Password'),
	// 					'IdAbsen' => $this->input->post('IdAbsen'),
	// 					'IdBagian' => $this->input->post('IdBagian'),
	// 					'KodeGaji' => $this->input->post('KodeGaji'),
	// 					'KodeJabatan' => $this->input->post('KodeJabatan'),
	// 					'IdTunjangan' => $this->input->post('IdTunjangan')
	// 				);
	// 	$old_IdPegawai = $this->input->post('old_IdPegawai');
	// 	$this->Kar_Model->update($data, $old_IdPegawai);
	// 	$query = $this->db->get("jabatan");
	// 	$data['records'] = $query->result();
	// 	$this->load->view('Template/Header');
	// 	$this->load->view('ViewKaryawan/Kar_view',$data);
	// 	$this->load->view('Template/Footer');
	// }

	function update_karyawan_view($IdPegawai){
	$where = array('IdPegawai' => $IdPegawai);
	$data['pegawai'] = $this->m_data->edit_data($where,'pegawai')->result();
	$this->load->view('ViewKaryawan/v_edit',$data);
}

	public function delete_karyawan (){
		$this->load->model('Kar_Model');
		$IdPegawai = $this->uri->segment('3');

		$where = array('IdPegawai' => $IdPegawai);
		$this->Kar_Model->delete($where, 'pegawai');

		$query = $this->db->get("pegawai");
		$data['records'] = $query->result();
		$this->load->view('Template/Header');
		$this->load->view('ViewKaryawan/Kar_view',$data);
		$this->load->view('Template/Footer');
	}

}

?>