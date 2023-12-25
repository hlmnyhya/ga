<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class count_model extends CI_Model {


 public function getKendaraan_BBM() {
        $this->db->select(
            'bbm.id_bbm,
            bbm.tanggal,
            bbm.nama,
            bbm.keterangan,
            bbm.Jenis_bbm AS jenis_bbm,
            bbm.harga_bbm,
            bbm.jumlah_harga_bbm,
            kendaraan.no_lambung AS no_lambung,
            kendaraan.merk,
            kendaraan.model'
        );
        $this->db->from('bbm');
        $this->db->join('master_kendaraan AS kendaraan', 'bbm.no_lambung = kendaraan.no_lambung');

        $query = $this->db->get();

        return $query->result();
    }
public function get_barang() {
    $sql = "SELECT kode_barang, nama_barang, kategori, qty, MONTHNAME(tanggal) AS tanggal
            FROM master_barang 
            ORDER BY YEAR(tanggal) ASC, MONTH(tanggal) ASC ";

    $query = $this->db->query($sql);
    return $query->result();
}



}