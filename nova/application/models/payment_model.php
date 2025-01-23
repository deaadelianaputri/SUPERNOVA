<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class payment_model extends CI_Model {

    // Ambil data pembayaran dari database
    public function get_payment_details($orderID) {
        // Contoh data statis, ganti dengan query database Anda
        $this->db->where('order_id', $orderID);
        $query = $this->db->get('payments'); // Tabel "payments" di database
        return $query->row_array(); // Mengembalikan satu baris sebagai array
    }

    public function get_order_items($orderID) {
        $this->db->select('*');
        $this->db->from('order_items');  // Ganti dengan nama tabel yang sesuai
        $this->db->where('order_id', $orderID);  // Ganti dengan kolom yang sesuai
        $query = $this->db->get();
    
        return $query->result_array();  // Mengembalikan hasil dalam bentuk array
    }
    
}
