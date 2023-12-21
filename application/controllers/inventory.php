<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Controller {
     public function __construct()
    {
      parent::__construct();
      $this->load->model('inventory_model');
      $this->load->model('usulan_model');
    }


    public function pengembalian() {
        // Periksa apakah pengguna telah login atau belum.
        if ($this->session->userdata('user_id')) {
            // Pengguna telah login, tampilkan halaman dashboard.
           $data['data']=$this->inventory_model->semuadatapengembalian();
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('data_pengembalian', $data);
            $this->load->view('templates/footer');
        } else {
            // Pengguna belum login, arahkan ke halaman login.
            redirect('auth/login.php');
        }
    }
    public function tambah_pengembalian() {
        // Periksa apakah pengguna telah login atau belum.
        if ($this->session->userdata('user_id')) {
            // Pengguna telah login, tampilkan halaman dashboard.
            $data['penyerah']=$this->usulan_model->karyawan_divisi();
            $data['barang']=$this->inventory_model->kode_barang();
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('tambah_pengembalian',$data);
            $this->load->view('templates/footer');
        } else {
            // Pengguna belum login, arahkan ke halaman login.
            redirect('inventory');
        }
    }
    public function ProsesTambah_pengembalian()
    {
        $this->load->model('inventory_model');
        $this->inventory_model->ProsesTambah_pengembalian();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data baru berhasil di tambahkan!
        </div>');
        redirect('inventory/ProsesTambah_pengembalian');
    }
    public function peminjaman() {
        // Periksa apakah pengguna telah login atau belum.
        if ($this->session->userdata('user_id')) {
            // Pengguna telah login, tampilkan halaman dashboard.
            $data['data']=$this->inventory_model->semuadatapinjam();
            $data['barang']=$this->inventory_model->kode_barang();
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('data_peminjaman', $data);
            $this->load->view('templates/footer');
        } else {
            // Pengguna belum login, arahkan ke halaman login.
            redirect('data_peminjaman');
        }
    }
     public function tambah_peminjaman() {
        // Periksa apakah pengguna telah login atau belum.
        if ($this->session->userdata('user_id')) {
            // Pengguna telah login, tampilkan halaman dashboard.
            $data['penyerah']=$this->usulan_model->karyawan_divisi();
            $data['barang']=$this->inventory_model->kode_barang();
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('tambah_peminjaman',$data);
            $this->load->view('templates/footer');
        } else {
            // Pengguna belum login, arahkan ke halaman login.
            redirect('data_peminjaman');
        }
    }
    public function ProsesTambah_peminjaman()
    {
        $this->load->model('inventory_model');
        $data = [
            "nama_peminjam" => $this->input->post('nama_peminjam'),
            "divisi/departement" => $this->input->post('divisi/departement'),
            "lokasi/cabang" => $this->input->post('lokasi/cabang'),
            "nama_barang" => $this->input->post('nama_barang'),
            "qty" => $this->input->post('qty'),
            "kondisi" => $this->input->post('kondisi'),
            "paraf" => $this->input->post('paraf'),
            "keterangan" => $this->input->post('keterangan'),
            "tanggal_peminjaman" => $this->input->post('tanggal_peminjaman'),
            "tanggal_pengembalian" => $this->input->post('tanggal_pengembalian'),
             "status" => 'Dipinjam',
        ];
        // var_dump($data);exit;
        $this->inventory_model->ProsesTambah_peminjaman($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data baru berhasil di tambahkan!
        </div>');
        redirect('inventory/peminjaman');
    }
          public function Hapusdatapeminjaman()
    {
        $this->load->model('inventory_model');
        $this->inventory_model->hapusdatapeminjaman();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil di hapus!
        </div>');
        redirect('data_peminjaman');
    }

    public function kembalikan($id)
    {
        // $this->load->model('inventory_model');
        // $this->inventory_model->hapusdatapeminjaman();
        $this->db->query("UPDATE inventory SET status='Dikembalikan' WHERE id_inventory='$id'");
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil di kembalikan!
        </div>');
        redirect('inventory/peminjaman');
    }
}
