<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class purchase_order extends CI_Controller {
     public function __construct()
    {
      parent::__construct();
      $this->load->model('purchase_order_model');
      $this->load->model('ppharga_model');
    }

    public function index() {
        // Periksa apakah pengguna telah login atau belum.
        if ($this->session->userdata('user_id')) {
            // Pengguna telah login, tampilkan halaman dashboard.

            $data['data']=$this->purchase_order_model->semuadata();
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('data_purchase_order', $data);
            $this->load->view('templates/footer');
        } else {
            // Pengguna belum login, arahkan ke halaman login.
            redirect('auth/login.php');
        }
    }
    public function tambah_purchase_order() {
        if ($this->session->userdata('user_id')) {
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('tambah_purchase_order');
            $this->load->view('templates/footer');
        } else {
            redirect('purchase_order');
        }
    }
    public function prosesTambah_purchase_order()
    {
        $this->load->model('purchase_order_model');
        $this->purchase_order_model->ProsesTambah_purchase_order();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data baru berhasil di tambahkan!
        </div>');
        redirect('purchase_order');
    }
    public function hapusdatapurchaseorder($id_po)
    {
        $this->load->model('purchase_order_model');
        $this->purchase_order_model->hapusdatapurchaseorder($id_po);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil di hapus!
        </div>');
        redirect('purchase_order');
    }
    public function editdatapurchaseorder($id_po)
    {
        $data['purchase_order'] = $this->purchase_order_model->ambil_id_po($id_po);
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('editdatapurchaseorder', $data);
        $this->load->view('templates/footer');
    }
    public function Proseseditdatapurchaseorder()
    {
        $this->purchase_order_model->ProsesEditdatapurchaseorder();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil di edit!
        </div>');
        redirect('purchase_order');
    }

    public function sesuai($id)
    {
        $cari=$this->db->query("SELECT * FROM usulan WHERE id_usulan='$id'")->row_array();
        $data=array(
            'nama_peminjam'=>$cari['ttd_penyerah'],
            'divisi/departement'=>$cari['divisi/departement_penyerah'],
            'lokasi/cabang'=>$cari['lokasi/cabang'],
            'nama_barang'=>$cari['nama_produk&jasa'],
            'qty'=>$cari['jumlah'],
            'status'=>$cari['keterangan'],
            'paraf'=>$cari['ttd_penerima'],
            'keterangan'=>$cari['keterangan'],
            'tanggal_peminjaman'=>$cari['tanggal'],
            'tanggal_pengembalian'=>$cari['tanggal_pengembalian'],
        );
        $this->db->insert('inventory',$data);
        $qty=$cari['jumlah'];
        $kode_barang=$cari['kode_barang'];
        // var_dump($kode_barang);exit;
        $cek=$this->db->query("SELECT * FROM master_barang where kode_barang='$kode_barang'")->row();

        $jml=$cek->qty;

        $akhir=$jml+$qty;
        $this->db->query("UPDATE master_barang set qty='$akhir' where kode_barang='$kode_barang'");
        // $nama_peminjam=,ast
        // var_dump($akhir);exit;
        $this->purchase_order_model->sesuai($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil di edit!
        </div>');
        redirect('purchase_order');
    }

    public function tidak_sesuai($id)
    {
        $this->purchase_order_model->tidak_sesuai($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil di edit!
        </div>');
        redirect('purchase_order');
    }
}