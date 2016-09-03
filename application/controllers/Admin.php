<?php
class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->model('Mhs_model');

		$username = $this->session->userdata('username');
		if (!isset($username)) {
		   redirect('Login/admin');
		   exit;
		}
	}

	function index(){

		$data = array(
			'title'		=> 'Input Data | Sistem Parkir',
			'content'	=> 'admin_area'
		);
		$this->load->view('includes/template', $data);
	}


	function logout_admin(){
		$this->session->unset_userdata('username');
		redirect('Login/admin');
	}

	function add_mhs(){

		if($this->input->post('add_mhs')){
			$input = array(
				'nama'				=> $this->input->post('nama'),
				'nim'				=> $this->input->post('nim'),
				'jurusan'			=> $this->input->post('jurusan'),
				'tgl_daftar'		=> $this->input->post('tgl_daftar'),
				'lokasi'			=> $this->input->post('lokasi'),
				'angkatan'			=> $this->input->post('angkatan'),
				'foto_kendaraan'	=> $this->input->post('nim').'.png',
				'plat_kendaraan'	=> $this->input->post('plat_kendaraan'),
				'tipe'				=> $this->input->post('tipe')
			);
			$this->Mhs_model->insert($input);
			$this->Mhs_model->do_upload($this->input->post('nim'));
			$this->session->set_flashdata('msg', '<div class="alert alert-success" style="text-align:center;">Data berhasil disimpan!</div>');
			redirect('Admin');
		}
		$data = array(
			'title'		=> 'Input Data| Sistem Parkir',
			'content'	=> 'admin_area'
		);
		$this->load->view('includes/template', $data);
	}

	function list_mhs(){
		$data = array(
			'title'		=> 'Manage Data | Sistem Parkir',
			'content'	=> 'list_mhs',
			'dt'		=> $this->Mhs_model->get_all()
		);
		$this->load->view('includes/template', $data);
	}

	function edit_mhs(){
		$id_mhs = $this->uri->segment(3);

		if($this->input->post('edit_mhs')){
			$input = array(
				'nama'				=> $this->input->post('nama'),
				'nim'				=> $this->input->post('nim'),
				'jurusan'			=> $this->input->post('jurusan'),
				'tgl_daftar'		=> $this->input->post('tgl_daftar'),
				'lokasi'			=> $this->input->post('lokasi'),
				'angkatan'			=> $this->input->post('angkatan'),
				'plat_kendaraan'	=> $this->input->post('plat_kendaraan'),
				'tipe'				=> $this->input->post('tipe')
			);
			$this->Mhs_model->update($id_mhs, $input);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" style="text-align:center;">Data berhasil diedit!</div>');
			redirect('Admin/list_mhs');
		}
		$data = array(
			'title'		=> 'Edit Data| Sistem Parkir',
			'content'	=> 'edit_mhs',
			'dt'			=> $this->Mhs_model->get_data_byNim($this->session->userdata('nim'))
		);
		$this->load->view('includes/template', $data);
	}

	function delete_mhs(){
		$id_mhs = $this->uri->segment(3);

		if(isset($id_mhs)){
			$this->Mhs_model->delete($id_mhs);
			redirect('Admin/list_mhs');
		} else {
			redirect('Admin/list_mhs');
		}
	}
}
 ?>
