<?php  

class Mhs_model extends CI_Model{
	private $table;
	private $key;

	var $foto_kendaraan;
	var $galerry_path_url;

	function __construct(){
		parent::__construct();
		$this->table 				= 'mahasiswa';
		$this->key 					= 'id_mhs';
		$this->foto_kendaraan		= realpath(APPPATH.'../kendaraan');
		$this->galerry_path_url 	= base_url().'kendaraan/';
	}

	function get_all(){
		$query = $this->db->get($this->table); 
		return $query->result();
	}

	function get_data_byConditional($condition){
		$this->db->where($condition);
		$query = $this->db->get($this->table);
		return $query;
	}

	function get_id_mhs($nim){
		$this->db->where('nim', $nim); 
		$query = $this->db->get($this->table);
		foreach ($query->result() as $row) {
			$id_mhs = $row->id_mhs;			
		}
		return $id_mhs;
	}

	function get_last_data(){
		$data = $this->db->query('SELECT * FROM mahasiswa ORDER BY id_mhs ASC LIMIT 1');
		foreach($data->result() as $row){
			$id_mhs = $row->id_mhs;
		}
		return $id_mhs;
	}
	
	function get_data_byid_mhs($id_mhs){
		$this->db->where($this->key, $id_mhs); 
		$query = $this->db->get($this->table);
		return $query->row();
	}

	function get_data_angkatan($sort){
		$query = $this->db->query('SELECT * FROM mahasiswa WHERE angkatan ='.$sort );
		return $query->result();
	}

 	function get_data_jurusan($sort){
 		$query = $this->db->query('SELECT * FROM mahasiswa WHERE jurusan LIKE "%'.$sort.'%"' );
		return $query->result();
 	}

 	function get_data_az(){
 		$query = $this->db->query('SELECT * FROM mahasiswa ORDER BY nama ASC');
		return $query->result();
 	}
	
 	function get_data_za(){
 		$query = $this->db->query('SELECT * FROM mahasiswa ORDER BY nama DESC');
		return $query->result();
 	}

	function insert($data){
		return $this->db->insert($this->table, $data); 
	}

	function update($id_mhs, $data){
		$this->db->where($this->key, $id_mhs); 
		return $this->db->update($this->table, $data);
	}


	function delete($id_mhs){
		return $this->db->delete($this->table, array($this->key => $id_mhs)); 
	}

	function do_upload($nim){

		$config = array (
			'file_name' 	=> $nim.'.png',
			'upload_path'	=> '/kendaraan',
			'allowed_types' => 'jpg|jpeg|png',
			'upload_path' 	=> $this->foto_kendaraan,
			'max_size' 		=> 5000
		);

		$this->load->library('upload', $config);
		$this->upload->do_upload();	
	}

}

 ?>