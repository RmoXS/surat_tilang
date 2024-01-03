<?php

class Home_model extends CI_model {
    public function getAllPelanggar()
    {
        return $this->db->get('surat_tilang')->result_array(); 
    }

    public function tambahDataPelanggar()
    {
        $data = [
            "nama_ptgs" => $this->input->post('nama_ptgs'),
            "nmr_plat" => $this->input->post('nmr_plat'),
            "nmr_sim" => $this->input->post('nmr_sim'),
            "nama_pl" => $this->input->post('nama_pl'),
            "alamat_pl" => $this->input->post('alamat_pl'),
            "jenis_pelanggaran" => $this->input->post('jenis_pelanggaran'),
            "lokasi" => $this->input->post('lokasi'),
            "tindakan" => $this->input->post('tindakan'),
            "tanggal" => $this->input->post('tanggal'),
            "denda" => $this->input->post('denda')
        ];

        $this->db->insert('surat_tilang', $data);
    }
}