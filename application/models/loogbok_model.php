<?php
defined('BASEPATH') or exit('No direct script access allowed');

class loogbok_model extends CI_Model
{
    // Method yang digunakan untuk query builder select all from table pengguna
    
    public function semuadata()
    {
         // return $this->db->query("SELECT * FROM bbm b left join master_kendaraan mk on mk.no_lambung=b.no_lambung left join loogbok l on l.nopol=mk.License_Plates")->result_array();
        return $this->db->query("SELECT * FROM loogbok")->result_array();
    }
    public function ProsesTambah_loogbok()
    {

        // var_dump($this->input->post());exit;
        $data = [
            "tanggal" => $this->input->post('tanggal'),
            "nama" => $this->input->post('nama'),
            "waktu_mulai" => $this->input->post('waktu_mulai'),
            "waktu_selesai" => $this->input->post('waktu_selesai'),
            "tujuan" => $this->input->post('tujuan'),
            "nopol" => $this->input->post('nopol'),
            "km_awal" => $this->input->post('km_awal'),
            "km_akhir" => $this->input->post('km_akhir'),
        ];
        // var_dump($data);exit;
        $this->db->insert('loogbok', $data);
    }
      public function hapusdataloogbok($id_loogbok)
    {
        $this->db->where('id_loogbok', $id_loogbok);
        $this->db->delete('loogbok');
    }

    public function ambil_id_loogbok($id_loogbok)
    {
        return $this->db->get_where('loogbok', ['id_loogbok' => $id_loogbok])->row_array();
    }

    public function ProsesEditDataloogbok()
    {
      $data = [
            "tanggal" => $this->input->post('tanggal'),
            "nama" => $this->input->post('nama'),
            "waktu_mulai" => $this->input->post('waktu_mulai'),
            "waktu_selesai" => $this->input->post('waktu_selesai'),
            "tujuan" => $this->input->post('tujuan'),
            "nopol" => $this->input->post('nopol'),
            "km_awal" => $this->input->post('km_awal'),
            "km_akhir" => $this->input->post('km_akhir'),
        ];
        // var_dump($data);exit;
        $this->db->where('id_loogbok', $this->input->post('id_loogbok'));
        $this->db->update('loogbok', $data);
    }

public function karyawan_divisi_driver()
{
    $query = $this->db->query("SELECT DISTINCT `nama`, `divisi` FROM `master_karyawan` WHERE `divisi` = 'DRIVER' AND `jabatan` = 'DRIVER' ORDER BY `nama` ASC, `divisi` ASC");
    return $query->result();
}

}
