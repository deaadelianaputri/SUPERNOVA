<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Footer Example</title>
  <!-- Option 1: Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-p4x3ey5RHZWF1mv9cT8SvGQwlI1Q3ARhnydb1i5Tx9Lnyt28mCwWBuNhpK7Bj8cF" crossorigin="anonymous">
  <style>
    footer {
      background-color: #fff; /* Warna putih */
      padding: 20px 0;
      border-top: 1px solid #ddd; /* Garis atas untuk pemisah */
    }

    footer h5 {
      font-weight: bold;
      color: #333; /* Warna hitam ringan */
      margin-bottom: 10px;
    }

    footer nav {
      margin-bottom: 20px;
    }

    footer nav a {
      color: #6c757d; /* Warna abu-abu untuk link */
      font-size: 14px;
      text-decoration: none;
      margin: 0 15px;
      transition: color 0.3s;
    }

    footer nav a:hover {
      color: #000; /* Warna hitam saat hover */
    }

    footer p {
      color: #6c757d; /* Warna abu-abu untuk teks copyright */
      font-size: 12px;
    }
  </style>
</head>
<body>
  <footer class="text-center">
    <div class="container">
      <h5>SUPERNOVA</h5>
      <nav class="d-flex justify-content-center">
        <a href="#">Support Center</a>
        <a href="#">Invoicing</a>
        <a href="#">Contract</a>
        <a href="#">Blog</a>
        <a href="#">FAQs</a>
      </nav>
      <p>Copyright © 2022 SuperNova. All Rights Reserved.</p>
    </div>
  </footer>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
