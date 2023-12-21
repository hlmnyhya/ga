<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class supplier extends CI_Controller {
     public function __construct()
    {
      parent::__construct();
      $this->load->model('supplier_model');
    }

    public function index() {
        // Periksa apakah pengguna telah login atau belum.
        if ($this->session->userdata('user_id')) {
            // Pengguna telah login, tampilkan halaman dashboard.

            $data['data']=$this->supplier_model->semuadata();
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('data_supplier',$data);
            $this->load->view('templates/footer');
        } else {
            // Pengguna belum login, arahkan ke halaman login.
            redirect('auth/login.php');
        }
    }
    public function tambah_supplier() {
        if ($this->session->userdata('user_id')) {
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('tambah_supplier');
            $this->load->view('templates/footer');
        } else {
            redirect('supplier');
        }
    }
    public function prosesTambah_supplier()
    {
        $this->load->model('supplier_model');
        $this->supplier_model->ProsesTambah_supplier();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data baru berhasil di tambahkan!
        </div>');
        redirect('supplier');
    }
    public function Hapusdatasupplier($id_penyedia)
    {
        $this->load->model('supplier_model');
        $this->supplier_model->hapusdatasupplier($id_penyedia);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil di hapus!
        </div>');
        redirect('supplier');
    }
    public function editdatasupplier($id_penyedia)
    {
        $data['supplier'] = $this->supplier_model->ambil_id_penyedia($id_penyedia);
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('editdatasupplier', $data);
        $this->load->view('templates/footer');
    }
    public function ProsesEditdatasupplier()
    {
        $this->supplier_model->ProsesEditdatasupplier();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil di edit!
        </div>');
        redirect('supplier');
    }
}
