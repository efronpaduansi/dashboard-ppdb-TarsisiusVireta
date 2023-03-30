<?php

class Kelas extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kelas_model', 'kelas');
    }

    public function index()
    {
        $data['title'] = 'Data Kelas';
        $data['kelas'] = $this->kelas->get_all_data()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/v_kelas');
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $nm_kelas = $this->input->post('nm_kelas');
        // $kd_kelas = $this->kelas_model->createKode();

        $data = array(
            'nama_kelas'    => $nm_kelas
        );
        $this->kelas->input_data('kelas', $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Kelas berhasil ditambahkan!</div>');
        redirect('kelas');
    }

    public function destroy($id)
    {
        $where = array('id' => $id);
        $this->kelas->delete('kelas', $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Kelas berhasil dihapus!</div>');
        redirect('kelas');
    }

    //fungsi edit sudah digantikan dengan modal

    public function update()
    {
        //tangkap data yang dikirimkan
        $id         = $this->input->post('id');
        $nm_kelas   = $this->input->post('nm_kelas');

        $data = array(
            'nama_kelas' => $nm_kelas
        );
        $where = array(
            'id' => $id
        );

        $this->kelas->update_data('kelas', $data, $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Kelas berhasil diubah!</div>');
        redirect('kelas');
    }
}