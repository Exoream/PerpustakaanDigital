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
                        <h1 class="mt-4">Register Penerbit</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Penerbit</li>
                        </ol><br>
                        <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mt-3" style="min-height: 300px;">
                        <div class="card">
                        <div class="card-header">
                            Data Admin
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <form action="registerpenerbit.php" method="POST">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama Penerbit</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_penerbit">
                                    </div>
                                    <div class="mb-3">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">Kota</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2" name="kota">
                                        <input type="submit" class="btn btn-primary mt-4" value="Simpan">
                                    </div>
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