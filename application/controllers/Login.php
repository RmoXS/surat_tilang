<?php
class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model yang terkait
        $this->load->model('login_model');
    }

    public function index() {
        // Jika pengguna telah login, redirect ke halaman utama
        if ($this->session->userdata('logged_in')) {
            redirect('auth/login');
        }
        
        // Load view login
        $this->load->view('auth/login');
    }

    public function process() {
        // Ambil input dari form login
        $nama = $this->input->post('nama');
        $pswd = $this->input->post('pswd');

        // Verifikasi login melalui model
        $result = $this->login_model->login($nama, $pswd);

        if ($result == 'success') {
            // Jika login berhasil, set data user dan redirect ke halaman utama
            $user_data = array(
                'nama' => $nama,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($user_data);
            redirect('data_pelanggar/data');
        } else {
            // Jika login gagal, tampilkan pesan error
            $data['error'] = $result;
            $this->load->view('login', $data);
        }
    }

}
