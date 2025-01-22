<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
</head>
<body>
<?php 
    include_once('../navbar.php');
?>

<div class="container">
    <div class="row mt-5">
        <div class="col-8 m-auto">
            <div class="card">
            <div class="card-header">
                <h3 class="float-start">Form Data Karyawan</h3>
                
            </div>
            <div class="card-body">
            <form action="proses.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Karyawan</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">posisi</label>
                    <input type="text" name="posisi" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Divisi</label>
                    <select name="divisi" class="form-control" id="">
                        <option value="">-Divisi-</option>
                        <?php
                            include('../koneksi.php');
                            $sql_kar = "SELECT * FROM karyawans";
                            $qry_kar = mysqli_query($koneksi,$sql_kar);
                            foreach($qry_kar as $data_kar){
                                ?>
                               <option value="<?=$data_kar['id']?>"><?=$data_kar['karyawan']?></option>
                               <?php
                            }
                        ?>
                    </select>
                
                
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Foto</label>
                    <input type="file" accept="image/*" name="foto" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
            </div>
        </div>
    </div>
</div>

    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/all.js"></script>
</body>
</html>