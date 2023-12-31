<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spk extends CI_Controller {
     public function __construct()
    {
      parent::__construct();
      $this->load->model('Spk_model');
      $this->load->model('usulan_model');
    }

    public function index() {
        // Periksa apakah pengguna telah login atau belum.
        if ($this->session->userdata('user_id')) {
            // Pengguna telah login, tampilkan halaman dashboard.

            $data['data']=$this->Spk_model->semuadata();
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('data_Spk',$data);
            $this->load->view('templates/footer');
        } else {
            // Pengguna belum login, arahkan ke halaman login.
            redirect('auth/login.php');
        }
    }
    public function tambah_Spk() {
        if ($this->session->userdata('user_id')) {
            
            $data['penyerah']=$this->usulan_model->karyawan_divisi();
            $data['latestSPKnumber'] = $this->getlatestSPKnumber();
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('tambah_Spk',$data);
            $this->load->view('templates/footer');
        } else {
            redirect('Spk');
        }
    }
    public function prosesTambah_Spk()
    {
        $this->load->model('Spk_model');
        $this->Spk_model->ProsesTambah_Spk();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data baru berhasil di tambahkan!
        </div>');
        redirect('Spk');
    }

    public function HapusdataSpk($id_spk)
    {
        $this->load->model('Spk_model');
        $this->Spk_model->hapusdataSpk($id_spk);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil di hapus!
        </div>');
        redirect('Spk');
    }
    public function editdataSpk($id_spk)
    {
        $data['spk'] = $this->Spk_model->ambil_id_spk($id_spk);
        $data['penyerah']=$this->usulan_model->karyawan_divisi();
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('editdataSpk', $data);
        $this->load->view('templates/footer');
    }
    public function ProsesEditdataSpk()
    {
        $this->Spk_model->ProsesEditdataSpk();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil di edit!
        </div>');
        redirect('Spk');
    }

public function berita_acara_spk($id_spk)
{
    $where = array('id_spk' => $id_spk);
    $data['data'] = $this->db->query("SELECT * FROM spk WHERE id_spk = '$id_spk';")->result();
    $this->load->view('laporan_spk', $data);
}


    public function getlatestSPKnumber()
{
    $query = $this->db->query("SELECT MAX(CAST(SUBSTRING(nomor_spk, 2) AS UNSIGNED)) as max_usulan FROM spk");
    $result = $query->row();

    if ($result->max_usulan) {
        $latestNumber = str_pad($result->max_usulan + 1, 4, '0', STR_PAD_LEFT);
    } else {
        $latestNumber = '0001';
    }

    return $latestNumber;

}
}
