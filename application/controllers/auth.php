<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model atau helper yang diperlukan
        $this->load->model('Auth_model');
        $this->load->library('form_validation');
    }

    public function index() {
        $this->load->view('landing'); // Tampilkan halaman landing page
    }

    public function login() {
        // Validasi form login
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            // Jika validasi gagal, kembali ke halaman login
            $this->load->view('auth/login.php');
        } else {
            // Jika validasi berhasil
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            // Cek kredensial pengguna
            $user = $this->Auth_model->check_credentials($username, $password)->row();
            
// var_dump($user);exit;
            if ($user) {
                // Jika kredensial benar, buat sesi pengguna
                $user_data = array(
                    'user_id' => $user->id_user,
                    'username' => $user->username,
                    'level' => $user->level,
                    // Tambahkan data sesuai kebutuhan
                );

                $this->session->set_userdata($user_data);
                if ($user->level=='Admin') {
                    redirect('dashboard'); 
                    # code...
                }elseif ($user->level=='karyawan') {
                    redirect('dashboard'); 
                    # code...
                }elseif ($user->level=='Driver') {
                    redirect('dashboard');
                }elseif ($user->level=='kepala_cabang'){
                    redirect('dashboard');
                }

                // Redirect ke dashboard atau halaman yang sesuai
                // Ubah "Beranda" menjadi "dashboard" jika itu adalah halaman dashboard yang benar
            } else {
                // Jika kredensial salah, tampilkan pesan error
                $data['error'] = 'Username atau password salah';
                $this->load->view('auth/login', $data);
            }
        }
    }
  public function registration() {
    // Validasi form registrasi
    $this->form_validation->set_rules('Nama_lengkap', 'Nama Lengkap', 'required');
    // $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    // $this->form_validation->set_rules('confirm_password', 'Konfirmasi Password', 'required|matches[password]');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('level', 'Level', 'required');
    // $this->form_validation->set_rules('upload_foto', 'Upload Foto', 'required');
    // var_dump($this->input->post());exit;

    if ($this->form_validation->run() === FALSE) {
        // Tampilkan halaman registrasi jika validasi gagal
        $this->load->view('auth/registration');
    } else {
        // Jika validasi berhasil, simpan data ke database
        $gambar = $_FILES['upload_foto']['name'];
            $file_tmp = $_FILES['upload_foto']['tmp_name'];
            move_uploaded_file($file_tmp, './file/'.$gambar);
        $data = array(
            'Nama_lengkap' => $this->input->post('Nama_lengkap'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'email' => $this->input->post('email'),
            'level' => $this->input->post('level'),
            'upload_foto' => $_FILES['upload_foto']['name'],
            // Tambahkan data sesuai kebutuhan
        );

        // Panggil model untuk menyimpan data
        $this->Auth_model->register_user($data);

        // Redirect ke halaman login atau halaman lain yang sesuai
        redirect('auth/login');
    }
}


    public function logout() {
        // Hapus sesi pengguna dan redirect ke halaman login
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');
        // Hapus data sesuai kebutuhan

        redirect('landing'); // Redirect ke halaman login
    }
}
