<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($judul) ? htmlspecialchars($judul) : 'Checkout'; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom right, #f7f7f7, #eaeaea);
            color: #333;
        }
        h1, h2 {
            text-align: center;
            margin: 20px 0;
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin: 10px 0;
        }
        .container {
            max-width: 800px;
            margin: 30px auto;
            padding: 25px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }
        .summary {
            margin-bottom: 30px;
            font-size: 1rem;
            line-height: 1.6;
            border-top: 2px solid #e3b505;
            padding-top: 20px;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin: 15px 0 5px;
            font-weight: bold;
        }
        input, select {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.05);
            transition: border-color 0.3s ease;
        }
        input:focus, select:focus {
            border-color: #e3b505;
            outline: none;
        }
        button {
            background-color: #e3b505;
            color: #fff;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 6px;
            width: 100%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        button:hover {
            background-color: #c29804;
            transform: scale(1.02);
        }
        button:active {
            transform: scale(0.98);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Checkout</h1>

        <h2>Order Summary</h2>
        <div class="summary">
            <ul>
                <?php if (!empty($cartItems)): ?>
                    <?php foreach ($cartItems as $item) : ?>
                        <li>
                            <?= htmlspecialchars($item['name']); ?> - 
                            <?= (int)$item['quantity']; ?> x 
                            Rp<?= number_format($item['price'], 2, ',', '.'); ?>
                        </li>
                    <?php endforeach; ?>
                <?php else : ?>
                    <li><em>No items in your cart</em></li>
                <?php endif; ?>
            </ul>

            <p><strong>Subtotal:</strong> Rp<?= isset($subtotal) ? number_format($subtotal, 2, ',', '.') : '0.00'; ?></p>
            <p><strong>Total:</strong> Rp<?= isset($total) ? number_format($total, 2, ',', '.') : '0.00'; ?></p>

            <!-- Adding Bank Account Information -->
            <p><strong>Payment to Supernova:</strong></p>
            <p><strong>Bank Account Number:</strong> 123-456-7890</p>
            <p><strong>Bank Name:</strong> BCA</p>
        </div>

        <h2>Billing Information</h2>
        <form action="<?= base_url('checkout/process'); ?>" method="post" enctype="multipart/form-data">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>

            <label for="payment">Payment Method:</label>
            <select id="payment" name="payment" required>
                <option value="" disabled selected>Select a payment method</option>
                <option value="bca">BCA</option>
                <option value="bri">BRI</option>
                <option value="mandiri">Mandiri</option>
            </select>

            <!-- Nama Pemilik Rekening -->
            <label for="Name">Nama Pemilik Rekening:</label>
            <input type="text" id="Name" name="Name" required>

            <!-- Bukti Upload -->
            <label for="paymentProof">Upload Bukti Pembayaran:</label>
            <input type="file" id="paymentProof" name="paymentProof" accept="image/*,application/pdf" required>

            <button type="submit">Confirm Order</button>
        </form>
    </div>
</body>
</html>
