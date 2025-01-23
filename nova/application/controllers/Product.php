<?php
class Product extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // $this->load->database(); // Memuat database jika dibutuhkan
        $this->load->model('Product_model');
    }
    public function index()
    {

        $data['judul'] = 'Halaman Product';
        $data['Product'] = $this->Product_model->getAllProduct();
        // $data['Product']=[0, 1, 2];
        $this->load->view('Templates/header', $data);
        $this->load->view('Product/index', $data);
        $this->load->view('Templates/footer'); 
    }

    public function loadMoreProducts()
    {
    $offset = $this->input->post('offset'); // Offset dari request
    $limit = 3; // Jumlah produk yang akan diambil setiap kali request
    $products = $this->Product_model->getProducts($limit, $offset);

    echo json_encode($products);
    }


   
}