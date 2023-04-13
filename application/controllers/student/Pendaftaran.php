<?php

class Pendaftaran extends CI_Controller{

    public function __construct(){
        parent::__construct();
       $this->load->model('pendaftaran_model', 'pendaftaran');
       $this->load->model('jurusan_model', 'jurusan');
       $this->load->model('banksoal_model', 'bank_soal');
       $this->load->model('jawaban_model', 'jawaban');
    }

    public function index(){
        $data['title'] = 'Form Pendaftaran';
        $data['jurusan'] = $this->jurusan->get_all_data()->result();
        $this->load->view('student/partials/header', $data);
        $this->load->view('student/v_pendaftaran', $data);
        $this->load->view('student/partials/footer');
    }

    private function _noPendaftaran()
    {
        //membuat nomor pendaftaran otomatis dengan random
       return $no_pendaftaran = rand(100000, 999999);
    }

    public function sendPendaftaran(){
        
        $data = [
            'no_pendaftaran'        => $this->_noPendaftaran(),
            'jurusan_id'            => $this->input->post('jurusan_id'),
            'nama_lengkap'          => $this->input->post('nama_lengkap'),
            'tempat_lahir'          => $this->input->post('tempat_lahir'),
            'tgl_lahir'             => $this->input->post('tgl_lahir'),
            'jenis_kelamin'         => $this->input->post('jenis_kelamin'),
            'agama'                 => $this->input->post('agama'),
            'no_hp'                 => $this->input->post('no_hp'),
            'email'                 => $this->input->post('email'),
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

    public function status()
    {
        $data['title'] = 'Cek Status Pendaftaran';
        $this->load->view('student/partials/header', $data);
        $this->load->view('student/v_cek_status');
        $this->load->view('student/partials/footer');
    }

    public function statusCheck()
    {
        $pendaftaran = $this->pendaftaran->getByStatusByNumber($this->input->post('etNomor'));
        //hitung data yang dikembalikan
        $count = count($pendaftaran);
        if($count < 1){
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Status pendaftaran tidak ditemukan!</div>');
            redirect('siswa/status');
        }else{
            $data['title'] = 'Status Pendaftaran';
            $data['pendaftaran'] = $pendaftaran[0];
            $this->load->view('student/partials/header', $data);
            $this->load->view('student/v_status', $data);
            $this->load->view('student/partials/footer');
        }
    }

    public function ujian()
    {
        $data['title'] = 'Ujian';
        $data['soal'] = $this->bank_soal->getSoal();
        $this->load->view('student/partials/header', $data);
        $this->load->view('student/v_ujian', $data);   
        $this->load->view('student/partials/footer');
    }

    public function sendUjian()
    {
        $data = [
            'soal_id' => $this->input->post('soal_id'),
            'user_id' => 1,
            'jawaban' => $this->input->post('jawaban'),
        ];
        $simpan = $this->jawaban->insert($data);
        //ambil soal id berikutnya
        $soal_id = $this->input->post('soal_id') + 1;

        //cek apakah soal id berikutnya ada
        $soal = $this->bank_soal->getSoalById($soal_id);
        if($soal == null){
            $data['title'] = 'Ujian';
            $this->load->view('student/partials/header', $data);
            $this->load->view('student/v_ujian_selesai', $data);   
            $this->load->view('student/partials/footer');
        }else{
            $data['title'] = 'Ujian';
            $data['soal'] = $this->bank_soal->getSoalById($soal_id);
            $this->load->view('student/partials/header', $data);
            $this->load->view('student/v_ujian_next', $data);   
            $this->load->view('student/partials/footer');
        }
        
    }
}