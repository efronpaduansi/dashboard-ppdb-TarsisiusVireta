<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //jika belum login maka akan diarahkan ke halaman login
        if (!$this->session->userdata('email')) {
            redirect('login');
        }
    }

    public function index()
    {
        $data['title'] = 'My Profile';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/v_profile');
        $this->load->view('templates/footer');


    }


}

