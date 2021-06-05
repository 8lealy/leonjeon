<?php 
//defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('M_data');
		$this->load->helper('url');

	}

	function index(){
		$data['user'] = $this->M_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}

	function tambah(){
		$this->load->view('v_input');
	}

	function tambah_aksi(){
		$hari = $this->input->post('hari');
		$jam = $this->input->post('jam');
		$matkul = $this->input->post('matkul');
		$catatan = $this->input->post('catatan');

		$data = array(
			'hari' => $hari,
			'jam' => $jam,
			'matkul' => $matkul,
			'catatan'=> $catatan);
		$this->M_data->input_data($data,'user');
		redirect('crud/index');
	}

	function hapus($id_uas = null){
		$where = array('id_uas' => $id_uas);
		$this->M_data->hapus_data($where,'user');
		redirect('crud/index');
	}

	function edit($id_uas){
		$where = array('id_uas' => $id_uas);
		$data['user'] = $this->M_data->edit_data($where,'user')->result();
		$this->load->view('v_edit',$data);
	}
	function update(){
		$id_uas = $this->input->post('id_uas');
		$hari = $this->input->post('hari');
		$jam = $this->input->post('jam');
		$matkul = $this->input->post('matkul');
		$catatan = $this->input->post('catatan');
	
		$data = array(
			'hari' => $hari,
			'jam' => $jam,
			'matkul' => $matkul,
			'catatan'=> $catatan
		);
	
		$where = array(
			'id_uas' => $id_uas
		);
	
		$this->M_data->update_data($where, $data, 'user');
		redirect('crud/index');
	}

}
?>
