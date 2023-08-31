<?php
    include "koneksi.php";
    $penerbit = $_POST['nama_penerbit'];
    $kota = $_POST['kota'];

    $sql = "INSERT INTO penerbit(id_penerbit, nama_penerbit, kota) 
            VALUES('null', '$penerbit', '$kota')";

if(mysqli_query($koneksi, $sql)){ 
    ?>
    <script>
        document.location.href = "tampilpenerbit.php";
    </script>
    <?php
}else{
    echo "Pendaftaran Gagal : " . $sql . "" . mysqli_error($koneksi);
}