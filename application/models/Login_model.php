<?php  

class Login_model extends CI_Model{
	public $rows = 0;

	function __construct(){
		parent::__construct();
	}

	function cek_login_admin($data){
		$this->load->model('Admin_model');
		$data_admin = $this->Admin_model->get_data_byConditional($data);
		if($data_admin->num_rows() == 1){
			 $this->rows = $data_admin->num_rows();
		}
		return $data_admin->result();
	}
}

?>