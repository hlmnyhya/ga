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
    public function ProsesTambah_masuk()
    {
        $data = [
            "kode_barang" => $this->input->post('kode_barang'),
            "nama_barang" => $this->input->post('nama_barang'),
            "jenis_barang" => $this->input->post('jenis_barang'),
            "qty" => $this->input->post('qty'),
            "satuan" => $this->input->post('satuan'),
            "kategori" => $this->input->post('kategori'),
        ];
        $this->db->insert('master_barang', $data);
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
        ];
        $this->db->insert('master_barang', $data);
    }
    public function Hapusdata($id_barang)
    {
        $this->db->where('id_barang', $id_barang);
        $this->db->delete('data_barang');
    }

    public function ambil_id_barang($id_barang)
    {
        return $this->db->get_where('barang', ['id_barang' => $id_barang])->row_array();
    }

    public function ProsesEditData()
    {
        $data = [
            "kode_barang" => $this->input->post('kode_barang'),
            "nama_barang" => $this->input->post('nama_barang'),
            "jenis_barang" => $this->input->post('jenis_barang'),
            "satuan" => $this->input->post('satuan'),
            "kategori" => $this->input->post('kategori'),
        ];
        // var_dump($data);exit;
        $this->db->where('id_barang', $this->input->post('id_barang'));
        $this->db->update('data_barang', $data);
    }
}