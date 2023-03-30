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

    public function sendPendaftaran(){
        
        $data = [
            'user_id'               => 1,
            'nama_lengkap'          => $this->input->post('nama_lengkap'),
            'tempat_lahir'          => $this->input->post('tempat_lahir'),
            'tgl_lahir'             => $this->input->post('tgl_lahir'),
            'jenis_kelamin'         => $this->input->post('jenis_kelamin'),
            'agama'                 => $this->input->post('agama'),
            'no_hp'                 => $this->input->post('no_hp'),
            'alamat'                => $this->input->post('alamat'),
            'nm_ibu'                => $this->input->post('nm_ibu'),
            'pekerjaan_orangtua'    => $this->input->post('pekerjaan_orangtua'),
            'sekolah_asal'          => $this->input->post('sekolah_asal'),
            'thn_lulus'             => $this->input->post('thn_lulus'),
            'status'                => 'Menunggu Verifikasi' 
        ];

        $this->pendaftaran->insert($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Anda berhasil terkirim!</div>');
        redirect('siswa/pendaftaran');
    }
}