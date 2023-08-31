<?php

include "koneksi.php";

$ambil_data = $_POST['id_penerbit'];
$nama_penerbit = $_POST['nama_penerbit'];
$kota = $_POST['kota'];

$sql = "UPDATE penerbit SET nama_penerbit = '$nama_penerbit', kota = '$kota' WHERE id_penerbit = $ambil_data";

if(mysqli_query($koneksi, $sql)){ 
    ?>
    <script>
        document.location.href = "tampilpenerbit.php";
    </script>
    <?php
}else{
    echo "Pendaftaran Gagal : " . $sql . "" . mysqli_error($koneksi);
}