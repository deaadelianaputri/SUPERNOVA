<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

    public function index() {
        // Ambil data keranjang dari sesi
        $cart_data = $this->session->userdata('cart_data');
        if (!$cart_data || empty($cart_data['cartItems'])) {
            // Jika keranjang kosong, arahkan ke halaman keranjang
            redirect('cart');
        }
        
        // Validasi struktur data
        // foreach ($cart_data['cartItems'] as $key => $item) {
        //     if (!isset($item['product_name'], $item['quantity'], $item['price'])) {
        //         log_message('error', "Invalid cart item structure at index $key: " . print_r($item, true));
        //         unset($cart_data['cartItems'][$key]); // Hapus item yang tidak valid
        //     }
        // }
        
        // var_dump($cart_data);
        // Kirim data ke view
        $data = [
            'judul' => 'Halaman Checkout',
            'cartItems' => $cart_data['cartItems'],
            'subtotal' => $cart_data['subtotal'],
            'total' => $cart_data['total']
        ];
    
        $this->load->view('Templates/header', $data);
        $this->load->view('checkout/checkout', $data);
        $this->load->view('Templates/footer');
    }
    

    public function process() {
        // Ambil data keranjang dari sesi
        $cart_data = $this->session->userdata('cart_data');
    
        if (!$cart_data || empty($cart_data['cartItems'])) {
            redirect('cart'); // Jika keranjang kosong, arahkan ke halaman keranjang
        }
    
        // Simulasi penyimpanan pesanan ke database
        $orderID = 'ORDER' . time(); // Buat ID pesanan unik (ganti dengan logika Anda sendiri)
        $order_data = [
            'order_id' => $orderID,
            'user_email' => $this->input->post('email'),
            'user_address' => $this->input->post('address'),
            'payment_method' => $this->input->post('payment'),
            'order_items' => $cart_data['cartItems'],
            'total' => $cart_data['total'],
        ];
    
        // Simpan ke database (contoh, gunakan model untuk menyimpan data)
        $this->db->insert('payments', [
            'order_id' => $orderID,
            'customer_name' => $order_data['user_email'], // Anda bisa menggunakan nama customer jika ada
            'amount_paid' => $order_data['total'],
            'payment_method' => $order_data['payment_method']
        ]);
    
        // Hapus data keranjang dari sesi setelah pesanan selesai
        $this->session->unset_userdata('cart_data');
    
        // Redirect ke halaman payment success
        redirect('payment-success/' . $orderID);
    }
    
    public function saveOrder($customer_id, $total, $payment_method, $order_items) {
        // Ambil waktu sekarang sebagai order_date
        $order_date = date('Y-m-d H:i:s');  // Format waktu yang sesuai dengan database (misalnya: '2025-01-18 15:30:00')
    
        // Simpan data pesanan ke tabel orders
        $data = array(
            'customer_id' => $customer_id,
            'order_date' => $order_date,
            'total' => $total,
            'payment_method' => $payment_method,
            'status' => 'pending',  // status awal, bisa berubah setelah pembayaran
        );
    
        // Masukkan data pesanan ke database
        $this->db->insert('orders', $data);
    
        // Ambil ID pesanan yang baru dimasukkan
        $order_id = $this->db->insert_id();
    
        // Simpan data item pesanan ke tabel order_items
        foreach ($order_items as $item) {
            $item_data = array(
                'order_id' => $order_id,
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
                'total' => $item['total'],
            );
            $this->db->insert('order_items', $item_data);
        }
    
        return $order_id;
    }
    
}
