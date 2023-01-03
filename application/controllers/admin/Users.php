<?php


class Users extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
    }

    public function index()
    { 
        $data['title'] = 'Data Users';
        $data['users'] = $this->users_model->get_all_data()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/v_users', $data);
        $this->load->view('templates/footer');

    }

    //input new users
    public function store()
    {
        $nm_users = $this->input->post('nm_users');
        $kd_users = $this->users_model->createKode();

        $data = array(
            'kode'          => $kd_users,
            'nama_users'  => $nm_users
        );
        $this->users_model->input_data('users', $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Users berhasil ditambahkan!</div>');
        redirect('admin/users');
        
    }

    public function destroy($id)
    {
        $where = array('id' => $id);
        $this->users_model->delete('users', $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Users berhasil dihapus!</div>');
        redirect('admin/users');
    }

    public function update()
    {
        //tangkap data yang dikirimkan
        $id             = $this->input->post('id');
        $nm_users     = $this->input->post('nm_users');

        $data = array(
            'nm_users' => $nm_users
        );
        $where = array(
            'id' => $id
        );

        $this->users_model->update_data('users', $data, $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Users berhasil diupdate!</div>');
        redirect('admin/users');
    }


}