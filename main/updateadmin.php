<?php

include "koneksi.php";

$ambil_data = $_POST['id_admin'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "UPDATE login_admin SET username = '$username', password = '$password' WHERE id_admin = $ambil_data";

if(mysqli_query($koneksi, $sql)){ 
    ?>
    <script>
        document.location.href = "tampiladmin.php";
    </script>
    <?php
}else{
    echo "Pendaftaran Gagal : " . $sql . "" . mysqli_error($koneksi);
}