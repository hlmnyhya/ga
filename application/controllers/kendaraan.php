<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kendaraan extends CI_Controller {
     public function __construct()
    {
      parent::__construct();
      $this->load->model('kendaraan_model');
    }

    public function index() {
        // Periksa apakah pengguna telah login atau belum.
        if ($this->session->userdata('user_id')) {
            // Pengguna telah login, tampilkan halaman dashboard.

            $data['data']=$this->kendaraan_model->semuadata();
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('data_kendaraan',$data);
            $this->load->view('templates/footer');
        } else {
            // Pengguna belum login, arahkan ke halaman login.
            redirect('auth/login.php');
        }
    }
    public function tambah_kendaraan() {
        if ($this->session->userdata('user_id')) {
            $data['data']=$this->kendaraan_model->semuadata();
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('tambah_kendaraan',$data);
            $this->load->view('templates/footer');
        } else {
            redirect('kendaraan');
        }
    }
    public function prosesTambah_kendaraan()
    {
        $this->load->model('kendaraan_model');
        $this->kendaraan_model->ProsesTambah_Kendaraan();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data baru berhasil di tambahkan!
        </div>');
        redirect('kendaraan');
    }
    public function hapusdatakendaraan($id_mobil)
    {
        $this->load->model('kendaraan_model');
        $this->kendaraan_model->hapusdatakendaraan($id_mobil);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil di hapus!
        </div>');
        redirect('kendaraan');
    }
    public function editdatakendaraan($id_mobil)
    {
        $data['kendaraan'] = $this->kendaraan_model->ambil_id_mobil($id_mobil);
                    $data['data']=$this->kendaraan_model->semuadata();
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('editdatakendaraan', $data);
        $this->load->view('templates/footer');
    }
    public function ProsesEditdatakendaraan()
    {
        $this->kendaraan_model->ProsesEditdatakendaraan();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil di edit!
        </div>');
        redirect('kendaraan');
    }
}
