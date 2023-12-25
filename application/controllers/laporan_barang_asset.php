<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_Barang_Asset extends CI_Controller {

     public function __construct()
    {
      parent::__construct();
      $this->load->model('barang_model');
    }


    public function asset() {
        $data['data']=$this->barang_model->non_asset_barang();
        $this->load->view('laporan_barang_asset', $data);
    }
}