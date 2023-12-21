<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporankeluar extends CI_Controller {
     public function __construct()
    {
      parent::__construct();
      $this->load->model('Laporankeluar_model');
      $this->load->model('usulan_model');
    }

    public function index() {
        // Periksa apakah pengguna telah login atau belum.
        if ($this->session->userdata('user_id')) {
            // Pengguna telah login, tampilkan halaman dashboard.

            $data['data']=$this->Laporankeluar_model->semuadata();
            // var_dump($data);exit
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('data_Laporankeluar',$data);
            $this->load->view('templates/footer');
        } else {
            // Pengguna belum login, arahkan ke halaman login.
            redirect('auth/login.php');
        }
    }
    public function tambah_Laporankeluar() {
        if ($this->session->userdata('user_id')) {
            $data['u']=$this->usulan_model->semuadata();
            // var_dump($data['u']);exit;
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('tambah_Laporankeluar',$data);
            $this->load->view('templates/footer');
        } else {
            redirect('Laporankeluar');
        }
    }
    public function prosesTambah_Laporankeluar()
    {
        $this->load->model('Laporankeluar_model');
        $this->Laporan_model->ProsesTambah_Laporan();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data baru berhasil di tambahkan!
        </div>');
        redirect('Laporankeluar');
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
