<?php

class DataSiswa extends CI_Controller{

    public function  __construct()
    {
        parent::__construct();
         //jika belum login maka akan diarahkan ke halaman login
         if (!$this->session->userdata('email')) {
            redirect('login');
        }
        $this->load->model('Siswa_model', 'siswa');
    }

    public function index(){
        $data['title'] = 'Siswa';
        $data['siswas'] = $this->siswa->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/v_data_siswa', $data);
        $this->load->view('templates/footer');

    }
}