<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_model extends CI_Model
{
    // Method yang digunakan untuk query builder select all from table pengguna
    
    public function semuadata()
    {
        $this->db->join('usulan','usulan.id_usulan=lpb.data_usulan','left');
        // $this->db
        return $this->db->get('lpb')->result_array();
    }
    public function ProsesTambah_Laporan()
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
            "kode_barang" => $this->input->post('kode_barang'),
            "jumlah" => $this->input->post('jumlah'),
            "keterangan" => $this->input->post('keterangan'),
             "ttd_penyerah" => $this->input->post('ttd_penyerah'),
              "ttd_penerima" => $this->input->post('ttd_penerima'),
        ];

    $config['upload_path'] = './uploads/ttd/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = 2048; // 2MB (adjust as needed)
    $config['encrypt_name'] = TRUE; // Rename the uploaded file

    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    // Upload ttd_penerima
    if ($this->upload->do_upload('ttd_penerima')) {
        $ttd_penerima_data = $this->upload->data();
        $data['ttd_penerima'] = $config['upload_path'] . $ttd_penerima_data['file_name'];
    }

    // Upload ttd_penyerah
    if ($this->upload->do_upload('ttd_penyerah')) {
        $ttd_penyerah_data = $this->upload->data();
        $data['ttd_penyerah'] = $config['upload_path'] . $ttd_penyerah_data['file_name'];
    }
        // var_dump($data);exit;
        $this->db->insert('lpb', $data);
    }
     public function hapusdataLaporan($id_lpb)
    {
        $this->db->where('id_lpb', $id_lpb);
        $this->db->delete('lpb');
    }

    public function ambil_id_lpb($id_lpb)
    {
        return $this->db->get_where('lpb', ['id_lpb' => $id_lpb])->row_array();
    }

   public function ProsesEditdataLaporan()
{
    $id_lpb = $this->input->post('id_lpb');

    $data = [
        "data_usulan" => $this->input->post('data_usulan'),
        "tanggal_terima" => $this->input->post('tanggal_terima'),
        "penyerah" => $this->input->post('penyerah'),
        "divisi/departement_penyerah" => $this->input->post('divisi/departement_penyerah'),
        "penerima" => $this->input->post('penerima'),
        "divisi/departement_penerima" => $this->input->post('divisi/departement_penerima'),
        "kode_barang" => $this->input->post('kode_barang'),
        "jumlah" => $this->input->post('jumlah'),
        "keterangan" => $this->input->post('keterangan'),
        "ttd_penyerah" => $this->input->post('ttd_penyerah'),
        "ttd_penerima" => $this->input->post('ttd_penerima'),
    ];

    // Upload configuration
    $config['upload_path'] = './uploads/ttd/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = 2048; // 2MB (adjust as needed)
    $config['encrypt_name'] = TRUE; // Rename the uploaded file

    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    // Upload new ttd_penerima if provided
    if ($this->upload->do_upload('ttd_penerima')) {
        $ttd_penerima_data = $this->upload->data();
        $data['ttd_penyerah'] = $config['upload_path'] . $ttd_penerima_data['file_name'];
    }

    // Upload new ttd_penyerah if provided
    if ($this->upload->do_upload('ttd_penyerah')) {
        $ttd_penyerah_data = $this->upload->data();
        $data['ttd_penyerah'] = $config['upload_path'] . $ttd_penyerah_data['file_name'];
    }

    $this->db->where('id_lpb', $id_lpb);
    $this->db->update('lpb', $data);
}


    public function terima($id)
    {
        $this->db->query("UPDATE usulan set status='Diterima' where id_usulan='$id'");
    }

    public function tolak($id)
    {
        // Update status to 'Ditolak' in the 'usulan' table
        $this->db->query("UPDATE usulan SET status='Diproses' WHERE id_usulan='$id'");

        // Insert data into 'pp_harga' table from 'usulan' table
        $this->db->query("
            INSERT INTO pp_harga (
                `no_pph`,
                `nama_item`,
                `spesifikasi`,
                `jumlah`
            )
            SELECT
                `no_usulan`,
                `nama_produk&jasa`,
                `spesifikasi`,
                `jumlah`
            FROM usulan
            WHERE id_usulan='$id'
        ");
    }
}
