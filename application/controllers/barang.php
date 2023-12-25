<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
     public function __construct()
    {
      parent::__construct();
      $this->load->model('barang_model');
    }


    public function masuk() {
        // Periksa apakah pengguna telah login atau belum.
        if ($this->session->userdata('user_id')) {
            // Pengguna telah login, tampilkan halaman dashboard.
           $data['data']=$this->barang_model->semuadatamasuk();
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('data_barang_masuk', $data);
            $this->load->view('templates/footer');
        } else {
            // Pengguna belum login, arahkan ke halaman login.
            redirect('auth/login.php');
        }
    }
    public function non_asset() {
        // Periksa apakah pengguna telah login atau belum.
        if ($this->session->userdata('user_id')) {
            // Pengguna telah login, tampilkan halaman dashboard.
           $data['data']=$this->barang_model->non_asset_barang();
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('data_non_asset', $data);
            $this->load->view('templates/footer');
        } else {
            // Pengguna belum login, arahkan ke halaman login.
            redirect('auth/login.php');
        }
    }
    public function tambah_masuk() {
        // Periksa apakah pengguna telah login atau belum.
        if ($this->session->userdata('user_id')) {
            // Pengguna telah login, tampilkan halaman dashboard.
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('tambah_masuk');
            $this->load->view('templates/footer');
        } else {
            // Pengguna belum login, arahkan ke halaman login.
            redirect('barang');
        }
    }
    public function tambah_non_asset() {
        // Periksa apakah pengguna telah login atau belum.
        if ($this->session->userdata('user_id')) {
            // Pengguna telah login, tampilkan halaman dashboard.
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('tambah_non_asset');
            $this->load->view('templates/footer');
        } else {
            // Pengguna belum login, arahkan ke halaman login.
            redirect('barang');
        }
    }
    public function ProsesTambah_masuk()
    {
        $this->load->model('barang_model');
        $this->barang_model->ProsesTambah_masuk();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data baru berhasil di tambahkan!
        </div>');
        redirect('barang/tambah_masuk');
    }
    public function ProsesTambah_non_asset()
    {
        $this->load->model('barang_model');
        $this->barang_model->ProsesTambah_non();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data baru berhasil di tambahkan!
        </div>');
        redirect('barang/non_asset');
    }
    public function keluar() {
        // Periksa apakah pengguna telah login atau belum.
        if ($this->session->userdata('user_id')) {
            // Pengguna telah login, tampilkan halaman dashboard.
            $data['data']=$this->barang_model->semuadatakeluar();
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('data_barang_keluar', $data);
            $this->load->view('templates/footer');
        } else {
            // Pengguna belum login, arahkan ke halaman login.
            redirect('barang_keluar');
        }
    }
     public function tambah_keluar() {
        // Periksa apakah pengguna telah login atau belum.
        if ($this->session->userdata('user_id')) {
            // Pengguna telah login, tampilkan halaman dashboard.
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('tambah_keluar');
            $this->load->view('templates/footer');
        } else {
            // Pengguna belum login, arahkan ke halaman login.
            redirect('barang_keluar');
        }
    }
    public function ProsesTambah_keluar()
    {
        $this->load->model('barang_model');
        $this->barang_model->ProsesTambah_keluar();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data baru berhasil di tambahkan!
        </div>');
        redirect('barang/ProsesTambah_keluar');
    }
        public function Hapusdatabarangkeluar()
    {
        $this->load->model('barang_model');
        $this->barang_model->hapusdatabarangkeluar();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil di hapus!
        </div>');
        redirect('barang_keluar');
    }
      public function Hapusdatabarangmasuk()
    {
        $this->load->model('barang_model');
        $this->barang_model->hapusdatabarangmasuk($id_barang);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil di hapus!
        </div>');
        redirect('barang_masuk');
    }
     public function Editdatabarang($id_barang)
    {
        $data['barang'] = $this->barang_model->ambil_id_barang($id_barang);
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('editdatabarang', $data);
        $this->load->view('templates/footer');
    }
      public function Hapusdata_non_asset()
    {
        $this->load->model('barang_model');
        $this->barang_model->Hapus_non($id_barang);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil di hapus!
        </div>');
        redirect('barang_masuk');
    }
     public function Editdata_non_asset($id_barang)
    {
        $data['barang'] = $this->barang_model->ambil_id_non_asset($id_barang);
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('editdatanon_asset', $data);
        $this->load->view('templates/footer');
    }
     public function Proseseditdatabarang()
    {
        $this->barang_model->ProsesEditdatabarang();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil di edit!
        </div>');
        redirect('barang');
    }
     public function Proseseditdata_non_asset()
    {
        $this->barang_model->ProsesEdit_non();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil di edit!
        </div>');
        redirect('barang/non_asset');
    }
}
