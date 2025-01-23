<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Handmade Accessories</title>
    <style>
        :root {
            --primary-color: #555; /* Earthy color */
            --secondary-color: #f8f3e9; /* Soft pastel background */
            --accent-color: #e3b505; /* Gold accent */
            --font-family-heading: 'Playfair Display', serif;
            --font-family-body: 'Poppins', sans-serif;
        }

        body {
            font-family: var(--font-family-body);
            color: var(--primary-color);
            background-color: var(--secondary-color);
            line-height: 1.8;
        }

        .hero {
            background: linear-gradient(to bottom right, #fafafa, #eae7dc);
            text-align: center;
            padding: 60px 20px;
            border-bottom: 2px solid var(--accent-color);
        }

        .hero h1 {
            font-family: var(--font-family-heading);
            font-size: 3.5rem;
            color: var(--primary-color);
            margin-bottom: 10px;
        }

        .hero button {
            background-color: var(--accent-color);
            color: #fff;
            border: none;
            padding: 15px 30px;
            font-size: 1.2rem;
            border-radius: 25px;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .hero button:hover {
            background-color: #b98d05;
            transform: scale(1.1);
        }

        .deals {
            text-align: center;
            padding: 50px 0;
        }

        .deals h2, .deals p {
            color: var(--primary-color);
        }

        .product-slider {
            display: flex;
            gap: 20px;
            justify-content: center;
            align-items: center;
            padding-top: 20px;
        }

        .product {
            text-align: center;
        }

        .product img {
            width: 150px; /* Lebar tetap */
            height: 150px; /* Tinggi tetap */
            object-fit: cover; /* Memastikan gambar tetap proporsional dalam dimensi */
            border-radius: 15px;
            transition: transform 0.3s ease;
        }

        .product img:hover {
            transform: scale(1.1);
        }

        .product p {
            font-size: 1.1rem;
            margin: 5px 0;
            color: var(--primary-color);
        }

        .product span {
            font-size: 1rem;
            color: var(--accent-color);
            font-weight: bold;
        }

        .newsletter {
            background: linear-gradient(90deg, #fafafa, #fff5e6);
            text-align: center;
            padding: 40px;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
        }

        .newsletter input {
            border: 2px solid var(--accent-color);
            font-size: 1rem;
            border-radius: 25px;
            padding: 10px 15px;
        }

        .newsletter button {
            background-color: var(--accent-color);
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 1rem;
        }

        /* Testimonials Section */
        .testimonials h2 {
            color: var(--primary-color);
            margin-bottom: 30px;
            font-family: var(--font-family-heading);
            font-size: 2rem;
            text-align: center; /* Centering the heading */
        }

        .carousel-control-prev-icon, .carousel-control-next-icon {
            background-color: var(--accent-color);
        }

        .carousel-inner {
            background-color: var(--secondary-color);
        }

        .card {
            border: 1px solid var(--accent-color);
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
            padding: 30px;
        }

        .card-text {
            color: var(--primary-color);
            font-family: var(--font-family-body);
            font-size: 1.1rem;
        }

        .card-title {
            color: var(--accent-color);
            font-family: var(--font-family-heading);
            font-size: 1.2rem;
            margin-top: 15px;
        }

        .card-body {
            padding: 0;
        }

        .carousel-item img {
            width: 35px;  /* Image width */
            height: 35px; /* Image height */
            object-fit: cover;
            border-radius: 10px; /* Square image with rounded corners */
            margin: 0 auto 15px auto; /* Center the image */
        }

        .carousel-item {
            padding: 20px;
        }

        /* Center the text and image inside the carousel */
        .carousel-item .card-body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center; /* Center the text inside the card */
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero">
    <div class="container">
        <h1>Handmade Accessories</h1>
        <p>Discover unique, handmade jewelry crafted with love.</p>
        <!-- Tombol dengan elemen <a> -->
        <a href="http://localhost/super/nova/Product" class="btn" style="text-decoration: none; background-color: #e3b505; color: white; padding: 15px 30px; border-radius: 25px; font-size: 1.2rem; display: inline-block; transition: transform 0.3s ease, background-color 0.3s ease;">Shop Now</a>
    </div>
</section>


    <!-- Deals of the Month -->
    <section class="deals">
        <div class="container">
            <h2>Deals Of The Month</h2>
            <p>Hurry, Before It's Too Late!</p>
            <div class="product-slider">
                <div class="product">
                    <img src="<?= base_url('asset/images/product1.jpg'); ?>" alt="Product 1">
                    <p>Shiny Necklace</p>
                    <span>Rp. 200.000</span>
                </div>
                <div class="product">
                    <img src="<?= base_url('asset/images/product2.jpg'); ?>" alt="Product 2">
                    <p>Elegant Earrings</p>
                    <span>Rp. 150.000</span>
                </div>
                <div class="product">
                    <img src="<?= base_url('asset/images/product3.jpg'); ?>" alt="Product 3">
                    <p>Gold Bracelet</p>
                    <span>Rp. 230.000</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="container">
            <h2>Customer Testimonials</h2>
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card mx-auto" style="max-width: 600px;">
                            <div class="card-body text-center">
                                <img src="asset/image/product3.jpg" alt="Customer 1">
                                <p class="card-text">"Amazing products! Will buy again."</p>
                                <span class="card-title">- James K.</span>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card mx-auto" style="max-width: 600px;">
                            <div class="card-body text-center">
                                <img src="https://via.placeholder.com/80" alt="Customer 2">
                                <p class="card-text">"Great quality and fast shipping!"</p>
                                <span class="card-title">- Sarah W.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
</body>
</html>