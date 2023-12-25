<?php
defined('BASEPATH') or exit('No direct script access allowed');

class inventory_model extends CI_Model
{
    // Method yang digunakan untuk query builder select all from table pengguna
    
    public function semuadatapinjam()
    {
        $this->db->where('status','Dipinjam');
        return $this->db->get('inventory')->result_array();
    }

    public function semuadatapengembalian()
    {
        $this->db->where('status','Dikembalikan');
        return $this->db->get('inventory')->result_array();
    }
public function ProsesTambah_pengembalian()
{
    $id_barang = $this->input->post('id_barang');
    $qty_pengembalian = $this->input->post('qty');

    // Ambil data barang dari master_barang
    $master_barang = $this->db->get_where('master_barang', ['id_barang' => $id_barang])->row_array();

    // Hitung qty baru setelah pengembalian
    $new_qty = $master_barang['qty'] + $qty_pengembalian;

    // Update qty di master_barang
    $this->db->where('id_barang', $id_barang);
    $this->db->update('master_barang', ['qty' => $new_qty]);

    // Data untuk diinsert ke tabel inventory
    $data = [
        "nama_peminjam" => $this->input->post('nama_peminjam'),
        "divisi_departement" => $this->input->post('divisi_departement'),
        "lokasi_cabang" => $this->input->post('lokasi_cabang'), 
        "nama_barang" => $this->input->post('nama_barang'),
        "qty" => $qty_pengembalian,
        "kondisi" => $this->input->post('kondisi'),
        "paraf" => $this->input->post('paraf'),
        "keterangan" => $this->input->post('keterangan'),
        "tanggal_pengembalian" => $this->input->post('tanggal_pengembalian'),
        "status" => $this->input->post('status'),
    ];

    // Insert data ke tabel inventory
    $this->db->insert('inventory', $data);
}

 public function ProsesTambah_peminjaman()
{
    $config['upload_path']   = './uploads/paraf/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size']      = 2048; // 2MB (sesuaikan sesuai kebutuhan)
    $config['encrypt_name']  = TRUE; // Rename the uploaded file

    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    // Upload paraf jika ada
    if ($this->upload->do_upload('paraf')) {
        $paraf_data = $this->upload->data();
        $paraf = $paraf_data['file_name'];
    } else {
        $paraf = $this->input->post('paraf');
    }

    $nama_barang = $this->input->post('nama_barang');
    $master_barang = $this->db->get_where('master_barang', ['kode_barang' => $nama_barang])->row_array();

    $new_qty = $master_barang['qty'] - $this->input->post('qty');

    // Update qty di master_barang
    $this->db->where('kode_barang', $nama_barang);
    $this->db->update('master_barang', ['qty' => $new_qty]);

    // Data untuk diinsert ke tabel inventory
    $data = [
        "nama_peminjam" => $this->input->post('nama_peminjam'),
        "divisi/departement" => $this->input->post('divisi/departement'),
        "lokasi/cabang" => $this->input->post('lokasi/cabang'),
        "nama_barang" => $nama_barang, // Ganti dengan $nama_barang
        "qty" => $this->input->post('qty'),
        "kondisi" => $this->input->post('kondisi'),
        "paraf" => $paraf,
        "keterangan" => $this->input->post('keterangan'),
        "tanggal_peminjaman" => $this->input->post('tanggal_peminjaman'),
        "tanggal_pengembalian" => $this->input->post('tanggal_pengembalian'),
        "status" => 'Dipinjam',
    ];

    // Insert data ke tabel inventory
    $this->db->insert('inventory', $data);
}




    public function ambil_id_inventory($id_inventory)
    {
        return $this->db->get_where('inventory', ['id_inventory' => $id_invenotry])->row_array();
    }

    public function ProsesEditData()
    {
        $data = [
            "nama_peminjam" => $this->input->post('nama_peminjam'),
            "divisi/dapertement" => $this->input->post('divisi/dapertement'),
            "lokasi/cabang" => $this->input->post('lokasi/cabang'),
            "nama_barang" => $this->input->post('nama_barang'),
            "qty" => $this->input->post('qty'),
            "kondisi" => $this->input->post('kondisi'),
            "paraf" => $this->input->post('paraf'),
            "keterangan" => $this->input->post('keterangan'),
            "tanggal_peminjaman" => $this->input->post('tanggal_peminjaman'),
            "tanggal_pengembalian" => $this->input->post('tanggal_pengembalian'),
             "status" => $this->input->post('status'),
        ];
        // var_dump($data);exit;
        $this->db->where('id_inventory', $this->input->post('id_inventory'));
        $this->db->update('inventory', $data);
    }

    public function kode_barang()
{
    $query = $this->db->query("SELECT `kode_barang`,`nama_barang` FROM `master_barang` ORDER BY `kode_barang` ASC");
    return $query->result();
}

public function tampil_lokasi()
{
    $query = $this->db->query('SELECT * FROM `master_lokasi`');
    return $query->result();
}


}