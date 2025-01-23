<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_success extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('payment_model'); // Load model pembayaran
        $this->load->database(); // Pastikan database terhubung
    }

    public function index($orderID = null) {
        if (!$orderID) {
            show_404(); // Tampilkan error jika order ID tidak diberikan
        }

        // Ambil data pembayaran berdasarkan order ID
        $paymentData = $this->payment_model->get_payment_details($orderID);

        if (!$paymentData) {
            show_404(); // Tampilkan error jika data pembayaran tidak ditemukan
        }

        // Ambil data pesanan berdasarkan order ID
        $this->db->where('order_id', $orderID);
        $order = $this->db->get_where('orders', ['order_id' => $orderID])->row_array();

        // Ambil data item pesanan berdasarkan order ID
        $this->db->where('order_id', $orderID);
        $orderItems = $this->db->get('order_items')->result_array();

        // Cek apakah kolom order_date ada dan tidak null, jika null gunakan tanggal hari ini
        $orderDate = isset($order['order_date']) && !empty($order['order_date']) ? $order['order_date'] : date('Y-m-d H:i:s'); // Gunakan tanggal sekarang jika null

        // Kirim data ke view
        $data['judul'] = 'Pembayaran Berhasil';
        $data['customerName'] = $paymentData['customer_name'];
        $data['orderID'] = $paymentData['order_id'];
        $data['orderItems'] = $orderItems;  // Menambahkan items pesanan dari tabel order_items
        $data['total'] = $paymentData['amount_paid'];
        $data['paymentMethod'] = $paymentData['payment_method'];
        $data['orderDate'] = $orderDate;  // Menambahkan tanggal pemesanan

        // Load header, view, dan footer
        $this->load->view('templates/header', $data);
        $this->load->view('Payment_success/index', $data);
        $this->load->view('templates/footer');
    }
}
?>
