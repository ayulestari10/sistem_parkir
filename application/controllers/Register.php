<?php

class Register extends CI_Controller{

	function index(){
		$data = array(
			'title'		=> 'Sistem Parkir Fakultas Ilmu Komputer',
			'content'	=> 'regist'
		);
		$this->load->view('includes/template', $data);
	}

	function regist(){
		$nim 				= $this->input->post('nim');
		$password 	= $this->input->post('password');

		if(isset($nim, $password)){
			if($this->input->post('password') == $this->input->post('password2')){
				$this->load->model('Mhs_model');

				$cek_data = $this->Mhs_model->get_data_byNim($nim);
				if(isset($cek_data->nim)){
					$data_nim = $cek_data->nim;
				} else {
					$data_nim = "";
				}
				if($data_nim != $nim){
					$data = array(
						'nim'				=> $nim,
						'password'	=> md5($password)
					);
					$this->Mhs_model->insert($data);
					$this->session->set_flashdata('msg', '<div class="alert alert-success" style="text-align:center;">Registrasi Berhasil</div>');
				}
				else {
					$this->session->set_flashdata('msg', '<div class="alert alert-warning" style="text-align:center;">nim yang anda masukkan telah terdaftar sebelumnya.</div>');
				}
				redirect('Login/Mhs');
			}
			else {
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" style="text-align:center;">Password harus sama dengan Konfirmasi Password</div>');
				redirect('Register');
			}
		}
		else {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" style="text-align:center;">Registrasi Gagal</div>');
			redirect('Register');
		}
	}
}

?>
