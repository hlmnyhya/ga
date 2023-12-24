<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loogbok extends CI_Controller {
     public function __construct()
    {
      parent::__construct();
      $this->load->model('loogbok_model');
      $this->load->model('kendaraan_model');
    }

    public function index() {
        // Periksa apakah pengguna telah login atau belum.
        if ($this->session->userdata('user_id')) {
            // Pengguna telah login, tampilkan halaman dashboard.

            $data['data']=$this->loogbok_model->semuadata();
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('data_loogbok',$data);
            $this->load->view('templates/footer');
        } else {
            // Pengguna belum login, arahkan ke halaman login.
            redirect('auth/login.php');
        }
    }
    public function tambah_loogbok() {
        if ($this->session->userdata('user_id')) {
            $data['data']=$this->kendaraan_model->semuadata();
            $data['driver']=$this->loogbok_model->karyawan_divisi_driver();
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('tambah_loogbok',$data);
            $this->load->view('templates/footer');
        } else {
            redirect('loogbok');
        }
    }
    public function prosesTambah_loogbok()
    {
        $this->load->model('loogbok_model');
        $this->loogbok_model->ProsesTambah_loogbok();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data baru berhasil di tambahkan!
        </div>');
        redirect('loogbok');
    }
    public function hapusdataloogbok($id_loogbok)
    {
        $this->load->model('loogbok_model');
        $this->loogbok_model->hapusdataloogbok($id_loogbok);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil di hapus!
        </div>');
        redirect('loogbok');
    }
    public function editdataloogbok($id_loogbok)
    {
        $data['loogbok'] = $this->loogbok_model->ambil_id_loogbok($id_loogbok);
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('editdataloogbok', $data);
        $this->load->view('templates/footer');
    }
    public function ProsesEditDataloogbok()
    {
        $this->loogbok_model->ProsesEditDataloogbok()();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil di edit!
        </div>');   
        redirect('loogbok');
    }
}
