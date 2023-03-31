<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //jika belum login maka akan diarahkan ke halaman login
        if (!$this->session->userdata('email')) {
            redirect('login');
        }
        $this->load->model('Pendaftaran_model', 'pendaftaran');
        $this->load->model('Siswa_model', 'siswa');
        $this->load->model('Users_model', 'users');
    }

    public function index()
    {
        $data['title'] = 'My Dashboard';
        $data['pendaftaran'] = $this->pendaftaran->getAll();
        $data['menunggu_verifikasi'] = $this->pendaftaran->getByStatus();
        $data['siswa'] = $this->siswa->getAll();
        $data['users'] = $this->users->get_all_data();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/v_dashboard');
        $this->load->view('templates/footer');


    }


}

