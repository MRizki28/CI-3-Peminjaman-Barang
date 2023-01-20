<?php
class peminjaman_model extends CI_Model{

	public function __construct(){
		$this->table = 'tb_peminjaman';
		$this->id = 'id_peminjaman';
	}
	public function insert_detail($data){
		$this->db->insert('tb_detail_peminjaman', $data);
	}
	public function insert($data){
		$this->db->insert($this->table, $data);
	}


	public function select_detail($key=null){
		if($key != null){
			$this->db->where($key);
		}
		$this->db->join('tb_barang','tb_barang.id = tb_detail_peminjaman.id_barang');
		// return $this->db->get($this->table)->result_array();
		return $this->db->get('tb_detail_peminjaman')->result_array();
	}
	public function select($key=null){
		if($key != null){
			$this->db->where($key);
		}
		// return $this->db->get($this->table)->result_array();
		return $this->db->get('tb_peminjaman')->result_array();
	}

	public function delete_detail($id_produk) {
		$this->db->where('id_detail_peminjaman', $id_produk);
		$this->db->delete('tb_detail_peminjaman');
	}

/////

	public function update($key, $data){
		$this->db->where($key);
		$this->db->update($this->table, $data);
	}

	public function delete($id_produk) {
		$this->db->where('id_peminjaman', $id_produk);
		$this->db->delete('tb_peminjaman');
	}
}
