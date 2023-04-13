<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Settings extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
         //jika belum login maka akan diarahkan ke halaman login
         if (!$this->session->userdata('email')) {
            redirect('login');
        }
        $this->load->model('BankSoal_model', 'bank_soal');
    }
    
    public function index()
    {
        $data['title'] = 'Settings';
        $data['soals'] = $this->bank_soal->getSoal();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/v_settings');
        $this->load->view('templates/footer');
    }

    public function newSoal()
    {
        $data = [
            'soal' => $this->input->post('etSoal'),
            'bobot' => $this->input->post('etBobot'),
        ];
        $this->bank_soal->insert($data);
        redirect('settings');
    }

    public function deleteSoal($id)
    {
       $this->bank_soal->delete($id);
       redirect('settings');
    }
}