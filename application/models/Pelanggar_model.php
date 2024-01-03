<?php

class Pelanggar_model extends CI_model {
    public function getAllPelanggar()
    {
        return $this->db->get('surat_tilang')->result_array(); 
    }

    public function hapusDataMahasiswa($id_surat)
    {
        $this->db->where('id_surat', $id_surat);
        $this->db->delete('surat_tilang');
    }
}