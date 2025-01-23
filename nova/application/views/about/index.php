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

        /* About Us Section */
        .about-us {
            padding: 60px 20px;
            background-color: #fff;
            text-align: center;
        }

        .about-us h2 {
            color: var(--primary-color);
            font-family: var(--font-family-heading);
            font-size: 2.5rem;
            margin-bottom: 30px;
        }

        .about-us .about-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 30px;
            background-color: var(--secondary-color);
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .about-us .about-content p {
            font-size: 1.1rem;
            color: var(--primary-color);
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .about-us .team-image {
            width: 180px; /* Ukuran gambar tetap */
            height: 180px; /* Ukuran gambar tetap */
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            object-fit: cover; /* Menjaga proporsi gambar */
        }

        .about-us .team-name {
            color: var(--accent-color);
            font-family: var(--font-family-heading);
            font-size: 1.2rem;
            font-weight: bold;
        }

        .about-us .team-role {
            color: var(--primary-color);
            font-size: 1rem;
        }

        .about-us .about-content .button {
            background-color: var(--accent-color);
            color: #fff;
            border: none;
            padding: 12px 25px;
            font-size: 1rem;
            border-radius: 25px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .about-us .about-content .button:hover {
            background-color: #b98d05;
        }

        /* Responsive Design */
        @media (max-width: 767px) {
            .about-us h2 {
                font-size: 2rem;
            }
        }

        /* Team Members */
        .team-members {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .team-card {
            text-align: center;
            max-width: 200px;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Handmade Accessories</h1>
            <p>Discover unique, handmade jewelry crafted with love.</p>
            <button class="btn">Shop Now</button>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="about-us">
        <div class="container">
            <h2>About Us</h2>
            <div class="about-content">
                <p>At Handmade Accessories, we believe in the beauty of authenticity and craftsmanship. Our team is dedicated to creating unique jewelry pieces that bring out the elegance in every individual. Each accessory is crafted with love and care, using premium materials to ensure you receive the finest quality.</p>
                <p>Our mission is to provide our customers with the best shopping experience, from our easy-to-navigate online store to our friendly customer service. Thank you for being part of our journey!</p>
                <button class="button">Learn More</button>
            </div>
        </div>

        <div class="container mt-5">
            <h2>Meet Our Founders</h2>
            <div class="team-members">
                <div class="team-card">
                    <img src="asset/images/dea.jpg" alt="John Doe" class="team-image">
                    <p class="team-name">Dea Adeliana Putri</p>
                    <p class="team-role">Founder & Chief Designer</p>
                </div>
                <div class="team-card">
                    <img src="asset/images/dinda.jpg" alt="Jane Smith" class="team-image">
                    <p class="team-name">Adinda Az-zahra Nur Kurnia</p>
                    <p class="team-role">Co-Founder & Creative Director</p>
                </div>
                <div class="team-card">
                    <img src="asset/images/sansan.jpg" alt="Michael Lee" class="team-image">
                    <p class="team-name">Sansan Aprilia</p>
                    <p class="team-role">Co-Founder & Operations Manager</p>
                </div>
                <div class="team-card">
                    <img src="asset/images/vivi.jpg" alt="Emma Wang" class="team-image">
                    <p class="team-name">Vivi Amelia</p>
                    <p class="team-role">Co-Founder & Marketing Director</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
