<?php

class Surat extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Surat_model');
    }


    public function index()
    {
        $data['surat'] = $this->Surat_model->getAllSurat();
        $this->load->view('template/header');
        $this->load->view('surat/view_surat', $data);
        $this->load->view('template/footer');
    }
}