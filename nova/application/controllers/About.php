<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function index() {
        // Mengambil data judul halaman
        $data['judul'] = 'About Us';

        // Mengisi data pendiri dan deskripsi
        $data['founders'] = [
            'Dea Adeliana Putri', 
            'Vivi Amelia', 
            'Adinda Az-Zahra Nur Kurnia', 
            'Sansan Aprilia'
        ];
        $data['description'] = "Super Nova adalah bisnis aksesori handmade yang berkomitmen untuk menyediakan produk unik dan berkualitas tinggi kepada pelanggan kami. Kami bangga didirikan oleh para wanita inspiratif yang berbagi visi yang sama dalam seni dan kreativitas.";

        // Menampilkan tampilan header, about, dan footer
        $this->load->view('Templates/header', $data);
        $this->load->view('About/index', $data);
        $this->load->view('Templates/footer');
    }
}
