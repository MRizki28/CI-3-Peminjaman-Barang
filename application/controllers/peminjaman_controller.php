<?php
class peminjaman_controller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('barang_model');
        $this->load->model('peminjaman_model');
        if ($this->session->userdata('status') != 'login') {
			redirect(site_url('login_controller/masuk'));
		}
	}

	public function index()
    {
        $key['status'] = 'y';
        $peminjaman = $this->peminjaman_model->select($key);
        if(count($peminjaman)== 0)
        {
            unset($peminjaman);
            $peminjaman['tanggal'] = date('Y-m-d');
            $peminjaman['status'] = 'y';
            $this->peminjaman_model->insert($peminjaman);
        }
        $peminjaman = $this->peminjaman_model->select($key)[0];
        $key_detail['id_peminjaman'] = $peminjaman['id_peminjaman'];
        $data['detilss'] = $this->peminjaman_model->select_detail($key_detail);
        $data['barangs'] = $this->barang_model->select();
        $data['peminjaman']=$peminjaman ;

		$konten['konten']=$this->load->view('peminjaman',$data,true);
		$this->load->view('template',$konten);
        // $this->load->view('transaksi',$data);

       
    }
    public function simpan()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('id_barang','id_barang','required');
        $this->form_validation->set_rules('id_peminjaman','id peminjaman','required');
        $this->form_validation->set_rules('nama_peminjam','nama peminjam','');
        $this->form_validation->set_rules('tanggal_peminjaman','tanggal_peminjaman','required');

        if ($this->form_validation->run()) {
            $detil['id_barang']=$this->input->post('id_barang');
            $detil['id_peminjaman']=$this->input->post('id_peminjaman');
            $detil['nama_peminjam']=$this->input->post('nama_peminjam');
            $detil['tanggal_peminjaman']=$this->input->post('tanggal_peminjaman');
            $this->peminjaman_model->insert_detail($detil);
             
        redirect(site_url('peminjaman_controller/index'));
        }else{
            echo "<script>alert('Ada data yang kosong tu!');history.go(-1);</script>";
        }

     
    }
    public function hapus($id)
    {
        $this->peminjaman_model->delete_detail($id);
        redirect(site_url('peminjaman_controller/index'));

    }
}
