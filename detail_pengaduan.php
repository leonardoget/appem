<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Blank</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">


<div class="card shadow">
<div class="card-header">
    Detail Pengaduan
    </div>
    <div class="card-body">
    <div class="form-group cols-sm-6">
    <a href="?url=lihat_pengaduan" class="btn btn-primary btn-icon-split">
    <span class="icon text-white-50">
        <i class="fas fa-arrow-left"></i>
    </span>
    <span class="text">Kembali</span>
</a>

    </div>
    
        <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">

        <?php 
       require 'koneksi.php';
       // Memastikan sesi telah dimulai
       
       
       // Menggunakan mysqli untuk koneksi database
      // Pastikan session sudah dimulai


// Menghindari SQL Injection
$id = mysqli_real_escape_string($koneksi, $_GET['id'] ); // Atau bisa menggunakan $_GET['id'] jika itu yang dimaksud

// Menjalankan query
$sql = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE id_pengaduan='$id'");

// Memeriksa apakah query berhasil
if (!$sql) {
    // Jika query gagal, tampilkan pesan error
    echo "Error: " . mysqli_error($koneksi);
} else {
    // Jika query berhasil, ambil data
    $data = mysqli_fetch_array($sql);
    
    // Lakukan sesuatu dengan $data


?>
<div class="form-group col-sm-6">
    <label>Tanggal Pengaduan</label>
    <input type="text" name="tgl_pengaduan" value="<?php echo htmlspecialchars($data['tgl_pengaduan']); ?>" class="form-control" readonly>
</div>

<div class="form-group col-sm-6">
    <label>Tulis Laporan</label>
    <textarea class="form-control" rows="7" name="isi_laporan" readonly="">
        <?php echo htmlspecialchars($data['isi_laporan']); ?>
    </textarea>
</div>

<div class="form-group col-sm-6">
    <label>Bukti Foto</label>
    <div>
        <img src="foto/<?php echo htmlspecialchars($data['foto']); ?>" width="800">
    </div>
</div>


                <?php } ?>
        </form>


 <!-- Bootstrap core JavaScript-->
 <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>