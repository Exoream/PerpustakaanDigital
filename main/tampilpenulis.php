<?php
    include "navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Data Penulis</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Penulis</li>
                        </ol>
                        <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mt-3" style="min-height: 300px;">
                        <div class="card">
                        <div class="card-header">
                            Data Penulis
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <a href="penulis.php" class="btn btn-primary">Tambah Data</a>
                                </div>
                                <div class="col">
                                    <form class="" method="GET" style="display: flex; align-items: flex-start;">
                                        <input type="text" class="form-control" name="keyword" style="margin-right: 10px;">
                                        <input type="submit" class="btn btn-primary" style="width:120px" name="cari" value="Cari">
                                    </form>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col">
                                    <table class="table table-bordered table-striped">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Penulis</th>
                                            <th>Nama Pena</th>
                                            <th>Buku</th>
                                            <th>Aksi</th>
                                        </tr>
                                        <?php
                                            if(isset($_GET['cari'])){
                                                $keyword = $_GET['keyword'];
                                                $query = mysqli_query($koneksi, "select * from penulis where nama_penulis like '%$keyword%'");
                                            }else{
                                                $query = mysqli_query($koneksi, "select * from penulis");
                                            }
                                            while($ambil_data = mysqli_fetch_array($query)){    
                                        ?>
                                        <tr>
                                            <td><?php echo $ambil_data['id_penulis']; ?></td>
                                            <td><?php echo $ambil_data['nama_penulis']; ?></td>
                                            <td><?php echo $ambil_data['nama_pena']; ?></td>
                                            <td><?php echo $ambil_data['buku']; ?></td>
                                            <td><a href="editpenulis.php?id=<?php echo $ambil_data['id_penulis']; ?>" class="btn btn-warning">Edit</a>
                                                <a href="hapuspenulis.php?id=<?php echo $ambil_data['id_penulis']; ?>" class="btn btn-danger">Hapus</a></td>
                                        </tr>
                                        <?php
                                            }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>

<?php
    include "footer.php";
?>