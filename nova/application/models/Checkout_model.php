<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Checkout_model extends CI_Model {

    public function getCartItems($user_id) {
        $this->db->select('cart.id as cart_id, cart.quantity, product.name, product.price, product.image');
        $this->db->from('cart');
        $this->db->join('product', 'cart.product_id = product.id'); // Join tabel products
        $this->db->where('cart.user_id', $user_id); // Filter berdasarkan user_id
        $query = $this->db->get();
        return $query->result_array();
    }
    

    public function save_order($data) {
        // Contoh penyimpanan data pesanan ke database
        return $this->db->insert('orders', $data);
    }
}