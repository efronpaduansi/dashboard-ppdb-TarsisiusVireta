<?php

class Jurusan extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('jurusan_model', 'jurusan');
    }

    public function index()
    { 
        $data['title'] = 'Data Jurusan';
        $data['jurusan'] = $this->jurusan->get_all_data()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/v_jurusan');
        $this->load->view('templates/footer');

    }

    //input new jurusan
    public function store()
    {
        $nm_jurusan = $this->input->post('nm_jurusan');
        // $kd_jurusan = $this->jurusan->createKode();

        $data = array(
            'nama_jurusan'  => $nm_jurusan
        );
        $this->jurusan->input_data('jurusan', $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Jurusan berhasil ditambahkan!</div>');
        redirect('jurusan');
        
    }

    public function destroy($id)
    {
        $where = array('id' => $id);
        $this->jurusan->delete('jurusan', $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Jurusan berhasil dihapus!</div>');
        redirect('jurusan');
    }

    public function update()
    {
        //tangkap data yang dikirimkan
        $id             = $this->input->post('id');
        $nm_jurusan     = $this->input->post('nm_jurusan');

        $data = array(
            'nama_jurusan' => $nm_jurusan
        );
        $where = array(
            'id' => $id
        );

        $this->jurusan->update_data('jurusan', $data, $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Jurusan berhasil diubah!</div>');
        redirect('jurusan');
    }

}