<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan_model extends CI_Model
{
    // Method yang digunakan untuk query builder select all from table pengguna
    
    public function semuadata()
    {
        return $this->db->get('master_karyawan')->result_array();
    }
    public function ProsesTambah_Karyawan()
    {

        // var_dump($this->input->post());exit;
        $data = [
            "no_karyawan" => $this->input->post('no_karyawan'),
            "nama" => $this->input->post('nama'),
            "jabatan" => $this->input->post('jabatan'),
            "email" => $this->input->post('email'),
            "divisi" => $this->input->post('divisi'),
        ];
        // var_dump($data);exit;
        $this->db->insert('master_karyawan', $data);
    }
     public function hapusdatakaryawan($id_karyawan)
    {
        $this->db->where('id_karyawan', $id_karyawan);
        $this->db->delete('master_karyawan');
    }

    public function ambil_id_karyawan($id_karyawan)
    {
        return $this->db->get_where('master_karyawan', ['id_karyawan' => $id_karyawan])->row_array();
    }

    public function Proseseditdatakaryawan()
    {
       $data = [
            "no_karyawan" => $this->input->post('no_karyawan'),
            "nama" => $this->input->post('nama'),
            "jabatan" => $this->input->post('jabatan'),
            "email" => $this->input->post('email'),
            "divisi" => $this->input->post('divisi'),
        ];
        // var_dump($data);exit;
        $this->db->where('id_karyawan', $this->input->post('id_karyawan'));
        $this->db->update('master_karyawan', $data);
    }
}
