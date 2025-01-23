<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index() {
        // Mengambil data judul halaman
        $data['judul'] = 'Home';

        // Memeriksa apakah user sudah login
        $data['is_logged_in'] = $this->session->userdata('user_id') ? true : false;

        // Menampilkan tampilan header, home, dan footer
        $this->load->view('Templates/header', $data);
        $this->load->view('Home/index', $data);
        $this->load->view('Templates/footer');
    }
}