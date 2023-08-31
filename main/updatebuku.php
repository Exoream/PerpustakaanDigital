<?php

include "koneksi.php";

$ambil_data = $_POST['id_penulis'];
$penulis = $_POST['nama_penulis'];
$id_penerbit = $_POST['id_penerbit'];
$penerbit = $_POST['nama_penerbit'];
$buku = $_POST['buku'];
$link = $_POST['link'];

$sql = "UPDATE buku SET nama_penulis = '$penulis', id_penerbit = '$id_penerbit', nama_penerbit = '$penerbit', buku = '$buku', link = '$link' WHERE id_penulis = $ambil_data";

if(mysqli_query($koneksi, $sql)){ 
    ?>
    <script>
        document.location.href = "tampilbuku.php";
    </script>
    <?php
}else{
    echo "Pendaftaran Gagal : " . $sql . "" . mysqli_error($koneksi);
}