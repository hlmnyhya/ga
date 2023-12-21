<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kendaraan_model extends CI_Model
{
    // Method yang digunakan untuk query builder select all from table pengguna
    
    public function semuadata()
    {
        return $this->db->get('master_kendaraan')->result_array();
    }
    public function ProsesTambah_Kendaraan()
    {

        // var_dump($this->input->post());exit;
        $data = [
            "no_lambung" => $this->input->post('no_lambung'),
            "merk" => $this->input->post('merk'),
            "model" => $this->input->post('model'),
            "no_rangka" => $this->input->post('no_rangka'),
            "no_mesin" => $this->input->post('no_mesin'),
            "Tgl_STNK/SKPD" => $this->input->post('Tgl_STNK/SKPD'),
            "color" => $this->input->post('color'),
            "License_Plates" => $this->input->post('License_Plates'),
            "photo_unit" => $this->input->post('photo_unit'),
            "File_STNK/SKPD" => $this->input->post('File_STNK/SKPD'),
        ];
        // var_dump($data);exit;
        $this->db->insert('master_kendaraan', $data);
    }
      public function hapusdatakendaraan($id_mobil)
    {
        $this->db->where('id_mobil', $id_mobil);
        $this->db->delete('master_kendaraan');
    }

    public function ambil_id_mobil($id_mobil)
    {
        return $this->db->get_where('master_kendaraan', ['id_mobil' => $id_mobil])->row_array();
    }

    public function ProsesEditdatakendaraan()
    {
       $data = [
            "no_lambung" => $this->input->post('no_lambung'),
            "merk" => $this->input->post('merk'),
            "model" => $this->input->post('model'),
            "no_rangka" => $this->input->post('no_rangka'),
            "no_mesin" => $this->input->post('no_mesin'),
            "Tgl_STNK/SKPD" => $this->input->post('Tgl_STNK/SKPD'),
            "color" => $this->input->post('color'),
            "License_Plates" => $this->input->post('License_Plates'),
            "photo_unit" => $this->input->post('photo_unit'),
            "File_STNK/SKPD" => $this->input->post('File_STNK/SKPD'),
        ];
        // var_dump($data);exit;
        $this->db->where('id_mobil', $this->input->post('id_mobil'));
        $this->db->update('master_kendaraan', $data);
    }
}
