<?php  

class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->model('Admin_model');
	}

	function Admin(){
		if($this->input->post('login')){
			$username = $this->input->post('username');

			$data = array(
				'username'		=> $username,
				'password' 		=> md5($this->input->post('password'))
			);
			$data_Admin = $this->Login_model->cek_login_Admin($data);
			if($this->Login_model->rows == 1){
				$this->session->set_userdata($data);
				redirect('Admin');
			} else {
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" style="text-align:center;">Gagal Login!</div>'); 
				redirect('login/Admin');
				exit;
			}
		}
		$data = array(
			'title'		=> 'LOGIN | Sistem Parkir',
			'content'	=> 'login_Admin'
		);
		$this->load->view('includes/template', $data);
	}

}
?>