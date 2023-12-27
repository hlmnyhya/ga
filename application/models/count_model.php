<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class count_model extends CI_Model {


 public function getKendaraan_BBM() {
       $sql="SELECT
    no_lambung,
    SUM(CAST(REPLACE(jumlah_harga_bbm, 'Rp.', '') AS DECIMAL(10, 6))) AS total_harga_bbm
FROM
    bbm
GROUP BY
    no_lambung;
";

$query = $this->db->query($sql);
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