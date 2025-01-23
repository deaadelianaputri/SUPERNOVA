<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); // Pastikan library database dimuat
    }

    // Mengambil data item di keranjang dengan informasi produk
    public function getCartItems($user_id) {
        $this->db->select('cart.id as cart_id, cart.quantity, product.name, product.price, product.image');
        $this->db->from('cart');
        $this->db->join('product', 'cart.product_id = product.id'); // Join tabel products
        $this->db->where('cart.user_id', $user_id); // Filter berdasarkan user_id
        $query = $this->db->get();
        return $query->result_array();
        
    }
    
    // Tambah item ke keranjang
    public function addToCart($data) {
        // Periksa apakah produk sudah ada di keranjang
        $existing = $this->db->get_where('cart', [
            'user_id' => $data['user_id'],
            'product_id' => $data['product_id']
        ])->row_array();

        if ($existing) {
            // Jika sudah ada, update kuantitas
            $this->db->where('id', $existing['id']);
            $this->db->update('cart', ['quantity' => $existing['quantity'] + $data['quantity']]);
        } else {
            // Jika belum ada, tambahkan item baru
            $this->db->insert('cart', $data);
        }
    }

    // Perbarui kuantitas item di keranjang
    public function updateCart($cart_id, $data) {
        // Pastikan kuantitas tidak kurang dari 1
        if (isset($data['quantity']) && $data['quantity'] < 1) {
            $data['quantity'] = 1; // Set ke minimum
        }
    
        $this->db->where('id', $cart_id);
        return $this->db->update('cart', $data);
    }
    

    // Hapus item dari keranjang
    public function removeItem($cart_id) {
        $this->db->where('id', $cart_id);
        return $this->db->delete('cart');
    }
}