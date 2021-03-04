<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Jab_controller extends CI_Controller {
	function construct(){
		parent:: construct();
		$this->load->helper('url');
		$this->load->database();
	}

	public function testing(){
		echo "hai";
	}
	public function index(){
		$query = $this->db->get("jabatan");
		$data['records'] = $query->result();
		$this->load->helper('url');
		$this->load->view('Template/Header');
		$this->load->view('ViewJabatan/Jab_view',$data);
		$this->load->view('Template/Footer');
	}
	public function add_jabatan_view(){
		$this->load->helper('form');
		$this->load->view('Template/Header');
		$this->load->view('ViewJabatan/Jab_add');
		$this->load->view('Template/Footer');
	}
	public function add_jabatan(){
		$this->load->model('Jab_Model');
		$data = array(
						'KodeJabatan' => $this->input->post('KodeJabatan'),
						'NamaJabatan' => $this->input->post('NamaJabatan'),
						'GajiPokok' => $this->input->post('GajiPokok'),
						'TunjanganTransport' => $this->input->post('TunjanganTransport'),
						'TunjanganKesehatan' => $this->input->post('TunjanganKesehatan')
					);
		$this->Jab_Model->insert($data);
		$query = $this->db->get("jabatan");
		$data['records'] = $query->result();
		$this->load->view('Template/Header');
		$this->load->view('ViewJabatan/Jab_view', $data);
		$this->load->view('Template/Footer');
	}
	
	public function update_jabatan_view(){
		$this->load->helper('form');
		$KodeJabatan = $this->uri->segment('3');
		$query = $this->db->get_where("jabatan",array("KodeJabatan"=>$KodeJabatan));
		$data['records'] = $query->result();
		$data['old_KodeJabatan'] = $KodeJabatan;
		$this->load->view('Template/Header');
		$this->load->view('ViewJabatan/Jab_edit', $data);
		$this->load->view('Template/Footer');
	}

	public function update_jabatan(){
		$this->load->model('Jab_Model');
		$data = array(
					'KodeJabatan' => $this->input->post('KodeJabatan'),
					'NamaJabatan' => $this->input->post('NamaJabatan'),
					'GajiPokok' => $this->input->post('GajiPokok'),
					'TunjanganTransport' => $this->input->post('TunjanganTransport'),
					'TunjanganKesehatan' => $this->input->post('TunjanganKesehatan')
		);
		$old_KodeJabatan = $this->input->post('old_KodeJabatan');
		$this->Jab_Model->update($data, $old_KodeJabatan);
		$query = $this->db->get("jabatan");
		$data['records'] = $query->result();
		$this->load->view('Template/Header');
		$this->load->view('Jab_view',$data);
		$this->load->view('Template/Footer');
	}


	public function delete_jabatan (){
		$this->load->model('Jab_Model');
		$KodeJabatan = $this->uri->segment('3');
		$where = array('KodeJabatan' => $KodeJabatan);
		$this->Jab_Model->delete($where, 'jabatan');
		$query = $this->db->get("jabatan");
		$data['records'] = $query->result();
		$this->load->view('Template/Header');
		$this->load->view('ViewJabatan/Jab_view',$data);
		$this->load->view('Template/Footer');
	}
}

?>