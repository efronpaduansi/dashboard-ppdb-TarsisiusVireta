<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SendEmail extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Pendaftaran_model', 'pendaftaran');
    }

    public function index()
    {
        // Konfigurasi email
            // $config = [
            //     'mailtype'  => 'html',
            //     'charset'   => 'utf-8',
            //     'protocol'  => 'smtp',
            //     'smtp_host' => 'smtp.gmail.com',
            //     'smtp_user' => 'eufrondpaduansi@gmail.com',  // Email gmail
            //     'smtp_pass'   => 'k9nYRPjA',  // Password gmail
            //     'smtp_crypto' => 'ssl',
            //     'smtp_port'   => 465,
            //     'crlf'    => "\r\n",
            //     'newline' => "\r\n"
            // ];

            $config = array(
                'protocol' => 'smtp', 
                'smtp_host' => 'smtp.gmail.com', 
                'smtp_port' => 587,
                'smtp_user' => 'eufrondpaduansi@gmail.com',
                'smtp_pass' => 'k9nYRPjA',
                'mailtype' => 'html',
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE
            );

            // Load library email dan konfigurasinya
            $this->load->library('email', $config);

            // Email dan nama pengirim
            $this->email->from('no-reply@ppbd-tarsisius.sch.id', 'PPDB Tarsisius Vireta');

            //ambil data email dari tabel pendafataran
            $email = $this->pendaftaran->getEmail();
            foreach ($email as $e) {
                $this->email->to($e['email']);

            }
            // $this->email->to('penerima@domain.com'); // Ganti dengan email tujuan

            // Lampiran email, isi dengan url/path file
            $this->email->attach('https://images.pexels.com/photos/169573/pexels-photo-169573.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');

            // Subject email
            $this->email->subject('ID Pendaftaran PPDB Tarsisius Vireta');

            // Isi email
            $this->email->message("Terima kasih telah mendaftar di SMA Tarsisius Vireta. Berikut ini adalah ID pendafataran Anda: <b>123456</b>");

            // Tampilkan pesan sukses atau error
            if ($this->email->send()) {
                echo 'Sukses! email berhasil dikirim.';
            } else {
                echo 'Error! email tidak dapat dikirim.';
            }
    }
}