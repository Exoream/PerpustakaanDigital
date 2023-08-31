<?php
    include "koneksi.php";
    $penulis = $_POST['nama_penulis'];
    $pena = $_POST['nama_pena'];
    $buku = $_POST['buku'];

    $sql = "INSERT INTO penulis(id_penulis, nama_penulis, nama_pena, buku) 
            VALUES('null', '$penulis', '$pena', '$buku')";

if(mysqli_query($koneksi, $sql)){ 
    ?>
    <script>
        document.location.href = "tampilpenulis.php";
    </script>
    <?php
}else{
    echo "Pendaftaran Gagal : " . $sql . "" . mysqli_error($koneksi);
}