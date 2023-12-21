<?php
defined('BASEPATH') or exit('No direct script access allowed');

class supplier_model extends CI_Model
{
    // Method yang digunakan untuk query builder select all from table pengguna
    
    public function semuadata()
    {
        return $this->db->get('master_supplier')->result_array();
    }
    public function ProsesTambah_supplier()
    {

        // var_dump($this->input->post());exit;
        $data = [
            "nama_penyedia_eksternal" => $this->input->post('nama_penyedia_eksternal'),
            "alamat" => $this->input->post('alamat'),
            "contact_person" => $this->input->post('contact_person'),
            "e-mail" => $this->input->post('e-mail'),
            "no_telp" => $this->input->post('no_telp'),
            "bidang_usaha" => $this->input->post('bidang_usaha'),
            "keterangan_terdaftar" => $this->input->post('keterangan_terdaftar'),
        ];
        // var_dump($data);exit;
        $this->db->insert('master_supplier', $data);
    }
     public function Hapusdatasupplier($id_penyedia)
    {
        $this->db->where('id_penyedia', $id_penyedia);
        $this->db->delete('master_supplier');
    }

    public function ambil_id_penyedia($id_penyedia)
    {
        return $this->db->get_where('master_supplier', ['id_penyedia' => $id_penyedia])->row_array();
    }

    public function ProsesEditdatasupplier()
    {
       $data = [
            "nama_penyedia_eksternal" => $this->input->post('nama_penyedia_eksternal'),
            "alamat" => $this->input->post('alamat'),
            "contact_person" => $this->input->post('contact_person'),
            "e-mail" => $this->input->post('e-mail'),
            "no_telp" => $this->input->post('no_telp'),
            "bidang_usaha" => $this->input->post('bidang_usaha'),
            "keterangan_terdaftar" => $this->input->post('keterangan_terdaftar'),
        ];
        // var_dump($data);exit;
        $this->db->where('id_penyedia', $this->input->post('id_penyedia'));
        $this->db->update('master_supplier', $data);
    }
}
