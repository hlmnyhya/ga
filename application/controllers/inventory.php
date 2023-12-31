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
            $data['lokasi']=$this->inventory_model->tampil_lokasi();
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
        $this->inventory_model->ProsesTambah_peminjaman();
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
    // Ambil data dari inventory berdasarkan id
    $inventory_data = $this->db->get_where('inventory', ['id_inventory' => $id])->row_array();

    // Update status di inventory menjadi 'Dikembalikan'
    $this->db->where('id_inventory', $id);
    $this->db->update('inventory', ['status' => 'Dikembalikan']);

    // Jika status sebelumnya 'Dipinjam', update qty di master_barang
    if ($inventory_data['status'] == 'Dipinjam') {
        $master_barang_data = $this->db->get_where('master_barang', ['kode_barang' => $inventory_data['nama_barang']])->row_array();
        $new_qty = $master_barang_data['qty'] + $inventory_data['qty'];

        // Update qty di master_barang
        $this->db->where('kode_barang', $inventory_data['nama_barang']);
        $this->db->update('master_barang', ['qty' => $new_qty]);
    }

    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
    Data berhasil dikembalikan!
    </div>');
    redirect('inventory/peminjaman');
}

}
