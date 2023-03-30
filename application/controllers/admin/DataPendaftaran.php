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

    public function accept($id)
    {
        $data = [
            'status' => 'Diterima'
        ];
        $this->pendaftaran->do_accept($id, $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil mengubah data!</div>');
        redirect('data-pendaftaran');
    }

    public function reject($id)
    {
        $data = [
            'status' => 'Ditolak'
        ];
        $this->pendaftaran->do_reject($id, $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil mengubah data!</div>');
        redirect('data-pendaftaran');
    }

    public function delete(){
        $id = $this->input->post('id');
        $this->pendaftaran->do_delete($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning" role="alert">Berhasil menghapus data!</div>');
        redirect('data-pendaftaran');
    }


}