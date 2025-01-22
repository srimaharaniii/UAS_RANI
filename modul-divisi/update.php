<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$id_divisi = $_POST['id_divisi'];
$nama_divisi = $_POST['nama_divisi'];

#3. menulis query
$sunting = "UPDATE divisis SET id_divisi='$id_divisi', nama_divisi='$nama_divisi' WHERE id_divisi='$id_divisi'";

#4. jalankan query
$proses = mysqli_query($koneksi,$sunting);

#5. mengalihkan halaman 
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>