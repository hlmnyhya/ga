<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tandaterima extends CI_Controller {
     public function __construct()
    {
      parent::__construct();
    //   $this->load->model('tandaterima_model');
    }

    public function index() {
        // Periksa apakah pengguna telah login atau belum.
        if ($this->session->userdata('user_id')) {
            // Pengguna telah login, tampilkan halaman dashboard.

            // $data['data']=$this->tandaterima_model->semuadata();
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('data_tandaterima',$data);
            $this->load->view('templates/footer');
        } else {
            // Pengguna belum login, arahkan ke halaman login.
            redirect('auth/login.php');
        }
    }
     public function tambah_tandaterima() {
        if ($this->session->userdata('user_id')) {
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('tambah_tandaterima');
            $this->load->view('templates/footer');
        } else {
            redirect('tanda_terima');
        }
    }
    public function ProsesTambah_tandaterima()
    {
        $this->load->model('tandaterima_model');
        // $this->tandaterima_model->ProsesTambah_tandaterima();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data baru berhasil di tambahkan!
        </div>');
        redirect('data_tandaterima');
    }
}