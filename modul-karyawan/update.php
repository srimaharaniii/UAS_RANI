<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$id = $_POST['id'];
$nama_karyawan = $_POST['nama_karyawan'];
$posisi = $_POST['posisi'];
$divisi_id = $_POST['divisi_id'];

#3. menulis query
$sunting = "UPDATE karyawans SET nama_karyawan='$nama_karyawan', posisi='$posisi', divisi_id='$divisi_id'";

#4. jalankan query
$proses = mysqli_query($koneksi, $sunting);

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>