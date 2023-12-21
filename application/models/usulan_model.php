<?php
defined('BASEPATH') or exit('No direct script access allowed');

class usulan_model extends CI_Model
{
    // Method yang digunakan untuk query builder select all from table pengguna
    
    public function semuadata()
    {
        return $this->db->get('usulan')->result_array();
    }
    public function ProsesTambah_usulan()
    {

        // var_dump($this->input->post());exit;
        $data = [
            "no_usulan" => $this->input->post('no_usulan'),
            "tanggal" => $this->input->post('tanggal'),
            "kode_barang" => $this->input->post('kode_barang'),
            "jenis" => $this->input->post('jenis'),
            "nama_produk&jasa" => $this->input->post('nama_produk&jasa'),
            "spesifikasi" => $this->input->post('spesifikasi'),
            "jumlah" => $this->input->post('jumlah'),
            "satuan" => $this->input->post('satuan'),
            "keterangan" => $this->input->post('keterangan'),
            "penyerah" => $this->input->post('penyerah'),
            "divisi/departement_penyerah" => $this->input->post('divisi/departement_penyerah'),
            "penerima" => $this->input->post('penerima'),
            "divisi/departement_penerima" => $this->input->post('divisi/departement_penerima'),
            "ttd_penerima" => $this->input->post('ttd_penerima'),
            "ttd_penyerah" => $this->input->post('ttd_penyerah'),
            "status" => 'Diproses',
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
        $data['ttd_penerima'] = $ttd_penerima_data['file_name'];

        // Set ttd_penerima in lpb
        $lpb['ttd_penerima'] = $data['ttd_penerima'];
    }

    // Upload ttd_penyerah
    if ($this->upload->do_upload('ttd_penyerah')) {
        $ttd_penyerah_data = $this->upload->data();
        $data['ttd_penyerah'] = $ttd_penyerah_data['file_name'];

        // Set ttd_penyerah in lpb
        $lpb['ttd_penyerah'] = $data['ttd_penyerah'];
    }

    $this->db->insert('usulan', $data);
    $id_usulan = $this->db->insert_id();

        $lpb = [
            // "no_usulan" => $this->input->post('no_usulan'),
            "tanggal_terima" => $this->input->post('tanggal'),
            "jumlah" => $this->input->post('jumlah'),
            "kode_barang" => $this->input->post('kode_barang'),
            "keterangan" => $this->input->post('keterangan'),
            "penyerah" => $this->input->post('penyerah'),
            "divisi/departement_penyerah" => $this->input->post('divisi/departement_penyerah'),
            "penerima" => $this->input->post('penerima'),
            "divisi/departement_penerima" => $this->input->post('divisi/departement_penerima'),
            "ttd_penerima" => $data['ttd_penerima'], // Set ttd_penerima in lpb
            "ttd_penyerah" => $data['ttd_penyerah'], // Set ttd_penyerah in lpb
            "data_usulan" => $id_usulan,
            // "status" => 'Diproses',
        ];
        // var_dump($data);exit;
        // echo "<pre>";
        // var_dump($this->input->post());
        // echo "</pre>";exit;
        
        $this->db->insert('lpb', $lpb);
    }
      public function hapusdatapph($id_pph)
    {
        $this->db->where('id_pph', $id_pph);
        $this->db->delete('pp_harga');
    }

    public function ambil_id_pph($id_pph)
    {
        return $this->db->get_where('pp_harga', ['id_pph' => $id_pph])->row_array();
    }

    public function ProsesEditdatappharga()
    {
       $data = [
             "no_usulan" => $this->input->post('no_usulan'),
            "tanggal" => $this->input->post('tanggal'),
            "kode_barang" => $this->input->post('kode_barang'),
            "jenis" => $this->input->post('jenis'),
            "nama_produk&jasa" => $this->input->post('nama_produk&jasa'),
            "spesifikasi" => $this->input->post('spesifikasi'),
            "jumlah" => $this->input->post('jumlah'),
            "satuan" => $this->input->post('satuan'),
            "keterangan" => $this->input->post('keterangan'),
            "deskripsi" => $this->input->post('deskripsi'),
            "penyerah" => $this->input->post('penyerah'),
            "divisi/departement_penyerah" => $this->input->post('divisi/departement_penyerah'),
            "penerima" => $this->input->post('penerima'),
            "divisi/departement_penerima" => $this->input->post('divisi/departement_penerima'),
            "ttd_penerima" => $this->input->post('ttd_penerima'),
            "ttd_penyerah" => $this->input->post('ttd_penyerah'),
        ];
        // var_dump($data);exit;
        $this->db->where('id_pph', $this->input->post('id_pph'));
        $this->db->update('pp_harga', $data);
    }

public function karyawan_divisi()
{
    $query = $this->db->query('SELECT DISTINCT `nama`, `divisi` FROM `master_karyawan` ORDER BY `nama` ASC, `divisi` ASC');
    return $query->result();
}



}
