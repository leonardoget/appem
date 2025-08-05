<?php

require 'koneksi.php';

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$user = $_POST['username'];
$pass = $_POST['password'];
$telp = $_POST['telp'];

// Periksa apakah NIK sudah ada di database
$checkNik = mysqli_query($koneksi, "SELECT * FROM masyarakat WHERE nik = '$nik'");

if (mysqli_num_rows($checkNik) > 0) {
    // Jika NIK sudah terdaftar
    ?>
    <script type="text/javascript">
        alert('Maaf, NIK yang Anda inputkan sudah terdaftar.');
        window.location = "register.php"; // Arahkan kembali ke halaman registrasi
    </script>
    <?php
} else {
    // Jika NIK belum terdaftar, masukkan data ke database
    $sql = mysqli_query($koneksi, "INSERT INTO masyarakat (nik, nama, username, password, telp) VALUES ('$nik', '$nama', '$user', '$pass', '$telp')");
    
    if ($sql) {
        ?>
        <script type="text/javascript">
            alert('Data Berhasil Disimpan, Silahkan Gunakan Untuk Login');
            window.location = "index.php";
        </script>
        <?php
    } else {
        // Jika terjadi kesalahan saat menyimpan data
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
