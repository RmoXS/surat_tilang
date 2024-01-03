<?php

class Pelanggar extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pelanggar_model');
    }


    public function index()
    {
        $data['pelanggar'] = $this->Pelanggar_model->getAllPelanggar();
        $this->load->view('template/header');
        $this->load->view('data_pelanggar/data', $data);
        $this->load->view('template/footer');
    }

    public function hapus($id_surat)
    {
        $this->Pelanggar_model->hapusDataPelanggar($id_surat);
        redirect('pelanggar');
    }
}