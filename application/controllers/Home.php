<?php

class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
        $this->load->library('form_validation');
    }


    public function index()
    {
        $this->form_validation->set_rules('nama_ptgs', 'nama_ptgs', 'required');
        if( $this->form_validation->run() == FALSE ) {
            $this->load->view('template/header');
            $this->load->view('home/home');
            $this->load->view('template/footer');
        } else {
            $this->Home_model->tambahDataPelanggar();
            redirect('home');
        }
    }
}


