<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Supernova</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .notification-container {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            width: 90%;
            max-width: 500px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 20px;
            border: 1px solid #ddd;
        }

        .notification-container h2 {
            margin: 0;
            font-size: 20px;
            font-weight: bold;
            color: #333;
        }

        .notification-container p {
            margin: 10px 0 20px;
            font-size: 16px;
            color: #555;
        }

        .notification-container button {
            padding: 10px 20px;
            background: black;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .notification-container button:hover {
            background: #333;
        }

        .container {
            display: none; /* Tersembunyi awalnya */
            max-width: 900px;
            width: 100%;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .image-section {
            flex: 1;
            background: url('Asset/images/gb1.jpg') no-repeat center center/cover;
        }

        .form-section {
            flex: 1;
            padding: 30px;
        }

        .form-section h1 {
            margin-bottom: 20px;
            font-size: 28px;
            font-weight: bold;
        }

        .social-login {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .social-login button {
            flex: 1;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background: white;
            cursor: pointer;
            font-weight: 500;
        }

        .social-login button:hover {
            background: #f4f4f4;
        }

        .divider {
            text-align: center;
            margin: 20px 0;
            position: relative;
        }

        .divider::before,
        .divider::after {
            content: '';
            position: absolute;
            top: 50%;
            width: 40%;
            height: 1px;
            background: #ddd;
        }

        .divider::before {
            left: 0;
        }

        .divider::after {
            right: 0;
        }

        .divider span {
            background: white;
            padding: 0 10px;
        }

        .form-section form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .form-section input {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        .form-section button {
            padding: 10px;
            background: black;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .form-section button:hover {
            background: #333;
        }

        .form-section .links {
            text-align: center;
            margin-top: 10px;
        }

        .form-section .links a {
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
        }

        .form-section .links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Notifikasi -->
    <div class="notification-container" id="notificationContainer">
        <h2>Silakan Login</h2>
        <p>Silahkan login terlebih dahulu untuk melanjutkan.</p>
        <button id="loginButton">Login</button>
    </div>

    <!-- Form Login -->
    <div class="container" id="loginContainer">
        <div class="image-section"></div>
        <div class="form-section">
            <h1>SUPER NOVA</h1>
            <p>Sign In To SUPER NOVA</p>
            <div class="social-login">
                <button>Sign up with Google</button>
                <button>Sign up with Email</button>
            </div>
            <div class="divider">
                <span>OR</span>
            </div>
            <form action="<?= site_url('auth/login') ?>" method="POST">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Sign In</button>
            </form>
            <div class="links">
                <a href="#">Register Now</a> | <a href="#">Forgot Password?</a>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('loginButton').addEventListener('click', function() {
            document.getElementById('notificationContainer').style.display = 'none';
            document.getElementById('loginContainer').style.display = 'flex';
        });
    </script>
</body>
</html>
