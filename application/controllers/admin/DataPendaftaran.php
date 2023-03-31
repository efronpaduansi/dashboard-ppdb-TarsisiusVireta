<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPendaftaran extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
         //jika belum login maka akan diarahkan ke halaman login
         if (!$this->session->userdata('email')) {
            redirect('login');
        }
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

    public function accept($no_pendaftaran)
    {
        $data = [
            'status' => 'Diterima'
        ];
        $this->pendaftaran->do_accept($no_pendaftaran, $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil mengubah data!</div>');
        redirect('data-pendaftaran');
    }

    public function reject($no_pendaftaran)
    {
        $data = [
            'status' => 'Ditolak'
        ];
        $this->pendaftaran->do_reject($no_pendaftaran, $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning" role="alert">Berhasil mengubah data!</div>');
        redirect('data-pendaftaran');
    }

    public function delete(){
        $no_pendaftaran = $this->input->post('no_pendaftaran');
        $this->pendaftaran->do_delete($no_pendaftaran);
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning" role="alert">Berhasil menghapus data!</div>');
        redirect('data-pendaftaran');
    }


}