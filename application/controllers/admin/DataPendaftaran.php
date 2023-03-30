<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPendaftaran extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pendaftaran_model', 'pendaftaran');
    }
    public function index()
    {
        $data['title'] = 'Pendaftaran';
        $data['pendaftaran'] = $this->pendaftaran->getAll();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/v_pendaftaran');
        $this->load->view('templates/footer');

    }


}