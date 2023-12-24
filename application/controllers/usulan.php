<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usulan extends CI_Controller {
     public function __construct()
    {
      parent::__construct();
      $this->load->model('usulan_model');
    }

    public function index() {
        // Periksa apakah pengguna telah login atau belum.
        if ($this->session->userdata('user_id')) {
            // Pengguna telah login, tampilkan halaman dashboard.

            $data['data']=$this->usulan_model->semuadata();
            $data['penyerah']=$this->usulan_model->karyawan_divisi();
            // var_dump($data['penyerah']);exit;
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('usulan',$data);
            $this->load->view('templates/footer');
        } else {
            // Pengguna belum login, arahkan ke halaman login.
            redirect('auth/login.php');
        }
    }
     public function tambah_usulan() {
        if ($this->session->userdata('user_id')) {
            
            $data['penyerah']=$this->usulan_model->karyawan_divisi();
            $data['barang']=$this->usulan_model->tampil_barang();
            $data['latestUsulanNumber'] = $this->getLatestUsulanNumber();
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('tambah_usulan',$data);
            $this->load->view('templates/footer');
        } else {
            redirect('usulan');
        }
    }
    public function prosesTambah_usulan()
    {
        $this->load->model('usulan_model');
        $this->usulan_model->prosesTambah_usulan();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data baru berhasil di tambahkan!
        </div>');
        redirect('usulan');
    }

public function getLatestUsulanNumber()
{
    $query = $this->db->query("SELECT MAX(CAST(SUBSTRING(no_usulan, 2) AS UNSIGNED)) as max_usulan FROM usulan");
    $result = $query->row();

    if ($result->max_usulan) {
        $latestNumber = str_pad($result->max_usulan + 1, 4, '0', STR_PAD_LEFT);
    } else {
        $latestNumber = '0001';
    }

    return $latestNumber;
}


}