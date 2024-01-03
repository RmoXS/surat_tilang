<?php
class Login_model extends CI_Model {

    public function login($nama, $pswd) {
        // Ambil data user berdasarkan username
        $this->db->where('nama', $nama);
        $result = $this->db->get('admin')->row();

        // Jika username tidak ditemukan
        if (!$result) {
            return 'User not found';
        }

        // Verifikasi password
        if (password_verify($pswd, $result->pswd)) {
            return 'success';
        } else {
            return 'Wrong password';
        }
    }

}
