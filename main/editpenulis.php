<?php
    include "navbar.php";
    $ambil_data = $_GET['id'];
    $sql = "SELECT * FROM penulis WHERE id_penulis = $ambil_data";
    $query = mysqli_query($koneksi, $sql);
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
                        <h1 class="mt-4">Edit Penulis</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Penulis</li>
                        </ol><br>
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
                                    <form action="updatepenulis.php" method="POST">
                                    <?php

while ($data = mysqli_fetch_array($query)) {
    # code...

    ?>                              
                                    <input type="hidden" name="id_penulis" value="<?php echo $ambil_data ?>">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama Penulis</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_penulis" value="<?php echo $data['nama_penulis'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">Nama Pena</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2" name="nama_pena" value="<?php echo $data['nama_pena'] ?>" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">Nama Buku</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2" name="buku" value="<?php echo $data['buku'] ?>">
                                        <input type="submit" class="btn btn-primary mt-4" value="Simpan">
                                    </div>
                                    <?php
                        }
                        ?>
                                    </form>
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