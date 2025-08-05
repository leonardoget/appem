<?php
session_start();
require 'koneksi.php';

$tgl = date('Y/m/d');
$nik = $_SESSION['nik']; // Ambil NIK dari session
$isi = trim($_POST['isi_laporan']); // Hapus spasi di awal dan akhir input
$ft = $_FILES['foto']['name'];
$file = $_FILES['foto']['tmp_name'];
$st = 0;

// Validasi jika isi laporan kosong
if (empty($isi)) {
    ?>
    <script type="text/javascript">
        alert('Maaf, formulir isi pengaduan tidak boleh kosong.');
        window.location.href = "masyarakat.php?url=tulis_pengaduan"; // Kembali ke halaman form tulis pengaduan
    </script>
    <?php
    exit();
}

// Jika isi laporan tidak kosong, lanjutkan proses penyimpanan
$sql = mysqli_query($koneksi, "INSERT INTO pengaduan (tgl_pengaduan, nik, isi_laporan, foto, status) VALUES ('$tgl', '$nik', '$isi', '$ft', '$st')");

if ($sql) {
    // Pindahkan file foto setelah query berhasil
    move_uploaded_file($file, "foto/" . $ft);
    ?>
    <script type="text/javascript">
        alert('Data Berhasil Disimpan, Terima kasih sudah menulis laporan.');
        window.location.href = "masyarakat.php";
    </script>
    <?php
} else {
    echo "Error: " . mysqli_error($koneksi); // Menampilkan error jika query gagal
}
?>
