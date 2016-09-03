<?php

class Mahasiswa extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Mhs_model');

		$id_mhs = $this->session->userdata('id_mhs');
		if (!isset($id_mhs)) {
		   redirect('Login/Mhs');
		   exit;
		}
	}

	function index(){
		$data = array(
			'dt'			 		=> $this->Mhs_model->get_data_byNim($this->session->userdata('nim')),
			'title'				=> 'Data | Sistem Parkir',
			'content'			=> 'biodata'
		);
		$this->load->view('includes/template', $data);
	}

	function input_data(){

    if($this->input->post('add_mhs')){
			$input = array(
				'nama'						=> $this->input->post('nama'),
				'nim'							=> $this->input->post('nim'),
				'jurusan'					=> $this->input->post('jurusan'),
				'tgl_daftar'			=> $this->input->post('tgl_daftar'),
				'lokasi'					=> $this->input->post('lokasi'),
				'angkatan'				=> $this->input->post('angkatan'),
				'foto_kendaraan'	=> $this->input->post('nim').'.png',
				'plat_kendaraan'	=> $this->input->post('plat_kendaraan'),
				'tipe'						=> $this->input->post('tipe')
			);
			$this->Mhs_model->update($this->session->userdata('id_mhs'), $input);
			$this->Mhs_model->do_upload($this->input->post('nim'));
			$this->session->set_flashdata('msg', '<div class="alert alert-success" style="text-align:center;">Data berhasil disimpan!</div>');
			redirect('Mahasiswa');
		}
		$data = array(
			'title'		=> 'Input Data| Sistem Parkir',
			'content'	=> 'biodata'
		);
		$this->load->view('includes/template', $data);

	}

    public function Peryataan() {
        $data = array(
        	'dt' 		=> $this->Mhs_model->get_data_byNim($this->session->userdata('nim'))
			);
        $html = $this->load->view('formulir_pendaftaran', $data, true);

        $pdfFilePath = "Formulir ".$this->session->userdata('nisn').".pdf";

        $this->load->library('m_pdf');

        $this->m_pdf->pdf->WriteHTML($html);

        $this->m_pdf->pdf->Output($pdfFilePath, "D");
    }

}

 ?>
