<?php  

class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('Mhs_model');
	}

	function index(){
		if($this->input->post('2010')){
			$dt = $this->Mhs_model->get_data_angkatan($this->input->post('2010'));
		}
		elseif($this->input->post('2011')){
			$dt = $this->Mhs_model->get_data_angkatan($this->input->post('2011'));
		}
		elseif($this->input->post('2012')){
			$dt = $this->Mhs_model->get_data_angkatan($this->input->post('2012'));
		}
		elseif($this->input->post('2013')){
			$dt = $this->Mhs_model->get_data_angkatan($this->input->post('2013'));
		}
		elseif($this->input->post('2014')){
			$dt = $this->Mhs_model->get_data_angkatan($this->input->post('2014'));
		}
		elseif($this->input->post('2015')){
			$dt = $this->Mhs_model->get_data_angkatan($this->input->post('2015'));
		}
		elseif($this->input->post('2016')){
			$dt = $this->Mhs_model->get_data_angkatan($this->input->post('2016'));
		}
		elseif($this->input->post('TI')){
			$dt = $this->Mhs_model->get_data_jurusan($this->input->post('TI'));
		}
		elseif($this->input->post('SI')){
			$dt = $this->Mhs_model->get_data_jurusan($this->input->post('SI'));
		}
		elseif($this->input->post('SK')){
			$dt = $this->Mhs_model->get_data_jurusan($this->input->post('SK'));
		}
		elseif($this->input->post('D3')){
			$dt = $this->Mhs_model->get_data_jurusan($this->input->post('D3'));
		}
		elseif($this->input->post('az')){
			$dt = $this->Mhs_model->get_data_az();
		}
		elseif($this->input->post('za')){
			$dt = $this->Mhs_model->get_data_za();
		}
		else{
			$dt = $this->Mhs_model->get_all();
		}

		$data = array(
			'title'		=> 'Sistem Parkir',
			'content'	=> 'home',
			'dt'		=> $dt
		);
		$this->load->view('includes/template', $data);
	}

	function angkatan(){

	}
}

?>