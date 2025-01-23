<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= isset($judul) ? $judul : 'Profile'; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .profile-container {
      max-width: 800px;
      margin: 0 auto;
      padding: 30px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }
    .profile-header {
      text-align: center;
      margin-bottom: 30px;
    }
    .profile-header h2 {
      font-size: 28px;
      font-weight: bold;
    }
    .profile-details {
      margin-bottom: 20px;
    }
    .profile-details label {
      font-weight: bold;
    }
    .btn-custom {
      background-color: #000;
      color: white;
      padding: 10px 20px;
      border-radius: 5px;
      text-decoration: none;
    }
    .btn-custom:hover {
      background-color: #333;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="profile-container">
      <div class="profile-header">
        <h2>Profil Pengguna</h2>
      </div>

      <div class="profile-details">
        <p><strong>Nama:</strong> <?= htmlspecialchars($user['name']); ?></p>
        <p><strong>Email:</strong> <?= htmlspecialchars($user['email']); ?></p>
      </div>

      <div class="d-flex justify-content-between">
        <a href="<?= base_url('profile/edit'); ?>" class="btn-custom">Edit Profile</a>
        <a href="<?= base_url('auth/logout'); ?>" class="btn-custom">Logout</a>
      </div>
    </div>
  </div>
</body>
</html>
