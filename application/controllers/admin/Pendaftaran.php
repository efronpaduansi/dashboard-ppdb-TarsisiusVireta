<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Pendaftaran';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/v_pendaftaran');
        $this->load->view('templates/footer');

    }


}