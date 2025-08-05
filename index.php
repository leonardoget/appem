<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBSITE DESA</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
            background-color: #2c3e50;
            color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        header .logo {
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        header img {
            width: 80px;
            height: auto;
            margin-left: 100px;
        }

        header nav a {
            color: #fff;
            text-decoration: none;
            margin-left: 20px;
            font-size: 16px;
            padding: 8px 16px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        header nav a:hover {
            background-color: #34495e;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
            padding: 20px;
        }

        .login-form {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .login-form h2 {
            margin-bottom: 30px;
            color: #2c3e50;
        }

        .input-group {
            margin-bottom: 20px;
            position: relative;
        }

        .input-group input {
            width: 100%;
            padding: 12px;
            border: 2px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .input-group input:focus {
            border-color: #2980b9;
            outline: none;
        }

        .input-group label {
            position: absolute;
            top: 8px;
            left: 12px;
            font-size: 14px;
            color: #aaa;
            transition: 0.3s ease;
        }

        .input-group input:focus + label,
        .input-group input:not(:placeholder-shown) + label {
            top: -10px;
            left: 12px;
            font-size: 12px;
            color: #2980b9;
        }

        .login-form button {
            background-color: #2980b9;
            color: #fff;
            border: none;
            padding: 12px;
            width: 100%;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-form button:hover {
            background-color: #3498db;
        }

        .footer {
            text-align: center;
            margin-top: 50px;
            font-size: 14px;
            color: #888;
        }

        /* Responsif untuk ukuran layar kecil */
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                text-align: center;
                padding: 20px;
            }

            .login-form {
                padding: 30px;
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">DESA SARWADADI</div>
        <img src="images/Logo prov Jawa Barat png.png" alt="logo">
        <nav>
        <a href="#">Contact</a>
            <a href="profile_desa.php">Profile Desa</a>
           
            <a href="login.php">Login</a>
        </nav>
    </header>

   

    <div class="footer">
        <p>&copy; 2025 Desa Sarwadadi  </p>
    </div>
</body>
</html>
