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
        $data = [
            "nama_peminjam" => $this->input->post('nama_peminjam'),
            "divisi/departement" => $this->input->post('divisi/departement'),
            "lokasi/cabang" => $this->input->post('lokasi/cabang'), 
            "nama_barang" => $this->input->post('nama_barang'),
            "qty" => $this->input->post('qty'),
            "kondisi" => $this->input->post('kondisi'),
            "paraf" => $this->input->post('paraf'),
            "keterangan" => $this->input->post('keterangan'),
            "tanggal_pengembalian" => $this->input->post('tanggal_pengembalian'),
             "status" => $this->input->post('status'),
        ];
        $this->db->insert('inventory', $data);
    }
    public function ProsesTambah_peminjaman()
{
    $config['upload_path']   = './uploads/paraf/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size']      = 2048; // 2MB (adjust as needed)
    $config['encrypt_name']  = TRUE; // Rename the uploaded file
    
    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if ($this->upload->do_upload('paraf')) {
        $paraf_data = $this->upload->data();
        $data['paraf'] = $paraf_data['file_name'];
    }

    $data = [
        "nama_peminjam" => $this->input->post('nama_peminjam'),
        "divisi/departement" => $this->input->post('divisi/departement'),
        "lokasi/cabang" => $this->input->post('lokasi/cabang'),
        "nama_barang" => $this->input->post('nama_barang'),
        "qty" => $this->input->post('qty'),
        "kondisi" => $this->input->post('kondisi'),
        "paraf" => isset($data['paraf']) ? $data['paraf'] : $this->input->post('paraf'),
        "keterangan" => $this->input->post('keterangan'),
        "tanggal_peminjaman" => $this->input->post('tanggal_peminjaman'),
        "tanggal_pengembalian" => $this->input->post('tanggal_pengembalian'),
        "status" => 'Dipinjam',
    ];

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