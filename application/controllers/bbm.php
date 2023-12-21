<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bbm extends CI_Controller {
     public function __construct()
    {
      parent::__construct();
      $this->load->model('bbm_model');
      $this->load->model('kendaraan_model');
      $this->load->model('loogbok_model');
    }

    public function index() {
        // Periksa apakah pengguna telah login atau belum.
        if ($this->session->userdata('user_id')) {
            // Pengguna telah login, tampilkan halaman dashboard.

            $data['data']=$this->bbm_model->semuadata();
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('data_bbm',$data);
            $this->load->view('templates/footer');
        } else {
            // Pengguna belum login, arahkan ke halaman login.
            redirect('auth/login.php');
        }
    }
    public function tambah_bbm() {
        if ($this->session->userdata('user_id')) {
            $data['ken']=$this->kendaraan_model->semuadata();
            $data['driver']=$this->loogbok_model->karyawan_divisi_driver();
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('tambah_bbm',$data);
            $this->load->view('templates/footer');
        } else {
            redirect('bbm');
        }
    }
    public function prosesTambah_bbm()
    {
        $this->load->model('bbm_model');
        $this->bbm_model->ProsesTambah_bbm();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data baru berhasil di tambahkan!
        </div>');
        redirect('bbm');
    }
    public function hapusdatabbm($id_bbm)
    {
        $this->load->model('bbm_model');
        $this->bbm_model->hapusdatabbm($id_bbm);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil di hapus!
        </div>');
        redirect('bbm');
    }
    public function editdatabbm($id_bbm)
    {
        $data['bbm'] = $this->bbm_model->ambil_id_bbm($id_bbm);
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('editdatabbm', $data);
        $this->load->view('templates/footer');
    }
    public function ProsesEditDatabbm()
    {
        $this->bbm_model->ProsesEditDatabbm()();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil di edit!
        </div>');
        redirect('bbm');
    }
}
