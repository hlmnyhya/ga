<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ppharga_model extends CI_Model
{
    // Method yang digunakan untuk query builder select all from table pengguna
    
  public function semuadata()
{
    $this->db->select('pp_harga.*, master_supplier.nama_penyedia_eksternal as kepada_vendor, master_supplier.alamat, master_supplier.contact_person, master_supplier.`e-mail` as supplier_email, master_supplier.no_telp, master_supplier.bidang_usaha, master_supplier.keterangan_terdaftar');
    $this->db->from('pp_harga');
    $this->db->join('master_supplier', 'pp_harga.id_penyedia = master_supplier.id_penyedia', 'left');
    return $this->db->get()->result_array();
}

 public function tampil_supplier()
    {
        return $this->db->get('master_supplier')->result();
    }


    public function ProsesTambah_ppharga()
    {

        // var_dump($this->input->post());exit;
        $data = [
            "no_pph" => $this->input->post('no_pph'),
            "lampiran" => $this->input->post('lampiran'),
            "perihal" => $this->input->post('perihal'),
            "kepada_vendor" => $this->input->post('kepada_vendor'),
            "email" => $this->input->post('email'),
            "nmr_telp" => $this->input->post('nmr_telp'),
            "nama_item" => $this->input->post('nama_item'),
            "spesifikasi" => $this->input->post('spesifikasi'),
            "jumlah" => $this->input->post('jumlah'),
             "rincian_barang_jasa" => $this->input->post('rincian_barang_jasa'),
            "daftar_harga" => $this->input->post('daftar_harga'),
            "pembelian_pembayaran" => $this->input->post('pembelian_pembayaran'),
            "estimasi_pengiriman" => $this->input->post('estimasi_pengiriman'),
            
        ];
        // var_dump($data);exit;
        $this->db->insert('pp_harga', $data);
    }
    public function hapusdatappharga($id_pph)
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
            "no_pph" => $this->input->post('no_pph'),
            "lampiran" => $this->input->post('lampiran'),
            "perihal" => $this->input->post('perihal'),
            "id_penyedia" => $this->input->post('id_penyedia'),
            "email" => $this->input->post('email'),
            "nmr_telp" => $this->input->post('nmr_telp'),
            "nama_item" => $this->input->post('nama_item'),
            "spesifikasi" => $this->input->post('spesifikasi'),
            "jumlah" => $this->input->post('jumlah'),
             "rincian_barang_jasa" => $this->input->post('rincian_barang_jasa'),
            "daftar_harga" => $this->input->post('daftar_harga'),
            "pembelian_pembayaran" => $this->input->post('pembelian_pembayaran'),
            "estimasi_pengiriman" => $this->input->post('estimasi_pengiriman'),
            
        ];
        // var_dump($data);exit;
        $this->db->where('id_pph', $this->input->post('id_pph'));
        $this->db->update('pp_harga', $data);
    }

public function ProsesUpdatePenawaran()
{
    $data = [
        "perihal" => $this->input->post('perihal'),
        "id_penyedia" => $this->input->post('id_penyedia'),
        "email" => $this->input->post('email'),
        "nmr_telp" => $this->input->post('nmr_telp'),
        "nama_item" => $this->input->post('nama_item'),
        "spesifikasi" => $this->input->post('spesifikasi'),
        "jumlah" => $this->input->post('jumlah'),
        "rincian_barang_jasa" => $this->input->post('rincian_barang_jasa'),
        "daftar_harga" => $this->input->post('daftar_harga'),
        "pembelian_pembayaran" => $this->input->post('pembelian_pembayaran'),
        "estimasi_pengiriman" => $this->input->post('estimasi_pengiriman'),
    ];

    $this->db->where('id_pph', $this->input->post('id_pph'));
    $update_result = $this->db->update('pp_harga', $data);
}

public function tambah_po_aksi_model($id)
{
    return $this->db->query("
        INSERT INTO purchase_order (
            `no_usulan`,
            `nama`,
            `deskripsi`,
            `qty`,
            `supplier`,
            `ATTN`,
            `alamat_supp`,
            `tanggal`,
            `e-mail_supp`,
            `no_telp_supp`
        )
        SELECT
            u.`no_usulan`,
            pph.`nama_item`,
            pph.`rincian_barang_jasa`,
            pph.`jumlah`,
            ms.`nama_penyedia_eksternal`,
            u.`penerima`,
            ms.`alamat`,
            NOW(),
            ms.`e-mail`,
            ms.`no_telp`
        FROM usulan u
        LEFT JOIN pp_harga pph ON u.id_usulan = pph.id_pph
        LEFT JOIN master_supplier ms ON pph.id_penyedia = ms.id_penyedia
        WHERE pph.id_pph=$id"
    );
    
}

    public function update_data($table, $data, $where)
    {
        return $this->db->update($table, $data, $where);
    }

     public function insert_data($table, $data)
    {
        return $this->db->insert($table, $data);
    }
    
}
