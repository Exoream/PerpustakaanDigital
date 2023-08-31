<?php
    include "koneksi.php";
    $penulis = $_POST['nama_penulis'];
    $id_penerbit = $_POST['id_penerbit'];
    $penerbit = $_POST['nama_penerbit'];
    $buku = $_POST['buku'];
    $link = $_POST['link'];

    $sql = "INSERT INTO buku(id_penulis, nama_penulis, id_penerbit, nama_penerbit, buku, link) 
            VALUES('null', '$penulis', '$id_penerbit', '$penerbit', '$buku', '$link')";

if(mysqli_query($koneksi, $sql)){ 
    ?>
    <script>
        document.location.href = "tampilbuku.php";
    </script>
    <?php
}else{
    echo "Pendaftaran Gagal : " . $sql . "" . mysqli_error($koneksi);
}