<?php  

class M_User extends CI_Model{ 
	function tampil_data_LiniBisnis(){
		return $this->db->get('linibisnis'); 
	} 
	function tampil_data_About(){
		return $this->db->get('about'); 
	}
	function tampil_data_VisiMisi(){
		return $this->db->get('visimisi'); 
	}
}