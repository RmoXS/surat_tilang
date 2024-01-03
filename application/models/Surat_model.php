<?php

class Surat_model extends CI_model {
    public function getAllSurat()
    {
        return $this->db->get('surat_tilang')->result_array(); 
    }
}