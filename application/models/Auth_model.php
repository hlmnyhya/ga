<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    public function check_credentials($username, $password) {
        // Gantilah ini dengan logika sesuai dengan kebutuhan Anda
        // Contoh sederhana, hanya untuk demonstrasi
        // Biasanya, Anda akan memeriksa kredensial di dalam database

        // Simulasi data pengguna
        $query = $this->db->query("SELECT * FROM users WHERE username='".$username."' AND password='".md5($password)."'");
        return $query;
    }

    public function settings($id_user) {
        // Gantilah ini dengan logika sesuai dengan kebutuhan Anda
        // Contoh sederhana, hanya untuk demonstrasi
        // Biasanya, Anda akan memeriksa kredensial di dalam database

        // Simulasi data pengguna
        $query = $this->db->query("SELECT * FROM users WHERE id_user='$id_user'");
        return $query->row();
    }

    public function register_user($data) {
        // Simpan data pengguna ke tabel users di database
        $this->db->insert('users', $data);
    }
}
