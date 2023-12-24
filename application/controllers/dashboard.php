<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index() {
        // Periksa apakah pengguna telah login atau belum.
        if ($this->session->userdata('user_id')) {
            // Pengguna telah login, tampilkan halaman dashboard.
            $data['keluar']=$this->db->query("SELECT * FROM usulan where status='Diterima'")->num_rows();
            $data['purchasing']=$this->db->query("SELECT * FROM usulan")->num_rows();
            $data['kendaraan']=$this->db->query("SELECT * FROM master_kendaraan")->num_rows();
            $this->load->model('count_model');
            $data['bbm'] = $this->count_model->getKendaraan_BBM();
            $data['barang'] = $this->count_model->get_barang();
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('dashboard',$data);
            $this->load->view('templates/footer');
        } else {
            // Pengguna belum login, arahkan ke halaman login.
            redirect('auth/login.php');
        }
    }
}
