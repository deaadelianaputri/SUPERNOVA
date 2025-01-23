<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $product['name']; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        :root {
            --primary-color: #333;
            --secondary-color: #f8f3e9;
            --accent-color: #e3b505;
            --font-family-heading: 'Playfair Display', serif;
            --font-family-body: 'Poppins', sans-serif;
        }

        body {
            font-family: var(--font-family-body);
            background-color: var(--secondary-color);
            color: var(--primary-color);
        }

        .product-img {
            width: 100%;
            height: auto;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .product-img:hover {
            transform: scale(1.05);
        }

        .product-detail {
            padding: 30px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .product-detail h1 {
            font-family: var(--font-family-heading);
            color: var(--accent-color);
            font-size: 2.5rem;
        }

        .product-detail .price {
            font-size: 1.5rem;
            color: var(--primary-color);
        }

        .product-detail p {
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .status-badge {
            font-size: 14px;
            padding: 8px 15px;
            border-radius: 25px;
            color: white;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .status-available {
            background-color: #28a745;
        }

        .status-unavailable {
            background-color: #dc3545;
        }

        .add-to-cart-btn {
            background-color: var(--accent-color);
            color: white;
            font-size: 1.2rem;
            padding: 12px 30px;
            border-radius: 30px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .add-to-cart-btn:hover {
            background-color: #b98d05;
            transform: scale(1.05);
        }

        .quantity-selector {
            width: 100px;
            font-size: 1.2rem;
            padding: 5px;
            border-radius: 8px;
        }

        .product-detail .rating {
            font-size: 1.2rem;
            font-weight: bold;
            color: #e3b505;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <!-- Product Image Section -->
            <div class="col-md-6">
                <img src="<?= base_url($product['image']); ?>" alt="<?= $product['name']; ?>" class="product-img">
            </div>

            <!-- Product Detail Section -->
            <div class="col-md-6 product-detail">
                <h1><?= $product['name']; ?></h1>
                <p class="price">Rp<?= number_format($product['price'], 0, ',', '.'); ?></p>
                <p><?= $product['description']; ?></p>
                
                <!-- Product Status Badge -->
                <span class="status-badge <?= $product['status'] === 'Available' ? 'status-available' : 'status-unavailable'; ?>">
                    <?= $product['status']; ?>
                </span>
                
                <!-- Rating Section -->
                <div class="mt-3 rating">
                    <p>Rating: <strong><?= number_format($product['rating'], 1); ?></strong> (<?= $product['review_count']; ?> reviews)</p>
                </div>

                <!-- Add to Cart Form -->
                <form action="<?= site_url('cart/add'); ?>" method="post" class="mt-4">
                    <input type="hidden" name="product_id" value="<?= $product['id']; ?>">
                    
                    <!-- Quantity Selector -->
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" name="quantity" id="quantity" class="quantity-selector form-control" value="1" min="1">
                    </div>
                    
                    <!-- Add to Cart Button -->
                    <button type="submit" class="btn add-to-cart-btn">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
