<?php
$id = $_GET['id'];
if (empty($id)) {
    header("location:masyarakat.php");
    exit;
}

include 'koneksi.php';

// Query untuk mengambil data pengaduan beserta tanggapan
$query = mysqli_query($koneksi, "SELECT pengaduan.*, tanggapan.tanggapan, tanggapan.tgl_tanggapan, pengaduan.status 
    FROM pengaduan 
    LEFT JOIN tanggapan ON pengaduan.id_pengaduan = tanggapan.id_pengaduan 
    WHERE pengaduan.id_pengaduan = '$id'");

?>
<div class="card shadow">
    <div class="card-header"> 
        <a href="?url=lihat_pengaduan" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
    </div>
    <div class="card-body">
        <?php
        if (mysqli_num_rows($query) == 0 || !$data = mysqli_fetch_array($query)) {
            echo "<div class='alert alert-danger'>Pengaduan tidak ditemukan.</div>";
        } elseif ($data['status'] == 'proses') {
            echo "<div class='alert alert-warning'>Pengaduan Anda sedang diproses. Mohon tunggu tanggapan dari admin.</div>";
        } elseif ($data['status'] == 'selesai' && !empty($data['tanggapan'])) {
        ?>
            <form method="post" action="proses-pengaduan.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label style="font-size: 14px">Tanggal Tanggapan</label>
                    <input type="text" name="tgl_tanggapan" class="form-control" readonly 
                    value="<?= $data['tgl_tanggapan']; ?>">
                </div>

                <div class="form-group">
                    <label style="font-size: 14px">Laporan</label>
                    <textarea name="isi_laporan" class="form-control" readonly><?= $data['isi_laporan']; ?></textarea>    
                </div>

                <div class="form-group">
                    <label style="font-size: 14px">Tanggapan</label>
                    <textarea name="tanggapan" class="form-control" readonly><?= $data['tanggapan']; ?></textarea>    
                </div>
            </form>
        <?php
        } else {
            echo "<div class='alert alert-danger'>Pengaduan Anda belum ditanggapi.</div>";
        }
        ?>
    </div>
</div>
