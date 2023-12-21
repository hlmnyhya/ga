<?php

class Setting extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
        // $current_user = $this->auth_model->current_user();
        // if (!$current_user) {
        //     redirect('auth/login');
        // }
    }

    public function index()
    {
        $id_user=$this->session->userdata('user_id');

        $data['current_user'] = $this->Auth_model->settings($id_user);
        // var_dump($data['current_user']);exit;
        $this->load->view('templates/header');
            $this->load->view('templates/nav');
        $this->load->view('profil_settings',$data);
        $this->load->view('templates/footer');
    }

  public function upload_avatar()
{
    
}

   public function remove_avatar()
{
    // Mendapatkan path avatar yang akan dihapus dari database

}


    public function edit_profile()
{
    $id_user = $this->session->userdata('user_id');
    $data['current_user'] = $this->Auth_model->settings($id_user);

    // Memuat library Form Validation
    $this->load->library('form_validation');

    if ($this->input->method() === 'post') {
        $rules = $this->profile_model->profile_rules();
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() === FALSE) {
            // Jika validasi gagal, tampilkan kembali formulir dengan pesan kesalahan
            $this->load->view('setting_edit_profile_form.php', $data);
        } else {
            // Validasi berhasil, lakukan pembaruan data
            $new_data = [
                'id_user' => $data['current_user']->id_user,
                'Nama_lengkap' => $this->input->post('Nama_lengkap'),
                'email' => $this->input->post('email'),
            ];

            if ($this->profile_model->update($new_data)) {
                $this->session->set_flashdata('message', 'Profile was updated');
                redirect(base_url('setting'));
            }
        }
    } else {
        // Tampilkan formulir jika metode bukan POST
        $this->load->view('setting_edit_profile_form.php', $data);
    }
}


    public function edit_password()
    {
         $id_user = $this->session->userdata('user_id');
    $data['current_user'] = $this->Auth_model->settings($id_user);

    // Memuat library Form Validation
    $this->load->library('form_validation');

    if ($this->input->method() === 'post') {
        $rules = $this->profile_model->profile_rules();
        $this->form_validation->set_rules($rules);

            if ($this->form_validation->run() === FALSE) {
                return $this->load->view('setting_edit_password_form.php', $data);
            }

            $new_password_data = [
                'id' => $data['current_user']->id,
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                // 'password_updated_at' => date("Y-m-d H:i:s"),
            ];

            if ($this->profile_model->update($new_password_data)) {
                $this->session->set_flashdata('message', 'Password was changed');
                redirect(base_url('setting'));
            }
        }

        $this->load->view('setting_edit_password_form.php', $data);
    }
}