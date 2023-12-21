<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Spk_model extends CI_Model
{
    // Method yang digunakan untuk query builder select all from table pengguna
    
    public function semuadata()
    {
        return $this->db->get('spk')->result_array();
    }
    public function ProsesTambah_Spk()
    {

        // var_dump($this->input->post());exit;
        $data = [
            "tanggal" => $this->input->post('tanggal'),
            "nomor_spk" => $this->input->post('nomor_spk'),
            "nama_vendor" => $this->input->post('nama_vendor'),
            "alamat_vendor" => $this->input->post('alamat_vendor'),
            "kebutuhan" => $this->input->post('kebutuhan'),
            "rincian_biaya" => $this->input->post('rincian_biaya'),
            "cara_pembayaran" => $this->input->post('cara_pembayaran'),
            "jangka_waktu" => $this->input->post('jangka_waktu'),
        ];
        // var_dump($data);exit;
        $this->db->insert('spk', $data);
    }
     public function HapusdataSpk($id_spk)
    {
        $this->db->where('id_spk', $id_spk);
        $this->db->delete('spk');
    }

    public function ambil_id_spk($id_spk)
    {
        return $this->db->get_where('spk', ['id_spk' => $id_spk])->row_array();
    }

    public function ProsesEditdatasupplier()
    {
       $data = [
           "tanggal" => $this->input->post('tanggal'),
            "nomor_spk" => $this->input->post('nomor_spk'),
            "nama_vendor" => $this->input->post('nama_vendor'),
            "alamat_vendor" => $this->input->post('alamat_vendor'),
            "kebutuhan" => $this->input->post('kebutuhan'),
            "rincian_biaya" => $this->input->post('rincian_biaya'),
            "cara_pembayaran" => $this->input->post('cara_pembayaran'),
            "jangka_waktu" => $this->input->post('jangka_waktu'),
        ];
        // var_dump($data);exit;
        $this->db->where('id_spk', $this->input->post('id_spk'));
        $this->db->update('spk', $data);
    }
}
