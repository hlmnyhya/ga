<?php
defined('BASEPATH') or exit('No direct script access allowed');

class barang_model extends CI_Model
{
    // Method yang digunakan untuk query builder select all from table pengguna
    
    public function semuadatamasuk()
    {
        return $this->db->get('master_barang')->result_array();
    }
     public function semuadatakeluar()
    {
        return $this->db->get('master_barang')->result_array();
    }
     public function non_asset_barang()
    {
        return $this->db->get('master_barang_non_asset')->result_array();
    }
    public function ProsesTambah_masuk()
    {
        $data = [
            "kode_barang" => $this->input->post('kode_barang'),
            "nama_barang" => $this->input->post('nama_barang'),
            "jenis_barang" => $this->input->post('jenis_barang'),
            "qty" => $this->input->post('qty'),
            "satuan" => $this->input->post('satuan'),
            "kategori" => $this->input->post('kategori'),
            "tanggal" => date('Y-m-d'),
        ];
        $this->db->insert('master_barang', $data);
    }
        public function ProsesTambah_non()
        {
            $data = [
                "kode_barang_non" => $this->input->post('kode_barang_non'),
                "nama_barang_non" => $this->input->post('nama_barang_non'),
                "jenis_barang_non" => $this->input->post('jenis_barang_non'),
                "satuan_non" => $this->input->post('satuan_non'),
                "kategori_non" => $this->input->post('kategori_non'),
                "qty" => $this->input->post('qty'),
                "tanggal" => date('Y-m-d'),
            ];
            $this->db->insert('master_barang_non_asset', $data);
        }

        public function ProsesEdit_non()
{
    $data = [
        "kode_barang_non" => $this->input->post('kode_barang_non'),
        "nama_barang_non" => $this->input->post('nama_barang_non'),
        "jenis_barang_non" => $this->input->post('jenis_barang_non'),
        "satuan_non" => $this->input->post('satuan_non'),
        "kategori_non" => $this->input->post('kategori_non'),
        "qty" => $this->input->post('qty'),
        "tanggal" => date('Y-m-d'),
    ];

    $this->db->where('id_barang_non', $id_barang);
    $this->db->update('master_barang_non_asset', $data);
}

public function Hapus_non($id_barang)
{
    $this->db->where('id_barang_non', $id_barang);
    $this->db->delete('master_barang_non_asset');
}

    public function ProsesTambah_keluar()
    {
        $data = [
            "kode_barang" => $this->input->post('kode_barang'),
            "nama_barang" => $this->input->post('nama_barang'),
            "jenis_barang" => $this->input->post('jenis_barang'),
            "qty" => $this->input->post('qty'),
            "satuan" => $this->input->post('satuan'),
            "kategori" => $this->input->post('kategori'),
            "tanggal" => date('Y-m-d'),
        ];
        $this->db->insert('master_barang', $data);
    }
    public function Hapusdata($id_barang)
    {
        $this->db->where('id_barang', $id_barang);
        $this->db->delete('master_barang');
    }

    public function ambil_id_barang($id_barang)
    {
        return $this->db->get_where('master_barang', ['id_barang' => $id_barang])->row_array();
    }
    public function ambil_id_non_asset($id_barang)
    {
        return $this->db->get_where('master_barang_non_asset', ['id_barang_non' => $id_barang])->row_array();
    }

    public function ProsesEditData()
    {
        $data = [
            "kode_barang" => $this->input->post('kode_barang'),
            "nama_barang" => $this->input->post('nama_barang'),
            "jenis_barang" => $this->input->post('jenis_barang'),
            "satuan" => $this->input->post('satuan'),
            "kategori" => $this->input->post('kategori'),
            "tanggal" => date('Y-m-d'),
        ];
        // var_dump($data);exit;
        $this->db->where('id_barang', $this->input->post('id_barang'));
        $this->db->update('data_barang', $data);
    }
}