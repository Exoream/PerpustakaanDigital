<?php

include "koneksi.php";

$id = $_GET['id'];

$sql = "DELETE FROM buku WHERE id_penulis = $id";

if (mysqli_query($koneksi, $sql)) {
    ?>
        <script>
            document.location.href = "tampilbuku.php"
        </script>
    <?php
} else {
    echo "Data Gagal Dihapus: " . $sql . "" . mysqli_error($koneksi);
}

?>