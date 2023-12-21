<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporankeluar_model extends CI_Model
{
    // Method yang digunakan untuk query builder select all from table pengguna
    
    public function semuadata()
    {
        $this->db->where('status','Diterima');
        $this->db->join('usulan','usulan.id_usulan=lpb.data_usulan','left');
        // $this->db
        return $this->db->get('lpb')->result_array();
    }
    public function ProsesTambah_Laporankeluar()
    {

        // var_dump($this->input->post());exit;
        $data = [
            "data_usulan" => $this->input->post('data_usulan'),
            "tanggal_terima" => $this->input->post('tanggal_terima'),
            "penyerah" => $this->input->post('penyerah'),
            "divisi/departement_penyerah" => $this->input->post('divisi/departement_penyerah'),
            "penerima" => $this->input->post('penerima'),
            "divisi/departement_penerima" => $this->input->post('divisi/departement_penerima'),
            "deskripsi" => $this->input->post('deskripsi'),
            "jumlah" => $this->input->post('jumlah'),
            "keterangan" => $this->input->post('keterangan'),
             "ttd_penyerah" => $this->input->post('ttd_penyerah'),
              "ttd_penerima" => $this->input->post('ttd_penerima'),
        ];
        // var_dump($data);exit;
        $this->db->insert('lpb', $data);
    }
     public function hapusdataLaporankeluar($id_lpb)
    {
        $this->db->where('id_lpb', $id_lpb);
        $this->db->delete('lpb');
    }

    public function ambil_id_lpb($id_lpb)
    {
        return $this->db->get_where('lpb', ['id_lpb' => $id_lpb])->row_array();
    }

    public function ProsesEditdataLaporankeluar()
    {
       $data = [
           "data_usulan" => $this->input->post('data_usulan'),
           "tanggal_terima" => $this->input->post('tanggal_terima'),
            "penyerah" => $this->input->post('penyerah'),
            "divisi/departement_penyerah" => $this->input->post('divisi/departement_penyerah'),
            "penerima" => $this->input->post('penerima'),
            "divisi/departement_penerima" => $this->input->post('divisi/departement_penerima'),
            "deskripsi" => $this->input->post('deskripsi'),
            "jumlah" => $this->input->post('jumlah'),
            "keterangan" => $this->input->post('keterangan'),
             "ttd_penyerah" => $this->input->post('ttd_penyerah'),
              "ttd_penerima" => $this->input->post('ttd_penerima'),
        ];
        // var_dump($data);exit;
        $this->db->where('id_lpb', $this->input->post('id_lpb'));
        $this->db->update('lpb', $data);
    }

    public function terima($id)
    {
        $this->db->query("UPDATE usulan set status='Diterima' where id_usulan='$id'");
    }

    public function tolak($id)
    {
        $this->db->query("UPDATE usulan set status='Ditolak' where id_usulan='$id'");
    }
}
