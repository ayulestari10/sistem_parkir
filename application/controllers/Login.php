<?php

class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->model('Admin_model');
		$this->load->model('Mhs_model');
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
				redirect('Login/Admin');
				exit;
			}
		}
		$data = array(
			'title'		=> 'LOGIN | Sistem Parkir',
			'content'	=> 'login_Admin'
		);
		$this->load->view('includes/template', $data);
	}

	function Mhs(){
		if($this->input->post('login')){
			$nim = $this->input->post('nim');
			$data = array(
				'nim'					=> $nim,
				'password' 		=> md5($this->input->post('password')),
				'id_mhs'			=> $this->Mhs_model->get_id_mhs($nim)
			);
			$data_Mhs = $this->Login_model->cek_login_Mhs($data);
			if($this->Login_model->rows == 1){
				$this->session->set_userdata($data);
				redirect('Mahasiswa');
			} else {
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" style="text-align:center;">Gagal Login!</div>');
				redirect('Login/Mhs');
				exit;
			}
		}
		$data = array(
			'title'		=> 'LOGIN | Sistem Parkir',
			'content'	=> 'login_mhs'
		);
		$this->load->view('includes/template', $data);
	}

}
?>
