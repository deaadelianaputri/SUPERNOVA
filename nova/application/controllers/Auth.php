<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->helper('url'); // Pastikan helper URL dimuat
    }

    // Fungsi untuk mengecek apakah user sudah login
    private function is_logged_in() {
        return $this->session->userdata('user_id') !== NULL; // Cek apakah user_id ada di session
    }

    // Halaman registrasi
    public function register() {
        if ($this->input->post()) {
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT)
            );

            if ($this->User_model->register($data)) {
                $this->session->set_flashdata('success', 'Registrasi berhasil! Silakan login.');
                redirect('auth/login');
            } else {
                $this->session->set_flashdata('error', 'Registrasi gagal.');
            }
        }
        $this->load->view('register');
    }

    // Halaman login
    public function login() {
        if ($this->input->post()) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->User_model->get_user_by_email($email);
            if ($user && password_verify($password, $user['password'])) {
                $this->session->set_userdata('user_id', $user['id']);
                redirect('home'); // Ganti dengan halaman tujuan setelah login
            } else {
                $this->session->set_flashdata('error', 'Email atau password salah.');
            }
        }

        // Menampilkan flash message
        $data['flash_error'] = $this->session->flashdata('error');
        $this->load->view('login', $data);
    }

    // Fungsi logout
    public function logout() {
        $this->session->unset_userdata('user_id');
        redirect('auth/login');
    }

    // Fungsi untuk proteksi halaman tertentu
    public function protect_page() {
        if (!$this->is_logged_in()) {
            $this->session->set_flashdata('error', 'Silakan login terlebih dahulu. <a href="' . site_url('auth/login') . '">Login</a>');
            redirect('auth/login');
        }
    }
}
