<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - SUPER NOVA</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            display: flex;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 800px;
        }

        .image-section {
            flex: 1;
            background: url('necklace.jpg') no-repeat center center;
            background-size: cover;
        }

        .form-section {
            flex: 1;
            padding: 40px;
        }

        .form-section h2 {
            margin-bottom: 20px;
            font-size: 28px;
            font-weight: bold;
            color: #333;
        }

        .form-section form {
            display: flex;
            flex-direction: column;
        }

        .form-section form input {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-section form button {
            padding: 10px;
            background-color: black;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .form-section form button:hover {
            background-color: #444;
        }

        .form-section .alt-option {
            margin-top: 20px;
            text-align: center;
            color: #666;
        }

        .form-section .alt-option a {
            color: #000;
            font-weight: bold;
            text-decoration: none;
        }

        .form-section .alt-option a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="image-section"></div>
        <div class="form-section">
            <h2>Register - SUPER NOVA</h2>
            <form method="POST" action="<?= site_url('auth/register') ?>">
                <input type="text" name="name" placeholder="Nama Lengkap" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Register</button>
            </form>
            <div class="alt-option">
                <p>Sudah punya akun? <a href="<?= base_url('auth/login'); ?>">Login di sini</a></p>
            </div>
            <?= $this->session->flashdata('error') ?>
        </div>
    </div>
</body>
</html>