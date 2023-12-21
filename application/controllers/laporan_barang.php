<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_Barang extends CI_Controller {

     public function __construct()
    {
      parent::__construct();
      $this->load->model('barang_model');
    }


    public function masuk() {
        $data['data']=$this->barang_model->semuadatamasuk();
        $this->load->view('laporan_barang_masuk', $data);
    }
}