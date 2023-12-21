<?php
defined('BASEPATH') or exit('No direct script access allowed');

class bbm_model extends CI_Model
{
    // Method yang digunakan untuk query builder select all from table pengguna
    
    public function semuadata()
    {
        return $this->db->get('bbm')->result_array();
    }
    public function ProsesTambah_bbm()
    {

        // var_dump($this->input->post());exit;
        $data = [
            "tanggal" => $this->input->post('tanggal'),
            "nama" => $this->input->post('nama'),
            "keterangan" => $this->input->post('keterangan'),
            "Jenis_bbm" => $this->input->post('Jenis_bbm'),
            "harga_bbm" => $this->input->post('harga_bbm'),
            "jumlah_harga_bbm" => $this->input->post('jumlah_harga_bbm'),
            "no_lambung" => $this->input->post('no_lambung'),
        ];
        // var_dump($data);exit;
        $this->db->insert('bbm', $data);
    }
      public function hapusdatabbm($id_bbm)
    {
        $this->db->where('id_bbm', $id_bbm);
        $this->db->delete('bbm');
    }

    public function ambil_id_bbm($id_bbm)
    {
        return $this->db->get_where('bbm', ['id_bbm' => $id_bbm])->row_array();
    }

    public function ProsesEditDatabbm()
    {
       $data = [
            "tanggal" => $this->input->post('tanggal'),
            "nama" => $this->input->post('nama'),
            "keterangan" => $this->input->post('keterangan'),
            "Jenis_bbm" => $this->input->post('Jenis_bbm'),
            "harga_bbm" => $this->input->post('harga_bbm'),
            "jumlah_harga_bbm" => $this->input->post('jumlah_harga_bbm'),
        ];
        // var_dump($data);exit;
        $this->db->where('id_bbm', $this->input->post('id_bbm'));
        $this->db->update('bbm', $data);
    }
}
