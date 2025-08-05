<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login - Aplikasi Pengaduan Masyarakat</title>

  <!-- Font khusus untuk template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Gaya khusus untuk template ini-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <style>
    /* Mengatur gambar latar belakang */
    body {
      height: 100vh;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }
    .login-container {
      position: absolute;
      z-index: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .login-card {
      background-color: rgba(255, 255, 255, 0.7); /* Transparansi */
      border-radius: 10px;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
      padding: 2rem;
      transition: background-color 0.5s ease, opacity 0.5s ease;
    }

    .btn-primary {
      background-color: #4e73df;
      border-color: #4e73df;
      transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
      background-color: #2e59d9;
    }

    /* Animasi bergerak satu per satu untuk teks */
    .animated-text span {
      display: inline-block;
      opacity: 0;
      transform: translateX(-30px); /* Mulai dari kiri */
      animation: moveIn 0.5s forwards;
    }

    @keyframes moveIn {
      from {
        opacity: 0;
        transform: translateX(-30px); /* Gerakan dari kiri */
      }
      to {
        opacity: 1;
        transform: translateX(0); /* Akhirnya di posisi normal */
      }
    }

    #appText {
      margin-top: 20px; /* Spasi antara "Selamat Datang di" dan "Aplikasi Pengaduan Masyarakat" */
    }
  </style>

</head>

<body class="bg-gradient-primary">

  <!-- Menampilkan gambar sebagai latar belakang dengan <img> -->
  <img src="image/Logo-Pemerintah-Propinsi-Jawa-Barat.jpg" alt="Logo Pemerintah" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0;">
  

  <div class="container login-container">
    <div class="card o-hidden border-0 shadow-lg my-5 login-card">
      <div class="card-body p-0">
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <!-- Teks yang tidak diubah -->
                <h1 class="h4 text-gray-900 mb-4 animated-text" id="welcomeText">Selamat datang Admin/petugas!</h1>
                <h2 class="animated-text" id="appText">Aplikasi Pengaduan Masyarakat</h2>
              </div>
              <form class="user" method="post" action="cek_login2.php">
                <div class="form-group">
                  <input type="text" name="username" class="form-control form-control-user" placeholder="Masukkan Username...">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                </div>
                <input type="submit" class="btn btn-primary btn-user btn-block" value="Login!">
                <div class="text-center">
                  <br>
                  Masuk Sebagai Masyarakat? <br>
                  <a class="small" href="login.php">Silahkan Klik!</a>
                </div>
                <hr>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- JavaScript inti-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript inti-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Skrip kustom untuk semua halaman-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- JavaScript untuk animasi teks -->
  <script>
    // Fungsi untuk animasi teks bergerak satu per satu
    function animateText(elementId, delay = 0) {
      const element = document.getElementById(elementId);
      const text = element.textContent;
      element.textContent = ''; // Kosongkan teks sebelum diisi satu per satu

      text.split('').forEach((char, index) => {
        const span = document.createElement('span');
        span.textContent = char;
        span.style.animationDelay = `${index * 0.1 + delay}s`; // Menentukan delay untuk setiap huruf
        element.appendChild(span);
      });
    }

    // Memanggil fungsi animasi untuk kedua teks dengan delay antara keduanya
    animateText('welcomeText',); // Delay untuk "Selamat datang Admin/petugas!"
    animateText('appText', 3); // Delay 1 detik setelah "Selamat datang Admin/petugas!"
  </script>

</body>

</html>
