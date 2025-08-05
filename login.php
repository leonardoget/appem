<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login - Aplikasi Pengaduan Masyarakat</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom CSS for background image and animations -->
  <style>
    body {
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      overflow: hidden;
      background: url('images/DALL·E 2024-11-28 16.19.27 - A well-maintained and modern village office building labeled clearly as Desa Sarwadadi in bold and prominent lettering. The building is set in a ser.jpg') no-repeat center center fixed;
      background-size: cover;
    }

    .login-container {
      position: relative;
      z-index: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .login-card {
      background-color: rgba(255, 255, 255, 0.95);
      border-radius: 10px;
      box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.3);
      padding: 2rem;
      animation: slideIn 0.6s ease-out;
    }

    @keyframes slideIn {
      from { transform: translateY(20px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    .form-control-user {
      transition: box-shadow 0.3s ease, transform 0.2s ease;
    }

    .form-control-user:focus {
      box-shadow: 0 0 10px rgba(78, 115, 223, 0.5);
      transform: scale(1.02);
    }

    .btn-primary {
      background-color: #4e73df;
      border-color: #4e73df;
      transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .btn-primary:hover {
      background-color: #2e59d9;
      transform: scale(1.05);
    }

    .animated-text span {
      opacity: 0;
      display: inline-block;
      animation: fadeIn 0.05s forwards;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .small:hover {
      color: #4e73df;
      text-decoration: underline;
    }

    .small:active {
      transform: scale(0.98);
      transition: transform 0.1s;
    }
  </style>
</head>

<body>
  <div class="container login-container">
    <div class="card o-hidden border-0 shadow-lg my-5 login-card">
      <div class="card-body p-0">
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4 animated-text" id="welcomeText">Selamat Datang di</h1>
                <h2 class="animated-text" id="appText">Aplikasi Pengaduan Masyarakat</h2>
              </div>
              <form class="user" method="post" action="cek_login.php">
                <div class="form-group">
                  <input type="text" name="username" class="form-control form-control-user" placeholder="Masukkan Username">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                </div>
                <input type="submit" class="btn btn-primary btn-user btn-block" value="Login">
                <hr>
              </form>
              <div class="text-center">
                <span>Belum punya akun?</span><br>
                <a class="small" href="register.php">Daftar Sekarang!</a>
              </div>
              <hr>
              <div class="text-center">
                <a class="small" href="index2.php">Masuk sebagai Admin/Petugas!</a>
              </div>
              <hr>
              <div class="text-center">
                <a class="small" href="index.php">KEMBALI KE MENU</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- JavaScript untuk animasi teks -->
  <script>
    function animateText(elementId, delay = 0) {
      const element = document.getElementById(elementId);
      const text = element.textContent;
      element.textContent = '';

      text.split('').forEach((char, index) => {
        const span = document.createElement('span');
        span.textContent = char;
        span.style.animationDelay = `${index * 0.05 + delay}s`;
        element.appendChild(span);
      });
    }

    animateText('welcomeText');
    animateText('appText', 1);
  </script>
</body>
</html>
