<?php
class dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('barang_model');
        $this->load->model('peminjaman_model');
    }

    public function index()
    {
        $key['status'] = 'y';
        $peminjaman = $this->peminjaman_model->select($key);
        if (count($peminjaman) == 0) {
            unset($peminjaman);
            $peminjaman['tanggal'] = date('Y-m-d');
            $peminjaman['status'] = 'y';
            $this->peminjaman_model->insert($peminjaman);
        }
        $peminjaman = $this->peminjaman_model->select($key)[0];
        $key_detail['id_peminjaman'] = $peminjaman['id_peminjaman'];
        $data['detilss'] = $this->peminjaman_model->select_detail($key_detail);
        $data['barangs'] = $this->barang_model->select();
        $data['peminjaman'] = $peminjaman;

        // $konten['konten']=$this->load->view('home',$data,true);
        // $this->load->view('template',$konten);

        $jumlah_barang = count($data['barangs']);
        $jumlah_peminjaman = count($data['detilss']);
        $data['jumlah_barang'] = $jumlah_barang;
        $data['jumlah_peminjaman'] = $jumlah_peminjaman;
        $this->load->view('home', $data);
    }

    // public function count_item()
    // {
    //     $this->load->model('peminjaman_model');
    //     return $this->peminjaman_model->get()->num_rows();
    // }
}
