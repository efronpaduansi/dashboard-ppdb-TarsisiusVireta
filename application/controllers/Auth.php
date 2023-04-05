<?php

class Auth extends CI_Controller{

    public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

    public function index()
    {
		//jika sudah login maka akan diarahkan ke halaman dashboard
		if ($this->session->userdata('email')) {
			redirect('dashboard');
		}
        $this->load->view('auth/v_login');
    }

    public function loginCheck()
    {
        //validasi form input
		$this->form_validation->set_rules('etEmail', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('etPassword', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            redirect('login');
        } else {
            $this->_login();
        }
    }

    //fungsi login
	private function _login()
	{
		$email 		= $this->input->post('etEmail');
		$password 	= $this->input->post('etPassword');

		//cek data user di database sesuai email yang diinput
		$user = $this->db->get_where('users', ['email' => $email])->row_array();
		
		//jika data user ada
		if($user){
				//verifikasi password
				if(password_verify($password, $user['password'])){
					$data = [
						'email' => $user['email'],
						'name' => $user['name'],
						'level' => $user['level']
					];
					$this->session->set_userdata($data);
					redirect('dashboard');
				}else{
					//kirimkan flashdata
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password salah!</div>');
					//arahkan kehalaman login
					redirect('/login');
				}
		}else{
			//kirimkan flashdata
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Email atau password salah!</div>');
			//arahkan kehalaman login
			redirect('/login');
		}
	}

    //fungsi logout
	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('name');

		//kirimkan flashdata
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Anda telah keluar, silahkan masuk!</div>');
		//arahkan kehalaman login
		redirect('/login');
	}
}