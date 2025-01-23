<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= isset($judul) ? $judul : 'Website'; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    * {
      box-sizing: border-box; /* Memastikan semua elemen mengikuti model box-sizing */
    }
    
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 50px;
      background: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      position: sticky;
      top: 0;
      z-index: 1000;
      width: 100%; /* Mengunci lebar header */
      height: 60px; /* Mengunci tinggi header */
      flex-shrink: 0; /* Mencegah header mengecil */
    }

    .logo {
      font-family: serif;
      font-size: 24px;
      font-weight: bold;
      color: #333;
      white-space: nowrap; /* Menghindari pemotongan logo jika ukurannya besar */
      flex-shrink: 0; /* Mencegah logo mengecil */
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
      margin: 0;
      padding: 0;
    }

    nav ul li a {
      text-decoration: none;
      color: #333;
      font-size: 14px;
    }

    .header-right {
      display: flex;
      align-items: center;
      gap: 20px;
    }

    .signup-btn {
      background: #000;
      color: #fff;
      border: none;
      padding: 5px 15px;
      border-radius: 8px;
      cursor: pointer;
      white-space: nowrap; /* Menghindari pemotongan teks tombol */
    }

    .signup-btn:hover {
      background: #444;
    }

    .search-icon {
      font-size: 18px;
      cursor: pointer;
    }

    /* Media query untuk layar kecil */
    @media (max-width: 768px) {
      header {
        padding: 10px 20px;
        height: 50px; /* Mengurangi tinggi header pada layar kecil */
      }

      .logo {
        font-size: 20px; /* Mengurangi ukuran font logo pada layar kecil */
      }

      nav ul {
        gap: 15px; /* Mengurangi gap antar menu pada layar kecil */
      }

      .signup-btn {
        padding: 5px 10px; /* Menyesuaikan ukuran tombol */
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">SUPERNOVA</div>
    <nav>
      <ul>
        <li><a href="<?= base_url(); ?>">Beranda</a></li>
        <li><a href="<?= base_url('Product'); ?>">Product</a></li>
        <li><a href="<?= base_url('cart'); ?>">Keranjang</a></li>
        <li><a href="<?= base_url('about'); ?>">About</a></li>
      </ul>
    </nav>
    <div class="header-right">
      <?php if ($this->session->userdata('user_id')): ?>
        <button class="signup-btn" onclick="window.location.href='<?= base_url(''); ?>'">Profile</button>
        <button class="signup-btn" onclick="window.location.href='<?= base_url('auth/logout'); ?>'">Logout</button>
      <?php else: ?>
        <button class="signup-btn" onclick="window.location.href='<?= base_url('auth/register'); ?>'">Sign Up</button>
        <span class="search-icon">🔍</span>
      <?php endif; ?>
    </div>
  </header>
</body>
</html>
