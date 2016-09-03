<?php

class Login_model extends CI_Model{
	public $rows = 0;

	function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->model('Mhs_model');
	}

	function cek_login_admin($data){
		$data_admin = $this->Admin_model->get_data_byConditional($data);
		if($data_admin->num_rows() == 1){
			 $this->rows = $data_admin->num_rows();
		}
		return $data_admin->result();
	}

	function cek_login_Mhs($data){
		$data_Mhs = $this->Mhs_model->get_data_byConditional($data);
		if($data_Mhs->num_rows() == 1){
			 $this->rows = $data_Mhs->num_rows();
		}
		return $data_Mhs->result();
	}
}

?>
