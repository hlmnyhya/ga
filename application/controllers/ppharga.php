<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ppharga extends CI_Controller {
     public function __construct()
    {
      parent::__construct();
      $this->load->model('ppharga_model');
      $this->load->model('supplier_model');
    }

    public function index() {
        // Periksa apakah pengguna telah login atau belum.
        if ($this->session->userdata('user_id')) {
            // Pengguna telah login, tampilkan halaman dashboard.

            $data['data']=$this->ppharga_model->semuadata();
            // var_dump($data['data']);exit;
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('data_ppharga',$data);
            $this->load->view('templates/footer');
        } else {
            // Pengguna belum login, arahkan ke halaman login.
            redirect('auth/login.php');
        }
    }
    public function tambah_ppharga() {
        if ($this->session->userdata('user_id')) {
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('tambah_ppharga');
            $this->load->view('templates/footer');
        } else {
            redirect('ppharga');
        }
    }
    public function prosesTambah_ppharga()
    {
        $this->load->model('ppharga_model');
        $this->ppharga_model->ProsesTambah_ppharga();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data baru berhasil di tambahkan!
        </div>');
        redirect('ppharga');
    }
    public function hapusdatappharga($id_pph)
    {
        $this->load->model('ppharga_model');
        $this->ppharga_model->hapusdatappharga($id_pph);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil di hapus!
        </div>');
        redirect('ppharga');
    }
    public function editdatappharga($id_pph)
    {
        $data['ppharga'] = $this->ppharga_model->ambil_id_pph($id_pph);
        $data['supplier']= $this->ppharga_model->tampil_supplier();
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('editdatappharga', $data);
        $this->load->view('templates/footer');
    }
    public function updatepenawaran($id_pph)
    {
        $data['ppharga'] = $this->ppharga_model->ambil_id_pph($id_pph);
        // $data['supplier']= $this->supplier_model->semuadata();
        $data['supplier']= $this->ppharga_model->tampil_supplier();
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('updateppharga', $data);
        $this->load->view('templates/footer');
    }
    
    public function ProsesEditdatappharga()
    {
        $this->ppharga_model->ProsesEditdatappharga();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil di edit!
        </div>');
        redirect('ppharga');
    }
    
    public function ProsesUpdatePenawaran()
{
    // Update data in pp_harga table
    $this->ppharga_model->ProsesUpdatePenawaran();

     $id_pph = $this->input->post('id_pph');

    // Retrieve updated data
    $data['ppharga'] = $this->ppharga_model->ambil_id_pph($id_pph);

    // Insert data into purchase_order table
    $this->db->query("
        INSERT INTO purchase_order (
            `no_usulan`,
            `nama`,
            `deskripsi`,
            `qty`,
            `supplier`,
            `ATTN`,
            `alamat_supp`,
            `tanggal`,
            `e-mail_supp`,
            `no_telp_supp`
        )
        SELECT
            u.`no_usulan`,
            pph.`nama_item`,
            pph.`rincian_barang_jasa`,
            pph.`jumlah`,
            ms.`nama_penyedia_eksternal`,
            u.`penerima`,
            ms.`alamat`,
            NOW(),
            ms.`e-mail`,
            ms.`no_telp`
        FROM usulan u
        LEFT JOIN pp_harga pph ON u.id_usulan = pph.id_pph
        LEFT JOIN master_supplier ms ON pph.id_penyedia = ms.id_penyedia
        WHERE pph.id_pph = $id_pph"
    );

    // Set flashdata and redirect
    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data berhasil di Update!
    </div>');
    redirect('ppharga');
}

    
public function tambah_po_aksi()
{
    $id_pph = $this->input->post('id_pph'); 
    $this->load->model('ppharga_model'); // Adjust this line based on your actual model name
    $result = $this->ppharga_model->tambah_po_aksi_model($id_pph);
    
    if ($result) {
        // Insertion successful
        redirect('ppharga');
        echo 'Success'; // Note: This line will not be executed after redirect
    } else {
        // Insertion failed
        echo 'Failed';
    }
}


}
