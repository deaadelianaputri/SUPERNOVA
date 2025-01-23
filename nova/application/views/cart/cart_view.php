<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPERNOVA - Shopping Cart</title>
    <style>
        * {
            
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .breadcrumb {
            padding: 10px 0 20px 0;
            color: #666;
            font-size: 14px;
            text-align: center;
            width: 100%;
        }

        .breadcrumb a {
            color: #666;
            text-decoration: none;
        }

        .cart-title {
            font-size: 32px;
            margin: 40px 0 10px 0;
            text-align: center;
            font-weight: 600;
            color: #333;
        }

        .cart-table {
            width: 100%;
            border-spacing: 0;
            margin-top: 30px;
            margin-bottom: 40px;
        }

        .cart-table th {
            text-align: left;
            padding: 15px;
            border-bottom: 1px solid #eee;
            font-weight: 600;
            color: #333;
        }

        .cart-table td {
            padding: 15px;
            border-bottom: 1px solid #eee;
        }

        .product-cell {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .product-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
        }

        .product-details {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .product-name {
            font-weight: 500;
            margin-bottom: 2px;
            color: #333;
        }

        .remove-btn {
            color: white;
            text-decoration: none;
            font-size: 14px;
            background-color: #ff4444;
            padding: 5px 10px;
            border-radius: 4px;
            display: inline-block;
            transition: background-color 0.2s;
        }

        .remove-btn:hover {
            background-color: #ff0000;
        }

        .quantity-control {
            display: flex;
            align-items: center;
            border: 1px solid #eee;
            width: fit-content;
        }

        .quantity-btn {
            border: none;
            background: none;
            padding: 10px 15px;
            cursor: pointer;
        }

        .quantity-input {
            width: 40px;
            text-align: center;
            border: none;
            border-left: 1px solid #eee;
            border-right: 1px solid #eee;
            padding: 10px 0;
        }

        .cart-summary {
            margin-top: 40px;
            text-align: right;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 15px;
        }

        .gift-wrap {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }

        .subtotal, .total {
            font-size: 18px;
            font-weight: 700;
            color: #000;
        }

        .checkout-btn {
            background-color: #000;
            color: #fff;
            border: none;
            padding: 15px 40px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            width: 200px;
        }

        .checkout-btn:hover {
            background-color: #333;
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        }

        .soft-divider {
            border-bottom: 1px solid #eee;
            margin: 20px 0;
        }

        .subscribe-section {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 50px 20px;
            background-color: #f7f7f7;
            position: relative;
        }

        .subscribe-content {
            max-width: 450px;
            margin: 0 auto;
        }

        .subscribe-content h2 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
        }

        .subscribe-content p {
            font-size: 16px;
            color: #777;
            margin-bottom: 20px;
            line-height: 1.5;
        }

        .subscribe-content input[type="email"] {
            width: 100%;
            padding: 15px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .subscribe-content button {
            background-color: #000;
            color: #fff;
            padding: 15px 30px;
            font-size: 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .subscribe-content button:hover {
            background-color: #333;
        }

        
    </style>
</head>
<body>
    <div class="container">
        <h1 class="cart-title">Shopping Cart</h1>
        <div class="breadcrumb">
            <a href="<?= base_url() ?>">Home</a> > Your Shopping Cart
        </div>

        <table class="cart-table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($cartItems)) : ?>
                    <?php foreach ($cartItems as $item): ?>
                        <tr>
                            <td>
                                <div class="product-cell">
                                    <img src="<?= base_url($item['image']) ?>" alt="<?= $item['name'] ?>" class="product-image">
                                    <div class="product-details">
                                        <p class="product-name"><?= $item['name'] ?></p>                                       <a href="<?= base_url('cart/delete/' . $item['cart_id']) ?>" class="remove-btn">Remove</a>
                                    </div>
                                </div>
                            </td>
                            <td>Rp<?= number_format($item['price'], 0, ',', '.') ?></td>
                            <td>
                                <form action="<?= base_url('cart/update') ?>" method="post" class="quantity-form">
                                    <input type="hidden" name="cart_id" value="<?= $item['cart_id'] ?>">
                                    <div class="quantity-control">
                                        <button type="submit" name="action" value="decrease" class="quantity-btn">−</button>
                                        <input type="text" name="quantity" value="<?= $item['quantity'] ?>" class="quantity-input" readonly>
                                        <button type="submit" name="action" value="increase" class="quantity-btn">+</button>
                                    </div>
                                </form>
                            </td>
                            <td>Rp<?= number_format($item['quantity'] * $item['price'], 0, ',', '.') ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" style="text-align: center;">Your cart is empty.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <div class="cart-summary">
            <form action="<?= base_url('cart/update') ?>" method="post" id="gift-wrap-form">
            
                <div class="subtotal">Subtotal: Rp<span id="subtotal-value"><?= isset($subtotal) ? number_format($subtotal, 0, ',', '.') : '0' ?></span></div>
                <div class="total">Total: Rp<span id="total-value"><?= isset($total) ? number_format($total, 0, ',', '.') : '0' ?></span></div>
            </form>
            <form action="<?= base_url('checkout') ?>" method="post">
                <button type="submit" class="checkout-btn">Proceed to Checkout</button>
            </form>
        </div>

        <div class="soft-divider"></div>

        <div class="subscribe-section">
            <div class="subscribe-content">
                <h2>Subscribe To Our Newsletter</h2>
                <p>Stay updated with our latest offers and updates.</p>
                <input type="email" placeholder="your-email@example.com">
                <button>Subscribe Now</button>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('gift-wrap-checkbox').addEventListener('change', function() {
            const isChecked = this.checked;
            const subtotalElement = document.getElementById('subtotal-value');
            const totalElement = document.getElementById('total-value');

            let subtotal = parseInt(subtotalElement.textContent.replace(/[^0-9]/g, ""));
            let total = parseInt(totalElement.textContent.replace(/[^0-9]/g, ""));
            const giftWrapCost = 10000;

            if (isChecked) {
                total += giftWrapCost;
            } else {
                total -= giftWrapCost;
            }

            totalElement.textContent = total.toLocaleString("id-ID");
        });
    </script>
</body>
</html>
