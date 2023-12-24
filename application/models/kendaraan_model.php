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
    // Konfigurasi upload file
    $config['upload_path']   = './uploads/photo_unit/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size']      = 2048; // 2MB (adjust as needed)

    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    // Lakukan upload file
    if ($this->upload->do_upload('photo_unit')) {
        $uploaded_data = $this->upload->data();
        $data['photo_unit'] = $uploaded_data['file_name'];

        // Data kendaraan
        $kendaraan_data = [
            "no_lambung"      => $this->input->post('no_lambung'),
            "merk"            => $this->input->post('merk'),
            "model"           => $this->input->post('model'),
            "no_rangka"       => $this->input->post('no_rangka'),
            "no_mesin"        => $this->input->post('no_mesin'),
            "Tgl_STNK_SKPD"   => $this->input->post('Tgl_STNK_SKPD'),
            "color"           => $this->input->post('color'),
            "License_Plates"  => $this->input->post('License_Plates'),
            "photo_unit"      => $data['photo_unit'],
        ];

        // Simpan data kendaraan ke database
        $this->db->insert('master_kendaraan', $kendaraan_data);
    } else {
        // Jika upload gagal, tampilkan pesan kesalahan
        $error = $this->upload->display_errors();
        echo $error;
    }
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
    // Konfigurasi upload file
    $config['upload_path']   = './uploads/photo_unit/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size']      = 2048; // 2MB (adjust as needed)

    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    // Cek apakah ada file yang diunggah
    if ($this->upload->do_upload('photo_unit')) {
        $uploaded_data = $this->upload->data();
        $data['photo_unit'] = $uploaded_data['file_name'];
    }

    // Data kendaraan
    $kendaraan_data = [
        "no_lambung"      => $this->input->post('no_lambung'),
        "merk"            => $this->input->post('merk'),
        "model"           => $this->input->post('model'),
        "no_rangka"       => $this->input->post('no_rangka'),
        "no_mesin"        => $this->input->post('no_mesin'),
        "Tgl_STNK/SKPD"   => $this->input->post('Tgl_STNK/SKPD'),
        "color"           => $this->input->post('color'),
        "License_Plates"  => $this->input->post('License_Plates'),
    ];

    // Tambahkan foto_unit ke data jika ada file yang diunggah
    if (isset($data['photo_unit'])) {
        $kendaraan_data['photo_unit'] = $data['photo_unit'];
    }

    // var_dump($kendaraan_data); exit;

    // Update data kendaraan berdasarkan id_mobil
    $this->db->where('id_mobil', $this->input->post('id_mobil'));
    $this->db->update('master_kendaraan', $kendaraan_data);
}

}
