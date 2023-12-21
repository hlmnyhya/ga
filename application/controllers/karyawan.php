<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class karyawan extends CI_Controller {
    
     public function __construct()
    {
      parent::__construct();
      $this->load->model('karyawan_model');
    }

    public function index() {
        // Periksa apakah pengguna telah login atau belum.
        if ($this->session->userdata('user_id')) {
            // Pengguna telah login, tampilkan halaman dashboard.

            $data['data']=$this->karyawan_model->semuadata();
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('data_karyawan',$data);
            $this->load->view('templates/footer');
        } else {
            // Pengguna belum login, arahkan ke halaman login.
            redirect('auth/login.php');
        }
    }
    public function tambah_karyawan() {
        if ($this->session->userdata('user_id')) {
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('tambah_karyawan');
            $this->load->view('templates/footer');
        } else {
            redirect('karyawan');
        }
    }
    public function prosesTambah_karyawan()
    {
        $this->load->model('karyawan_model');
        $this->karyawan_model->ProsesTambah_Karyawan();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data baru berhasil di tambahkan!
        </div>');
        redirect('karyawan');
    }
    public function hapusdatakaryawan($id_karyawan)
    {
        $this->load->model('karyawan_model');
        $this->karyawan_model->hapusdatakaryawan($id_karyawan);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil di hapus!
        </div>');
        redirect('karyawan');
    }
    public function editdatakaryawan($id_karyawan)
    {
        $data['karyawan'] = $this->karyawan_model->ambil_id_karyawan($id_karyawan);
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('editdatakaryawan', $data);
        $this->load->view('templates/footer');
    }
    public function Proseseditdatakaryawan()
    {
        $this->karyawan_model->ProsesEditdatakaryawan();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil di edit!
        </div>');
        redirect('karyawan');
    }
}
