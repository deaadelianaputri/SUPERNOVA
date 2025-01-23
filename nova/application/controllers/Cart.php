<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Cart_model');
        $this->load->library('session');
        $this->load->helper('url');

        // Cek apakah user sudah login
        if (!$this->session->userdata('user_id')) {
            $this->session->set_flashdata('error', 'Silakan login terlebih dahulu.');
            redirect('auth/login');
        }
    }

    // Menampilkan isi keranjang
    public function index() {
        $data['judul'] = 'Keranjang Belanja';
        $user_id = $this->session->userdata('user_id'); // Ambil user_id dari session

        // Ambil item dari model
        $data['cartItems'] = $this->Cart_model->getCartItems($user_id);

        // Hitung subtotal
        $subtotal = 0;
        foreach ($data['cartItems'] as $item) {
            $subtotal += $item['quantity'] * $item['price'];
        }

        // Tambahkan biaya gift wrap (opsional)
        $gift_wrap = $this->input->post('gift_wrap') == '1' ? 10 : 0;
        $data['subtotal'] = $subtotal;
        $data['total'] = $subtotal + $gift_wrap;
        $data['gift_wrap'] = $gift_wrap;

        // Simpan total ke sesi untuk checkout
        $this->session->set_userdata('cart_data', [
            'cartItems' => $data['cartItems'],
            'subtotal' => $subtotal,
            'total' => $subtotal + $gift_wrap
        ]);

        $this->load->view('Templates/header', $data);
        $this->load->view('cart/cart_view', $data);
        $this->load->view('Templates/footer');
    }

    // Tambahkan item ke keranjang
    public function add() {
        $user_id = $this->session->userdata('user_id'); // Ambil user_id dari session
        $data = [
            'user_id' => $user_id,
            'product_id' => $this->input->post('product_id'),
            'quantity' => $this->input->post('quantity')
        ];
        $this->Cart_model->addToCart($data);
        redirect('cart');
    }

    // Memperbarui kuantitas item di keranjang
    public function update() {
        $cart_id = $this->input->post('cart_id');
        $action = $this->input->post('action');

        // Ambil item dari database berdasarkan cart_id
        $item = $this->db->get_where('cart', ['id' => $cart_id])->row_array();

        if ($item) {
            $quantity = $item['quantity'];

            // Hitung kuantitas baru berdasarkan aksi
            if ($action === 'increase') {
                $quantity += 1;
            } elseif ($action === 'decrease' && $quantity > 1) {
                $quantity -= 1;
            }

            // Perbarui kuantitas di database
            $this->Cart_model->updateCart($cart_id, ['quantity' => $quantity]);
        }

        redirect('cart');
    }

    // Menghapus item dari keranjang
    public function delete($cart_id) {
        $this->Cart_model->removeItem($cart_id);
        redirect('cart');
    }
}
