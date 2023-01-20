<?php

class barang_model extends CI_Model
{
    private  $table = 'tb_barang';

    public function read_data()
    {
        return $this->db->get($this->table)->result();
    }

    public function simpan()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('kode_barang', 'KODE BARANG', 'required');
        $this->form_validation->set_rules('nama_barang', 'NAMA BARANG', 'required');
        $this->form_validation->set_rules('kondisi_barang', 'KONDISI BARANG', 'required');

        $kode_barang = $this->input->post('kode_barang');
        $nama_barang = $this->input->post('nama_barang');
        $kondisi_barang = $this->input->post('kondisi_barang');

        if ($this->form_validation->run()) {
            
            $kode_barang = $this->input->post('kode_barang');
            $nama_barang = $this->input->post('nama_barang');
            $kondisi_barang = $this->input->post('kondisi_barang'); 
            $data = array (
                'kode_barang' => $kode_barang,
                'nama_barang' => $nama_barang,
                'kondisi_barang' => $kondisi_barang
            );
            $this->db->insert('tb_barang', $data);    
        }else {
            echo "<script>alert('Periksa kembali, ada yang kosong tu !');history.go(-1);</script>";
        }
    }

    public function edit_barang($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_barang($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update('tb_barang', $data);
    }

    public function hapus_barang($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }


    public function select($key = null)
    {
        if ($key != null) {
            $this->db->where($key);
        }
        // return $this->db->get($this->table)->result_array();
        return $this->db->get('tb_barang')->result_array();
    }
}