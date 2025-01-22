<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$nama_karyawan = $_POST['nama'];
$posisi = $_POST['posisi'];
$divisi_id = $_POST['divisi'];

$nama_foto = $_FILES['foto']['name'];
$tmp_foto = $_FILES['foto']['tmp_name'];

#3. menulis query
$simpan = "INSERT INTO karyawans (nama_karyawan,posisi,divisi_id,foto_karyawan) VALUES ('$nama_karyawan','$posisi','$divisi_id','$nama_foto')";

#4. jalankan query
$proses = mysqli_query($koneksi, $simpan);

#4.1 Proses upload file
$upload_foto = move_uploaded_file($tmp_foto,"foto/$nama_foto");

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>