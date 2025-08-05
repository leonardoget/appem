<?php
$koneksi = mysqli_connect("localhost", "root", "", "appem");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
