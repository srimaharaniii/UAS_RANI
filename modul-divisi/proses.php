<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$id_divisi = $_POST['id_divisi'];
$nama_divisi = $_POST['posisi'];

#3. menulis query
$simpan = "INSERT INTO divisi (id_divisi,nama_divisi) VALUES ('$id_divisi','$nama_divisi')";

#4. jalankan query
$proses = mysqli_query($koneksi, $simpan);


#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>