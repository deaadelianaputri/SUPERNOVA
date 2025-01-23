<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Memastikan pengguna sudah login
        if (!$this->session->userdata('user_id')) {
            redirect('auth/login'); // Mengarahkan ke halaman login jika belum login
        }
        $this->load->model('User_model'); // Model untuk mengambil data user
    }

    public function index() {
        $user_id = $this->session->userdata('user_id');
        $data['user'] = $this->User_model->get_user_by_id($user_id); // Mendapatkan data user berdasarkan ID
        $data['judul'] = 'Profile Saya'; // Judul halaman

        $this->load->view('Templates/header', $data); // Memuat header
        $this->load->view('Profile/index', $data);  // Memuat halaman profil
        $this->load->view('Templates/footer'); // Memuat footer
    }
}
