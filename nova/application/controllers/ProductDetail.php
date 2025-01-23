<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductDetail extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('ProductDetail_model'); // Memuat model baru untuk detail produk
    }

    // Menampilkan detail produk berdasarkan ID
    public function index($id) {
        $data['product'] = $this->ProductDetail_model->getProductById($id);

        if (!$data['product']) {
            show_404(); // Jika produk tidak ditemukan
        }

        $this->load->view('Product/product_detail_view', $data);
    }
}