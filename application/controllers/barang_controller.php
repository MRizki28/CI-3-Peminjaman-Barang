<?php

class barang_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('barang_model');
		if ($this->session->userdata('status') != 'login') {
			redirect(site_url('login_controller/masuk'));
		}
	}
	function ke_barang()
	{
		$data['tb_barang'] = $this->barang_model->read_data();
		$this->load->view('barang',$data);
	}

	function add()
	{
		
			$this->load->view('add_barang');
	
		
	}

	function save()
	{
		if ($this->input->post('save')) {
			$this->barang_model->simpan();
			redirect('barang_controller/ke_barang','refresh');
		}else{
			redirect('barang_controller/add','refresh');
		}
	}

	function edit($id){
		$where = array('id_barang' => $id);
		$data['tb_barang'] = $this->barang_model->edit_barang($where,'tb_barang')->result();
		$this->load->view('edit_barang',$data);
	}

	function update_barang_db()
	{
		$id_barang = $this->input->post('id');
		$kode_barang = $this->input->post('kode_barang');
		$nama_barang = $this->input->post('nama_barang');
		$kondisi_barang = $this->input->post('kondisi_barang');
		$unit= $this->input->post('unit');

		$data = array (
			'kode_barang' => $kode_barang,
			'nama_barang' => $nama_barang,
			'kondisi_barang' => $kondisi_barang,
			'unit' => $unit
		);

		$where = array (
			'id_barang' => $id_barang
		);

		$this->barang_model->update_barang($where, $data, 'tb_barang');
		redirect('barang_controller/ke_barang');
	}

	function hapus($id)
	{
		$where = array ('id_barang' =>$id);
		$this->barang_model->hapus_barang($where,'tb_barang');
		redirect('barang_controller/ke_barang');
	}
}
