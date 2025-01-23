<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Pembayaran Berhasil</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f6f9;
            color: #333;
        }

        .container {
            max-width: 700px;
            margin: 50px auto;
            padding: 30px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            text-align: center;
            border: 1px solid #e0e0e0;
        }

        h1 {
            font-size: 32px;
            color: #2c3e50;
            margin-bottom: 20px;
            font-weight: 600;
        }

        p {
            font-size: 16px;
            color: #7f8c8d;
            line-height: 1.8;
            margin-bottom: 10px;
        }

        .order-details {
            text-align: left;
            margin: 30px 0;
            padding: 20px;
            background-color: #ecf0f1;
            border: 1px solid #bdc3c7;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .order-details p {
            margin: 12px 0;
            font-size: 15px;
            color: #34495e;
        }

        .order-details strong {
            color: #2c3e50;
        }

        .button, .print-button {
            margin-top: 30px;
        }

        .button a,
        .print-button a {
            text-decoration: none;
            color: #ffffff;
            background-color: #3498db;
            padding: 12px 24px;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .button a:hover,
        .print-button a:hover {
            opacity: 0.8;
            background-color: #2980b9;
        }

        @media (max-width: 768px) {
            .container {
                margin: 20px;
                padding: 20px;
            }

            h1 {
                font-size: 28px;
            }

            p {
                font-size: 14px;
            }

            .order-details p {
                font-size: 13px;
            }

            .button a,
            .print-button a {
                font-size: 14px;
                padding: 10px 20px;
            }
        }
    </style>
    <script>
        function printInvoice() {
            window.print();
        }
    </script>
</head>
<body>
<div class="container">
    <h1>Pembayaran Berhasil!</h1>
    <p>Terima kasih, <strong><?= isset($customerName) ? $customerName : 'Pelanggan'; ?></strong>. Pembayaran Anda telah berhasil diproses.</p>
    <p>Berikut adalah rincian pesanan Anda:</p>

    <div class="order-details">
        <p><strong>ID Pesanan:</strong> <?= isset($orderID) ? $orderID : 'Tidak tersedia'; ?></p>
        <p><strong>Tanggal Pemesanan:</strong> <?= isset($orderDate) ? $orderDate : 'Tidak tersedia'; ?></p>
        <p><strong>Total Bayar:</strong> Rp<?= isset($total) ? number_format($total, 2, ',', '.') : '0,00'; ?></p>
        <p><strong>Metode Pembayaran:</strong> <?= isset($paymentMethod) ? ucfirst($paymentMethod) : 'Tidak tersedia'; ?></p>
    </div>

    <p>Jika ada pertanyaan terkait pesanan, hubungi layanan pelanggan kami.</p>

    <div class="button">
        <a href="<?= base_url(); ?>">Kembali ke Beranda</a>
    </div>

    <div class="print-button">
        <a href="javascript:void(0);" onclick="printInvoice()">Cetak Invoice</a>
    </div>
</div>

</body>
</html>
