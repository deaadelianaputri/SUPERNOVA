<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Arrivals</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            padding: 5rem 0;
        }

        .text-center {
            text-align: center;
        }

        .mb-4 {
            margin-bottom: 1.5rem;
        }

        .text-primary {
            color: #007bff;
        }

        .row {
            display: flex;
            gap: 1rem;
        }

        .col-md-4 {
            width: 30%;
        }

        .mb-4 {
            margin-bottom: 1rem;
        }

        .card {
            border: 1px solid #f0f0f0;
            border-radius: 1rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s;
        }

        .card-img-top {
            border-radius: 15px 15px 0 0;
            width: 100%;
            height: auto;
        }

        .card-body {
            padding: 1rem;
        }

        .card-title {
            color: #333;
            font-size: 1.25rem;
        }

        .card-text {
            font-size: 1.1rem;
        }

        .text-warning {
            color: #ffc107;
        }

        .text-danger {
            color: #dc3545;
        }

        .btn {
            padding: 0.5rem 2rem;
            border-radius: 3rem;
            font-size: 1.25rem;
        }

        .btn-dark {
            background-color: #343a40;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-dark:hover {
            background-color: #23272b;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <h1 class="text-center mb-4 text-primary">New Arrivals</h1>
    <div id="productContainer" class="row g-4"> <!-- Added a gap between items for a clean layout -->
        <?php foreach ($Product as $product): ?>
            <div class="col-md-4 mb-4">
                <!-- Wrap the card inside an anchor tag to make it a clickable link -->
                <a href="<?= site_url('ProductDetail/index/' . $product['id']) ?>" class="text-decoration-none">
                    <div class="card border-light shadow-sm rounded-4">
                        <!-- Improved image styling -->
                        <img src="<?= base_url($product['image']) ?>" class="card-img-top" alt="<?= htmlspecialchars($product['name'], ENT_QUOTES) ?>" style="border-radius: 15px 15px 0 0;">
                        <div class="card-body">
                            <!-- Product title and price styled for emphasis -->
                            <h5 class="card-title text-dark fs-4"><?= htmlspecialchars($product['name'], ENT_QUOTES) ?></h5>
                            <p class="card-text fs-5 text-primary">Rp<?= number_format($product['price'], 0, ',', '.') ?></p>
                            <p class="text-muted"><?= $product['review_count'] ?> Customer Reviews</p>
                            <!-- Rating and status with colors for better distinction -->
                            <p class="text-warning fs-5">
                                <?php 
                                    $rating = $product['rating']; 
                                    for ($i = 0; $i < 5; $i++) {
                                        echo $i < $rating ? '★' : '☆'; 
                                    }
                                ?>
                                <?= number_format($rating, 1) ?> / 5
                            </p>
                            <p class="text-danger fs-6"><?= htmlspecialchars($product['status'], ENT_QUOTES) ?></p>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Centered "View More" button with a new style -->
    <div class="text-center mt-4">
        <button id="viewMoreBtn" class="btn btn-dark px-4 py-2 rounded-pill fs-5">View More</button>
    </div>
</div>

<script>
    // If you want to add functionality to "View More" button, you can use JavaScript like so:
    document.getElementById("viewMoreBtn").addEventListener("click", function() {
        // You can implement AJAX here to load more products or change the button behavior
        alert("Loading more products...");
    });
</script>

</body>
</html>
