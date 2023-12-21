<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
     public function __construct()
    {
      parent::__construct();
      $this->load->model('Laporan_model');
      $this->load->model('usulan_model');
    }

    public function index() {
        // Periksa apakah pengguna telah login atau belum.
        if ($this->session->userdata('user_id')) {
            // Pengguna telah login, tampilkan halaman dashboard.

            $data['data']=$this->Laporan_model->semuadata();
            // var_dump($data);exit
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('data_Laporan',$data);
            $this->load->view('templates/footer');
        } else {
            // Pengguna belum login, arahkan ke halaman login.
            redirect('auth/login.php');
        }
    }
    public function tambah_Laporan() {
        if ($this->session->userdata('user_id')) {
            $data['u']=$this->usulan_model->semuadata();
            $data['penyerah']=$this->usulan_model->karyawan_divisi();
            // var_dump($data['u']);exit;
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('tambah_Laporan',$data);
            $this->load->view('templates/footer');
        } else {
            redirect('Laporan');
        }
    }
    public function prosesTambah_Laporan()
    {
        $this->load->model('Laporan_model');
        $this->Laporan_model->ProsesTambah_Laporan();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data baru berhasil di tambahkan!
        </div>');
        redirect('Laporan');
    }
    public function hapusdataLaporan($id_lpb)
    {
        $this->load->model('Laporan_model');
        $this->Laporan_model->hapusdataLaporan($id_lpb);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil di hapus!
        </div>');
        redirect('Laporan');
    }
    public function editdataLaporan($id_lpb)
    {
        $data['lpb'] = $this->Laporan_model->ambil_id_lpb($id_lpb);
        $data['penyerah']=$this->usulan_model->karyawan_divisi();
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('editdataLaporan', $data);
        $this->load->view('templates/footer');
    }
    public function ProsesEditdataLaporan()
    {
        $this->Laporan_model->ProsesEditdataLaporan();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil di edit!
        </div>');
        redirect('Laporan');
    }

    public function terima($id)
    {
        $cari=$this->db->query("SELECT * FROM usulan WHERE id_usulan='$id'")->row_array();
        $data=array(
            'nama_peminjam'=>$cari['ttd_penyerah'],
            'divisi/departement'=>$cari['divisi/departement_penyerah'],
            'lokasi/cabang'=>$cari['lokasi/cabang'],
            'nama_barang'=>$cari['nama_produk&jasa'],
            'qty'=>$cari['jumlah'],
            'status'=>$cari['keterangan'],
            'paraf'=>$cari['ttd_penerima'],
            'keterangan'=>$cari['keterangan'],
            'tanggal_peminjaman'=>$cari['tanggal'],
            'tanggal_pengembalian'=>$cari['tanggal_pengembalian'],
        );
        $this->db->insert('inventory',$data);
        $qty=$cari['jumlah'];
        $kode_barang=$cari['kode_barang'];
        // var_dump($kode_barang);exit;
        $cek=$this->db->query("SELECT * FROM master_barang where kode_barang='$kode_barang'")->row();

        $jml=$cek->qty;

        $akhir=$jml+$qty;
        $this->db->query("UPDATE master_barang set qty='$akhir' where kode_barang='$kode_barang'");
        // $nama_peminjam=,ast
        // var_dump($akhir);exit;
        $this->Laporan_model->terima($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil di edit!
        </div>');
        redirect('Laporan');
    }

    public function tolak($id)
    {
        $this->Laporan_model->tolak($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil di edit!
        </div>');
        redirect('Laporan');
    }
}
