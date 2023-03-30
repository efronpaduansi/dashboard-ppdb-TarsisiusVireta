<?php

class Pendaftaran extends CI_Controller{

    public function __construct(){
        parent::__construct();
       $this->load->model('pendaftaran_model', 'pendaftaran');
    }

    public function index(){
        $data['title'] = 'Form Pendaftaran';

        $this->load->view('student/partials/header', $data);
        $this->load->view('student/v_pendaftaran');
        $this->load->view('student/partials/footer');
    }
}