<?php
defined('BASEPATH') or exit('No direct script access allowed');

class purchase_order_model extends CI_Model
{
    // Method yang digunakan untuk query builder select all from table pengguna
    
    public function semuadata()
    {
        return $this->db->get('purchase_order')->result_array();
    }
    public function ProsesTambah_purchase_order()
    {

        // var_dump($this->input->post());exit;
        $data = [
            "id_po" => $this->input->post('id_po'),
            "no_usulan" => $this->input->post('no_usulan'),
            "tanggal" => $this->input->post('tanggal'),
            "no_po" => $this->input->post('no_po'),
            "qou_no" => $this->input->post('qou_no'),
            "supplier" => $this->input->post('supplier'),
            "alamat_supp" => $this->input->post('alamat_supp'),
            "ATTN" => $this->input->post('ATTN'),
            "e-mail_supp" => $this->input->post('e-mail_supp'),
            "no_telp_supp" => $this->input->post('no_telp_supp'),
            "nama" => $this->input->post('nama'),
            "deskripsi" => $this->input->post('deskripsi'),

        ];
        // var_dump($data);exit;
        $this->db->insert('purchase_order', $data);
    }

    public function ambil_id_po($id_po)
    {
        return $this->db->get_where('purchase_order', ['id_po' => $id_po])->row_array();
    }

    public function sesuai($id)
{
    // Update status_po in the purchase_order table
    $this->db->query("UPDATE purchase_order SET status_po = 'Sesuai' WHERE id_po = '$id'");

    // Update status in the usulan table
    $this->db->query("UPDATE usulan SET status = 'Diterima' WHERE id_usulan = '$id'");
}

     public function tidak_sesuai($id)
    {
        $this->db->query("UPDATE purchase_order set status_po ='Tidak Sesuai' where id_po='$id'");
    }

}