<?php

include "koneksi.php";

$ambil_data = $_POST['id_penulis'];
$penulis = $_POST['nama_penulis'];
$pena = $_POST['nama_pena'];
$buku = $_POST['buku'];

$sql = "UPDATE penulis SET nama_penulis = '$penulis', nama_pena = '$pena', buku = '$buku' WHERE id_penulis = $ambil_data";

if(mysqli_query($koneksi, $sql)){ 
    ?>
    <script>
        document.location.href = "tampilpenulis.php";
    </script>
    <?php
}else{
    echo "Pendaftaran Gagal : " . $sql . "" . mysqli_error($koneksi);
}