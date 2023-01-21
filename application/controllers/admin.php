<?php 
 
class Admin extends CI_Controller
{
 
	function __construct(){
		parent::__construct();
		$this->load->model('barang_model');
        $this->load->model('peminjaman_model');
	
		if($this->session->userdata('status') != "login"){
			return redirect ("login_controller/masuk"); //jika tidak login dan diback dari browser akan tetap pada vi_login
		}
	}
 
	function index(){
		// $barangs = $this->barang_model->select();
		// 	$data_produk['barangs'] = null;
		// 	foreach ($barangs as $prd) {
		// 		$data_produk['barangs'][]=$prd;

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
        $this->load->view('home', $data);
    }
	

   
}