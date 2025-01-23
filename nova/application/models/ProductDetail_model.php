<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductDetail_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Ambil data produk berdasarkan ID
    public function getProductById($id) {
        $query = $this->db->get_where('product', ['id' => $id]);
        return $query->row_array();
    }
}